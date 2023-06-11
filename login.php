<?php
    @include 'config.php';

    session_start();

    // registration codes
    if(isset($_POST['submit'])){
        
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $pass = md5($_POST['password']);
        $cpass = md5($_POST['cpassword']);
        $user_type = $_POST['user_type'];

        $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass'";

        $result = mysqli_query($conn, $select);

        if(mysqli_num_rows($result) > 0){
            $error[] = "Account already exists!";
        }else{
            if($pass != $cpass){
                $error[] = "Password not matched!";
            }else{
                $insert = "INSERT INTO user_form(name, email, password, user_type) VALUES('$name','$email','$pass','$user_type')";
                mysqli_query($conn, $insert);
                header('location:home.php');
            }
        }
    }

    //login codes
    if(isset($_POST['submit'])){
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $pass = md5($_POST['password']);

        $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass'";
        $result = mysqli_query($conn, $select);

        if(mysqli_num_rows($result) > 0){
            $row  = mysqli_fetch_array($result);

            if($row['user_type'] == 'admin'){
                $_SESSION['admin_name'] = $row['name'];
                header('location:admin_page.php');
            }elseif($row['user_type'] == 'user'){
                $_SESSION['user_name'] = $row['name'];
                header('location:user_page.php');
            }
        }else{
            $error[] = 'Incorrect email or password!';
        }
    };

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <!--font awesome cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!--custom css file link-->
    <link rel="stylesheet" type="text/css" href="style.css">

    


</head>
<body>
    

   <div class="page">
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Log In</button>
                <button type="button" class="toggle-btn" onclick="register()">Register</button>
            </div>
            
            
        <form id="login" method="POST" class="input-group">
            <?php
                if(isset($error)){
                    foreach($error as $error){
                        echo '<span>' .$error. '</span>';
                    };
                };
            ?>
            <input type="text" name="email" class="input-field" placeholder="Email" required>
            <input type="password" name="password" class="input-field" placeholder="Enter Passward" required>
            <input type="checkbox" class="check-box"><span>Rembember Passward</span>
            <button type="submit" name="submit" class="submit-btn"> Log in</button>
        </form>
        <form id="register" method="POST" class="input-group">
            <?php
                /* if(isset($error)){
                    foreach($error as $error){
                        echo '<span>.$error.</span>';
                    }
                } */
            ?>
            <input type="text" name="name" class="input-field" placeholder="User Id" required>
            <input type="email" name="email" class="input-field" placeholder="Email Id" required>
            <input type="password" name="password" class="input-field" placeholder="Enter Passward" required>
            <input type="password" name="cpassword" class="input-field" placeholder="Confirm Passward" required>
            <select name="user_type" id="" class="input-field">
                <option value="user">User</option>
                <option value="admin">Admin</option>
            </select>
            <input type="checkbox" class="check-box"><span>I agreee to the trems &conditions</span>
            <button type="submit" name="submit" class="submit-btn">Register</button>
        </form>
        </div>
        

    </div>
    <script>
        var x=document.getElementById("login");
        
        var y=document.getElementById("register");
        var z=document.getElementById("btn");
        function register(){
            x.style.left="-400px";
            y.style.left="50px";
            z.style.left="110px";
        }
        function login(){
            x.style.left="50px";
            y.style.left="450px";
            z.style.left="0px";
        }

        

    </script>
</body>
</html>
