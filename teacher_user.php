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
    <title>teacher</title>
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
                <div id="profile-btn" class="profile-btn-container">
        <div class="btn-wrapper">
        <button class="btn">
            <span>
                <?php
                    echo $_SESSION['user_name'];
                ?>
            </span>
        </button>
        <div class="dropdown">
            <ul>
            <li>
                    <a href="logout.php">
                    <svg class="svg-snoweb svg-theme-dark" height="28" preserveaspectratio="xMidYMid meet" viewbox="0 0 100 100" width="30" x="0" xmlns="http://www.w3.org/2000/svg" y="0">
                    <path class="svg-fill-primary" d="M42.9,82.5h-14.3c-8.105,0-14.7-6.595-14.7-14.7V32.2c0-8.106,6.595-14.7,14.7-14.7h14.3c8.105,0,14.7,6.594,14.7,14.7v3.5c0,2.209-1.791,4-4,4s-4-1.791-4-4v-3.5c0-3.694-3.005-6.7-6.7-6.7h-14.3c-3.694,0-6.7,3.006-6.7,6.7v35.6c0,3.694,3.006,6.7,6.7,6.7h14.3c3.694,0,6.7-3.006,6.7-6.7v-3.5c0-2.209,1.791-4,4-4s4,1.791,4,4v3.5c0,8.105-6.595,14.7-14.7,14.7Z" opacity=".5">
                    </path>
                    <path class="svg-fill-primary" d="M67.8,68.3c-1.023,0-2.048-.391-2.828-1.172-1.562-1.562-1.562-4.095,0-5.656l7.471-7.472H32.2c-2.209,0-4-1.791-4-4s1.791-4,4-4h40.242l-7.471-7.471c-1.562-1.562-1.562-4.095,0-5.657,1.561-1.562,4.096-1.562,5.656,0l14.295,14.295c.016,.015,.03,.03,.045,.045l.003,.003c.36,.371,.635,.795,.822,1.247,.197,.473,.307,.993,.307,1.538s-.109,1.064-.307,1.538c-.188,.451-.462,.875-.822,1.247h0l-.002,.003c-.015,.015-.029,.03-.045,.045l-14.295,14.295c-.78,.781-1.805,1.172-2.828,1.172Z">
                    </path>
                    </svg>
                        <span>Logout</span>
                    </a>
                </li>
            </ul>
        </div>
        </div>
    </div>

            </nav>
        </header>
       
        <!-- teacher section-->
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