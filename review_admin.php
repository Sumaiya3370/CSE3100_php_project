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
    <title>review</title>
    <!--font awesome cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!--custom css file link-->
    <link rel="stylesheet" type="text/css"  href="style 1.css">
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
       
        <!--review section-->
        <section class="review">
    <div class="box">
      <div class="student">
        <div class="student-info">
            <img src="images/std1.jpg" alt="">
            <div class="info">
                <h3>mr. X</h3>
                <span>student</span>
            </div>
        </div>
        <i class="fas fa-quote-right"></i>
      </div>
      <p class="text">ygjhgkhkugigiyfgkghkuhkhu</p>
    </div>

    <div class="box">
        <div class="student">
          <div class="student-info">
              <img src="images/std 2.jpg" alt="">
              <div class="info">
                  <h3>mr. X</h3>
                  <span>student</span>
              </div>
          </div>
          <i class="fas fa-quote-right"></i>
        </div>
        <p class="text">ygjhgkhkugigiyfgkghkuhkhu</p>  
      </div>
      <div class="box">
        <div class="student">
          <div class="student-info">
              <img src="images/std 3.jpg" alt="">
              <div class="info">
                  <h3>mr. X</h3>
                  <span>student</span>
              </div>
          </div>
          <i class="fas fa-quote-right"></i>
        </div>
        <p class="text">ygjhgkhkugigiyfgkghkuhkhu</p>
      </div>
      <div class="box">
        <div class="student">
          <div class="student-info">
              <img src="images/std 4.jpg" alt="">
              <div class="info">
                  <h3>mr. X</h3>
                  <span>student</span>
              </div>
          </div>
          <i class="fas fa-quote-right"></i>
        </div>
        <p class="text">ygjhgkhkugigiyfgkghkuhkhu</p>
      </div>
      <div class="box">
        <div class="student">
          <div class="student-info">
              <img src="images/std 5.jpg" alt="">
              <div class="info">
                  <h3>mr. X</h3>
                  <span>student</span>
              </div>
          </div>
          <i class="fas fa-quote-right"></i>
        </div>
        <p class="text">ygjhgkhkugigiyfgkghkuhkhu</p>
      </div>
      <div class="box">
        <div class="student">
          <div class="student-info">
              <img src="images/std 6.jpg" alt="">
              <div class="info">
                  <h3>mr. X</h3>
                  <span>student</span>
              </div>
          </div>
          <i class="fas fa-quote-right"></i>
        </div>
        <p class="text">ygjhgkhkugigiyfgkghkuhkhu</p>
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
</html>