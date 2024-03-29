<?php
 @include 'config.php';
 // retrieve teachers data from the database
 $sql = "SELECT * FROM teachers";
 $result = $conn->query($sql);

 //store the teachers in an array
 $teachers = array();
 if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        $teachers[] = $row;
    }
 }
 $conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>teacher</title>
    <!--font awesome cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!--custom css file link-->
    <link rel="stylesheet" type="text/css" href="style 1.css">

</head>
<body>
    <div class="container">
        <header>
            <a href="#" class="logo">Spark<span>Ed</span></a>

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
       
        <!-- teacher section-->
        <section class="teacher">
            <?php foreach($teachers as $teacher):?>
                <div class="box">
               
                <img src="images/<?php echo $teacher['Profile']; ?>" alt="">
                
                <h3><?php echo $teacher['Name']; ?></h3>
                <p><?php echo $teacher['Bio']; ?></p>

                <div class="share">
                <a href="'#" class="fab fa-facebook-f"></a>
                <a href="'#" class="fab fa-twitter"></a>
                <a href="'#" class="fab fa-instagram"></a>
                <a href="'#" class="fab fa-linkedin"></a>
            </div>
                </div>
                <?php endforeach; ?>
            </section>
        <!--
        <section class="teacher">
        <div class="box">
            <img src="images/tec 1.jpg" alt="">
            <h3>Mr.X</h3>
            <p>hskdksajdhkhk</p>
            <div class="share">
                <a href="'#" class="fab fa-facebook-f"></a>
                <a href="'#" class="fab fa-twitter"></a>
                <a href="'#" class="fab fa-instagram"></a>
                <a href="'#" class="fab fa-linkedin"></a>
            </div>
        </div>
        <div class="box">
            <img src="images/tec 2.jpg" alt="">
            <h3>Mr.X</h3>
            <p>hskdksajdhkhk</p>
            <div class="share">
                <a href="'#" class="fab fa-facebook-f"></a>
                <a href="'#" class="fab fa-twitter"></a>
                <a href="'#" class="fab fa-instagram"></a>
                <a href="'#" class="fab fa-linkedin"></a>
            </div>
        </div>
        <div class="box">
            <img src="images/tec 3.jpg" alt="">
            <h3>Mr x</h3>
            <p>hskdksajdhkhk</p>
            <div class="share">
                <a href="'#" class="fab fa-facebook-f"></a>
                <a href="'#" class="fab fa-twitter"></a>
                <a href="'#" class="fab fa-instagram"></a>
                <a href="'#" class="fab fa-linkedin"></a>
            </div>
        </div>
        <div class="box">
            <img src="images/tec 5.jpg" alt="">
            <h3>Mr Y</h3>
            <p>hskdksajdhkhk</p>
            <div class="share">
                <a href="'#" class="fab fa-facebook-f"></a>
                <a href="'#" class="fab fa-twitter"></a>
                <a href="'#" class="fab fa-instagram"></a>
                <a href="'#" class="fab fa-linkedin"></a>
            </div>
        </div>
       
        </section>-->
         <!--footer section--->
         <section class="footer">
            <div class="box-container">
                <div class="box">
                    <h3>about us</h3>
                    <p> we believe in the power of education and strive to make learning accessible to everyone, anytime, and anywhere.<br>
                         Our platform is designed to offer a wide range of high-quality online courses, empowering learners to enhance their skills,<br>
                          expand their knowledge, and achieve their personal and professional goals.</p>
 
            </div>
            <div class="box">
                <h3>quick links</h3>
                <a href="home.php">home</a>
                <a href="course.php">course</a>
                <a href="teacher.php">teacher</a>
                <a href="price.php">price</a>
                <a href="review.php">review</a>
                <a href="contact.php">contact</a>
               
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
                <p><i class="fas fa-envelope"></i>SparkEd@gmail.com</p>
                <p><i class="fas fa-map-marker-alt"></i>Dhaka,Bangladesh</p>
            </div>
        </div>
        <div class="credit">created by <span>Sumaiya Alam Ananna</span></div>
        </section>
       
    </div>

    <!--custom js file link-->
    <script src="js/script.js"></script>
</body>
</html>