<?php
    @include 'config.php';

    session_start();
    if(!isset($_SESSION['user_name'])){
        header('location:home.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>price</title>
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
                <a href="user_page.php">home</a>
                <a href="course_user.php">course</a>
                <a href="teacher_user.php">teacher</a>
                <a href="price_user.php">price</a>
                <a href="review_user.php">review</a>
                <a href="contact_user.php">contact</a>
                <button class="btn">
                    <span>
                        <?php
                            echo $_SESSION['user_name'];
                        ?>
                    </span>
                </button>
            </nav>
        </header>
        <!--price section-->
        <section class="price">
            <div class="box">
                <h3>basic</h3>
                <div class="amount"><span>$</span>20<span>/mo</span></div>
                <ul>
                    <li>certificates</li>
                    <li>full courses</li>
                    <li>full modules</li>
                    <li>live projects</li>
                    <li>24 x 7 supports</li>
                </ul>
                <a href="#" class="btn">select plan</a>
            </div>
            <div class="box">
                <h3>standard</h3>
                <div class="amount"><span>$</span>20<span>/mo</span></div>
                <ul>
                    <li>certificates</li>
                    <li>full courses</li>
                    <li>full modules</li>
                    <li>live projects</li>
                    <li>24 x 7 supports</li>
                </ul>
                <a href="#" class="btn">select plan</a>
            </div>
            <div class="box">
                <h3>premium</h3>
                <div class="amount"><span>$</span>90<span>/mo</span></div>
                <ul>
                    <li>certificates</li>
                    <li>full courses</li>
                    <li>full modules</li>
                    <li>live projects</li>
                    <li>24 x 7 supports</li>
                </ul>
                <a href="#" class="btn">select plan</a>
            </div>
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
</user