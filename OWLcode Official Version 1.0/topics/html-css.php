<?php
    include('../includes/db.inc.php');
    session_start();

    @$userCheck = $_SESSION['loginUser'];
    @$sessionSql = mysqli_query($con, "select usersName,usersId from users where usersName='$userCheck'");
    $row = mysqli_fetch_array($sessionSql, MYSQLI_ASSOC);

    $loggedInSession = $row['usersName'];
    $loggedInId = $row['usersId'];

    require_once('htmlassets/htmlratesys.inc.php')
?>
<!DOCTYPE html>

<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../images/OWLcode_icon.png" rel="icon">
    <link href="../images/OWLcode_icon.png" rel="apple-touch-icon">
    <title>HTML & CSS - OWLcode</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/9d55518d07.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="../CSS/style-home.css">
      <!-- Vendor CSS Files -->
  <link href="htmlassets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="htmlassets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="htmlassets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="htmlassets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="htmlassets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="htmlassets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="htmlassets/css/style.css" rel="stylesheet">
    
    </head>
    <body>
    
        <nav class="navbar navbar-expand-md navbar-light">
            <a class="navbar-brand" href="../index.php">
                <img src="../images/OWLcode_horizontal.png" height="60px">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarSupportContent">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link" href="../index.php">Home</a></li>
                    <li class="nav-item active dropdown"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="buton" data-toggle="dropdown">Topics</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="cplusplus.php">C++</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item active" href="html-css.php">HTML & CSS</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="javascript.php">JavaScript</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="python.php">Python</a>
                    </div>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../index.php#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="../index.php#questionnaire">Questionnaire</a></li>
                </ul>
                
                <ul class="navbar-nav ml-auto">
                    <?php
                        if (isset($_SESSION['loginUser'])) { //check if logged in
                    ?>
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="buton" data-toggle="dropdown">Hello <?php echo $_SESSION['loginUser']; ?>!</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="../profile/account.php">Account</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="login-signup/signout.php">Sign Out</a>
                    </div>
                    </li>
                    <?php
                        } else {
                    ?>
                    <li class="nav-item"><a class="nav-link" href="../login-signup/login.php">Login</a></li>
                    <li class="nav-item"><a class="nav-link" href="../login-signup/signup.php">Sign Up</a></li>
                    <?php
                        } //close if
                    ?>
                </ul>
            </div>
        </nav>
        <div class="padding searchBar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <form class="form-inline" method="GET" action="search.php">
                        <input class="form-control my-1 ml-auto mr-2" type="search" placeholder="Search" aria-label="Search" >
                        <button class="btn btn-light mr-auto" type="submit">Search</button></form>
                    </div>
                </div>
            </div>
        </div>
        
         <!-- ======= Intro Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <h1>Welcome to <span>HTML & CSS</span>
      </h1>
      <h2>Ever wanted to create your own website? See how far the realm of HTML & CSS can take you!</h2>
      <div class="d-flex">
        <a href="#about" class="btn-get-started scrollto">Get Started</a>
        <a href="https://www.youtube.com/watch?v=gT0Lh1eYk78&t=45s" class="venobox btn-watch-video" data-vbtype="video" data-autoplay="true"> Watch Video <i class="icofont-play-alt-2"></i></a>
          <div align="center" class="ratesys-cont">
        <i class="fa fa-star ratesys fa-2x" data-index="0"></i>
        <i class="fa fa-star fa-2x" data-index="1"></i>
        <i class="fa fa-star fa-2x" data-index="2"></i>
        <i class="fa fa-star fa-2x" data-index="3"></i>
        <i class="fa fa-star fa-2x" data-index="4"></i><?php echo ' ('.round($avg,1).'/5)' ?>
    </div>
      </div>
    </div>
  </section><!-- End Intro -->

  <main id="main">

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href="">HTML</a></h4>
              <p class="description">The basic foundations of every website you see! It doesnt matter whether you're new or old, you're going need some HTML!</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">CSS</a></h4>
              <p class="description">CSS is what adds spice and style to your web page. It lets you be creative with how you want to present yourself to your audience!</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Featured Services Section -->

    <!-- ======= Hello World Section ======= -->
    <section id="about" class="about section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>"Hello World"</h2>
          <h3>Starting Your HTML Journey!</h3>
          <p>A great way to get started and introducing yourself to coding</p>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="zoom-out" data-aos-delay="100">
            <img src="htmlassets/img/hello.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <h3>What is HTML?</h3>
            <p class="font-italic">
              HTML stands for Hyper Text Markup Language and is the building blocks for creating a website. HTML tells the browser how to display your content in your code. Each element in HTML will label what is what.
            </p>
            <ul>
              <li>
            
                <div>
                  <h5>Lets take the photo you see as an example and breakdown the components:</h5>
                  <p>
                      <li>!DOCTYPE html:  identifies that this is an html document </li>
                      <li> html:  the root element of the page</li>
                      <li>head:  contains meta information of the page</li>
                      <li> body:  your content and where your "Hello, World" is displayed</li>
                    </p>
                </div>
              </li>

            </ul>
          </div>
        </div>

      </div>
    </section><!-- End Hello World Section -->
      
    <!-- ======= CSS Section ======= -->
    <section id="about" class="about section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>"CSS"</h2>
          <h3>Let Your Imagination Flow!</h3>
          <p>Begin to learn how to add some color to your websites</p>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="zoom-out" data-aos-delay="100">
            <img src="htmlassets/img/css.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <h3>What is CSS?</h3>
            <p class="font-italic">
             From this example, you can think of CSS as an extension to your HTML code. CSS helps display the elements on your page and adds a bit of flavor and seasoning to your website. 
            </p>
            <ul>
              <li>
            
                <div>
                  <h5>Lets take the photo above as an example and breakdown the components:</h5>
                  <p>
                      <li>background color: type what you want or use hex code to be more accurate </li>
                      <li> color and text-align:  you can set the color and location of your title</li>
                      <li>font-family and font-size:  set the size and font style for your site</li>
                    </p>
                </div>
              </li>

            </ul>
          </div>
        </div>

      </div>
    </section><!-- End CSS Section -->


    <!-- ======= Learning Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Resources</h2>
          <h3>Awesome Materials to <span>Start</span></h3>
          <p>He are some resources that we think can help you start your journey in web development</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
                <h4><a href="">HTML</a></h4>
              <p>Introduction to HTML: Here is a 6 minute video that gets you familiar with what HTML is and the basics of the language from CodeHS</p>
                <a href="https://www.youtube.com/watch?v=9p-YLfGWC68" class="venobox btn-watch-video" data-vbtype="video" data-autoplay="true"> Watch Video <i class="icofont-play-alt-2"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <h4><a href="">CSS</a></h4>
              <p>Introduction to CSS: In this 8 minute video, you get a rundown on the basics and what is the difference between CSS and HTML. All info is courtesy of CodeHS</p>
                <a href="https://www.youtube.com/watch?v=C_LZe6tk92g" class="venobox btn-watch-video" data-vbtype="video" data-autoplay="true"> Watch Video <i class="icofont-play-alt-2"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <h4><a href="">HTML Crash Course</a></h4>
              <p>A great comprehensive video that is about an hour long that will really help beginners. A great starter and with practice can take you a long way. This video is courtesy of Travesty Media</p>
                <a href="https://www.youtube.com/watch?v=UB1O30fR-EE" class="venobox btn-watch-video" data-vbtype="video" data-autoplay="true"> Watch Video <i class="icofont-play-alt-2"></i></a>
                
                
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <h4><a href="">CSS Crash Course</a></h4>
               <p>A great comprehensive video that is about an hour and a half long that will really help beginners.This will really help you begin designing the website of your dreams! This video is courtesy of Travesty Media</p>
                <a href="https://www.youtube.com/watch?v=yfoY53QXEnI" class="venobox btn-watch-video" data-vbtype="video" data-autoplay="true"> Watch Video <i class="icofont-play-alt-2"></i></a>
            </div>
          </div>

        

        </div>

      </div>
    </section><!-- End Learning Section -->


  </main><!-- End #main -->
        
        
        
        
        <footer class="container-fluid text-center">
            <div class="row">
                <div class="col-sm-6">
                    <h3 id="contact">Contact</h3>
                    <br>
                    <div class="info-title">
                        <h4>Address:</h4>
                    </div>
                    <div class="info">
                        <p>777 Glades Rd.</p>
                        <p>Boca Raton, FL 33431</p>
                    </div>
                    <div class="info-title">
                        <h4>Phone number:</h4>
                    </div>
                    <div class="info">
                        <p>(561) 297-3000</p>
                    </div>
                    <div class="info-title">
                        <h4>Email:</h4>
                    </div>
                    <div class="info">
                        <p>owlcode.mgmt@gmail.com</p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <h3>Follow us</h3>
                    <br>
                    <a href="#" class="fa fa-facebook-square"></a>
                    <a href="#" class="fab fa-instagram-square"></a>
                    <a href="#" class="fa fa-twitter-square"></a>
                    <a href="#" class="fa fa-linkedin-square"></a>
                </div>
            </div>
        <div class="container py-4">
      <div class="copyright">
        &copy; Bootstrap from <strong><span>BizLand</span></strong>. Content for OWLcode Team Project
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bizland-bootstrap-business-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
        </footer>
          <!-- Vendor JS Files -->
  <script src="htmlassets/vendor/jquery/jquery.min.js"></script>
  <script src="htmlassets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="htmlassets/vendor/php-email-form/validate.js"></script>
  <script src="htmlassets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="htmlassets/vendor/counterup/counterup.min.js"></script>
  <script src="htmlassets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="htmlassets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="htmlassets/vendor/venobox/venobox.min.js"></script>
  <script src="htmlassets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="htmlassets/js/main.js"></script>
        
 <script src="http://code.jquery.com/jquery-3.4.0.min.js" integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous"></script>
    <script>
        var ratedIndex = -1, uID = 0;

        $(document).ready(function () {
            resetStarColors();

            if (localStorage.getItem('ratedIndex') != null) {
                setStars(parseInt(localStorage.getItem('ratedIndex')));
                uID = localStorage.getItem('uID');
            }

            $('.fa-star').on('click', function () {
               ratedIndex = parseInt($(this).data('index'));
               localStorage.setItem('ratedIndex', ratedIndex);
               saveToTheDB();
            });

            $('.fa-star').mouseover(function () {
                resetStarColors();
                var currentIndex = parseInt($(this).data('index'));
                setStars(currentIndex);
            });

            $('.fa-star').mouseleave(function () {
                resetStarColors();
                if (localStorage.getItem('ratedIndex') != null) {
                    setStars(parseInt(localStorage.getItem('ratedIndex')));
                    uID = localStorage.getItem('uID');
                }
                if (ratedIndex != -1) {
                    setStars(ratedIndex);
                }
            });
        });

        function saveToTheDB() {
            $.ajax({
               url: "html-css.php",
               method: "POST",
               dataType: 'json',
               data: {
                   save: 1,
                   uID: uID,
                   ratedIndex: ratedIndex
               }, success: function (r) {
                    uID = r.id;
                    localStorage.setItem('uID', uID);
               }
            });
        }

        function setStars(max) {
            for (var i=0; i <= max; i++)
                $('.fa-star:eq('+i+')').css('color', 'gold');
        }

        function resetStarColors() {
            $('.fa-star').css('color', 'white');
        }
    </script>
    </body>



</html>