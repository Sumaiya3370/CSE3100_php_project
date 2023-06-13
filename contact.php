<?php
 @include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
    <!--font awesome cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!--custom css file link-->
    <link rel="stylesheet" type="text/css" href="style 1.css">

    


</head>
<body>
    <div class="container">
        <header>
            <a href="#" class="logo">Smart<span>Study</span></a>

            <div id="menu" class="fas fa-bars"></div>
            <nav class="navbar">
                <a href="home.php">home</a>
                <a href="course.php">course</a>
                <a href="teacher.php">teacher</a>
                <a href="price.php">price</a>
                <a href="review.php">review</a>
                <a href="contact.php">contact</a>
                <a href="login.php">login</a>




            </nav>
        </header>
        <!--contact section---->
        <section class="contact">

            <div class="image">
                <img src="images/contact.jpg" alt="">
            </div>
            
            <form action="">
            
                <div class="inputBox">
                    <input type="text" placeholder="name">
                    <input type="email" placeholder="email">
                </div>
            
                <input type="text" placeholder="subject" class="box">
            
                <textarea placeholder="message" name="" id="" cols="30" rows="10"></textarea>
            
                <input type="submit" class="btn" value="send">
            
            </form>
            
            </section>
            
            




         <!--footer section--->
         <section class="footer">
            <div class="box-container">
                <div class="box">
                    <h3>about us</h3>
                    <p>gjgjhkjhkjhkhk</p>

                    
            </div>
            <div class="box">
                <h3>quick links</h3>
                <a href="#">home</a>
                <a href="#">course</a>
                <a href="#">teacher</a>
                <a href="#">price</a>
                <a href="#">review</a>
                <a href="#">contact</a>
                
            </div>
            <div class="box">
                <h3>follow us</h3>
                <a href="#">facebook</a>
                <a href="#">twitter</a>
                <a href="#">instagram</a>
                <a href="#">linkedin</a>
                
            </div>
            <div class="box">
                <h3>contact us</h3>
                <p><i class="fas fa-phone"></i>+123-765-12356</p>
                <p><i class="fas fa-envelope"></i>StudyLearning@gmail.com</p>
                <p><i class="fas fa-map-marker-alt"></i>Dhaka,Bangladesh</p>

                
                
            </div>
        </div>
        </section>







    </div>












    <!--custom js file link-->
    <script src="js/script.js"></script>
</body>
</html>