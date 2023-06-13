<?php
    @include 'config.php';

    session_start();
    if(!isset($_SESSION['admin_name'])){
        header('location:home.php');
    }
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
                <a href="admin_page.php">home</a>
                <a href="course_admin.php">course</a>
                <a href="teacher_admin.php">teacher</a>
                <a href="price_admin.php">price</a>
                <a href="review_admin.php">review</a>
                <a href="contact_admin.php">contact</a>
                <button class="btn">
                    <span>
                        <?php
                            echo $_SESSION['admin_name'];
                        ?>
                    </span>
                </button>
            </nav>
        </header>
       
        <!--course section-->
        <section class="course">
            <div class="box">
                <span class="amount">$59.99</span>
                <img src="images/ht.jpg" alt="">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h3>HTML & CSS</h3>
                <p>hghfjgjh</p>
                <a href="#" class="btn">learn More</a>
                <div class ="icons">
                    <p><i class="far fa-clock"></i> 2 hours</p>
                    <p><i class="far fa-calendar"></i> 6 months</p>
                    <p><i class="far fa-book"></i> 12 modules</p>
                </div>
            </div>
            <div class= "box">
                <span class="amount">$59.99</span>
                <img src="images/jv.jpg" alt="">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h3>javascript</h3>
                <p>hghfjgjh</p>
                <a href="#" class="btn">learn More</a>
                <div class ="icons">
                    <p><i class="far fa-clock"></i> 2 hours</p>
                    <p><i class="far fa-calendar"></i> 6 months</p>
                    <p><i class="far fa-book"></i> 12 modules</p>
                </div>
            </div>
            <div class="box">
                <span class="amount">$59.99</span>
                <img src="images/ph.jpg" alt="">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h3>PHP</h3>
                <p>hghfjgjh</p>
                <a href="#" class="btn">learn More</a>
                <div class ="icons">
                    <p><i class="far fa-clock"></i> 2 hours</p>
                    <p><i class="far fa-calendar"></i> 6 months</p>
                    <p><i class="far fa-book"></i> 12 modules</p>
                </div>
            </div>
            <div class="box">
                <span class="amount">$59.99</span>
                <img src="images/graphic.jpg" alt="">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h3>Graphic Design</h3>
                <p>hghfjgjh</p>
                <a href="#" class="btn">learn More</a>
                <div class ="icons">
                    <p><i class="far fa-clock"></i> 2 hours</p>
                    <p><i class="far fa-calendar"></i> 6 months</p>
                    <p><i class="far fa-book"></i> 12 modules</p>
                </div>
            </div>
            <div class="box">
                <span class="amount">$59.99</span>
                <img src="images/adobe.jpg" alt="">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h3>Adobe Illustrator</h3>
                <p>hghfjgjh</p>
                <a href="#" class="btn">learn More</a>
                <div class ="icons">
                    <p><i class="far fa-clock"></i> 2 hours</p>
                    <p><i class="far fa-calendar"></i> 6 months</p>
                    <p><i class="far fa-book"></i> 12 modules</p>
                </div>
            </div>
            <div class="box">
                <span class="amount">$59.99</span>
                <img src="images/python.png" alt="">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h3>Python</h3>
                <p>hghfjgjh</p>
                <a href="#" class="btn">learn More</a>
                <div class ="icons">
                    <p><i class="far fa-clock"></i> 2 hours</p>
                    <p><i class="far fa-calendar"></i> 6 months</p>
                    <p><i class="far fa-book"></i> 12 modules</p>
                </div>
            </div>
            <div class="box">
                <span class="amount">$59.99</span>
                <img src="images/photo.jpg" alt="">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h3>Photography</h3>
                <p>hghfjgjh</p>
                <a href="#" class="btn">learn More</a>
                <div class ="icons">
                    <p><i class="far fa-clock"></i> 2 hours</p>
                    <p><i class="far fa-calendar"></i> 6 months</p>
                    <p><i class="far fa-book"></i> 12 modules</p>
                </div>
            </div>
            <div class="box">
                <span class="amount">$59.99</span>
                <img src="images/art.jpg" alt="">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h3>Art</h3>
                <p>hghfjgjh</p>
                <a href="#" class="btn">learn More</a>
                <div class ="icons">
                    <p><i class="far fa-clock"></i> 2 hours</p>
                    <p><i class="far fa-calendar"></i> 6 months</p>
                    <p><i class="far fa-book"></i> 12 modules</p>
                </div>
            </div>
            <div class="box">
                <span class="amount">$59.99</span>
                <img src="images/digital marketing.jpg" alt="">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h3>Digital Marketing</h3>
                <p>hghfjgjh</p>
                <a href="#" class="btn">learn More</a>
                <div class ="icons">
                    <p><i class="far fa-clock"></i> 2 hours</p>
                    <p><i class="far fa-calendar"></i> 6 months</p>
                    <p><i class="far fa-book"></i> 12 modules</p>
                </div>
            </div>   
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