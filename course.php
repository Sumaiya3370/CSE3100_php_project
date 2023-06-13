<?php
 @include 'config.php';

 // retrieve courses data from the database
 $sql = "SELECT * FROM courses";
 $result = $conn->query($sql);

 //store the courses in an array
 $courses = array();
 if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        $courses[] = $row;
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
    <title>course</title>
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
       
        <!--course section-->
        <section class="course">
            <?php foreach($courses as $course):?>
                <div class="box">
                <span class="amount"><?php echo $course['price']; ?></span>
                <img src="images/<?php echo $course['image']; ?>" alt="">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h3><?php echo $course['course']; ?></h3>
                <p><?php echo $course['details']; ?></p>
                <a href="#" class="btn">learn More</a>
                <div class ="icons">
                    <p><i class="far fa-clock"></i><?php echo $course['daily']; ?></p>
                    <p><i class="far fa-calendar"></i><?php echo $course['months']; ?></p>
                    <p><i class="far fa-book"></i><?php echo $course['modules']; ?></p>
                </div>
                </div>
                <?php endforeach; ?>
            </section>

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
        <div class="credit">created by <span>Sumaiya Alam Ananna</span></div>
        </section>
</div>
    <!--custom js file link-->
    <script src="js/script.js"></script>
</body>
</html>