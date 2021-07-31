<?php
    include('../includes/db.inc.php');
    session_start();

    @$userCheck = $_SESSION['loginUser'];
    @$sessionSql = mysqli_query($con, "select usersName,usersId from users where usersName='$userCheck'");
    $row = mysqli_fetch_array($sessionSql, MYSQLI_ASSOC);

    $loggedInSession = $row['usersName'];
    $loggedInId = $row['usersId'];

    require_once('pyassets/pyratesys.inc.php');
?>
<!DOCTYPE html>

<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../images/OWLcode_icon.png" rel="icon">
    <link href="../images/OWLcode_icon.png" rel="apple-touch-icon">
    <title>Python - OWLcode</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/9d55518d07.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="../CSS/style-home.css">
    
      <!-- Vendor CSS Files -->
      <link href="pyassets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <link href="pyassets/vendor/icofont/icofont.min.css" rel="stylesheet">
      <link href="pyassets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
      <link href="pyassets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
      <link href="pyassets/vendor/venobox/venobox.css" rel="stylesheet">
      <link href="pyassets/vendor/aos/aos.css" rel="stylesheet">

      <!-- Template Main CSS File -->
      <link href="pyassets/css/style.css" rel="stylesheet">
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
                        <a class="dropdown-item" href="html-css.php">HTML & CSS</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="javascript.php">JavaScript</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item active" href="python.php">Python</a>
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
      <h1>Welcome to <span>Python</span>
      </h1>
      <h2>Step into the world of one of the most simplified and popular programming language!</h2>
      <div class="d-flex">
        <a href="#about" class="btn-get-started scrollto">Get Started</a>
        <a href="https://youtu.be/WvhQhj4n6b8" class="venobox btn-watch-video" data-vbtype="video" data-autoplay="true"> Watch Video <i class="icofont-play-alt-2"></i></a>
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
              <h4 class="title"><a href="">Python</a></h4>
              <p class="description">Python is a high level language that is used for general purposes. It was developed in 1991, and supports multiple programming paradigms. It was made so code was able to be written more clearly and efficiently.
              </p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">Python 2 vs Python 3</a></h4>
              <p class="description"> There are two main versions of popular that exist today, Python 2.x and Python 3.x. Because Python was made a long time ago, Python 2.x was the most developed for its time and has made coding easier. Python 3.x was made in 2008 and continues development to make Python syntax and processes easier. Python 2.x
                is usable with 3.x, and soon 3.x will replace popular languages like C++. 
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Featured Services Section -->

    <!-- ======= Intro Section ======= -->
    <section id="about" class="about section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>print("Hello World!")</h2>
          <h3>Your intro to Python!</h3>
          <p></p>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="zoom-out" data-aos-delay="100">
            <img src="pyassets/img/pyhelloworld.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <h3>What am I looking at?</h3>
            <p class="font-italic">
              You're looking a python output that displays "Hello World"!
            </p>
            <ul>
              <li>
            
                <div>
                  <h5>Let's get more specific:</h5>
                  <p>
                      <li>We're using Python 3.x in this case, since it's a lot easier to look at, and it supports new features.</li>
                      <li>To output words, we use the print statement to do this.</li>
                      <li>We use print("") to write something, with words inbetween the quotes to display.</li>
                      <li>And then the output is displayed after you run the code!</li>
                    </p>
                </div>
              </li>

            </ul>
          </div>
        </div>

      </div>
    </section><!-- End Intro Section -->

        <!-- ======= Numbers and Strings Section ======= -->
        <section id="about" class="about section-bg">
          <div class="container" data-aos="fade-up">
    
            <div class="section-title">
              <h2>Numbers and Strings!</h2>
              <h3>Looking at Variables and Data</h3>
              <p></p>
            </div>
    
            <div class="row">
              <div class="col-lg-6" data-aos="zoom-out" data-aos-delay="100">
                <img src="pyassets/img/numbers.png" class="img-fluid" alt="">
                <br>
                <img src="pyassets/img/string.png" class="img-fluid" alt="">
              </div>
              <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
                <h3>What am I looking at?</h3>
                <p class="font-italic">
                  You're looking at two scripts, one that runs a variable, a number specifically, that equals 7 and prints it out, and a string that is printed out.
                </p>
                <ul>
                  <li>
                
                    <div>
                      <h5>Let's get more specific:</h5>
                      <p>
                          <li> Python supports both integers and floats (numbers that include decimals). </li>
                          <li> To write out an integer, we use "myint" and set it equal to 7, which automatically tells Python that the variable is a number.</li>
                          <li> We can then use printed(myint) to print out the number!</li>
                          <li> For the string, we set the "mystring" variable equal to 'hello'.</li>
                          <li> Python can use either '' or "" to print out strings.</li>
                          <li> Afterwards, we can print(mystring) to print out the 'hello'!</li>
                        </p>
                    </div>
                  </li>
    
                </ul>
              </div>
            </div>
    
          </div>
        </section><!-- Number and Strings Section -->
      
    <!-- ======= Operators Section ======= -->
    <section id="about" class="about section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Time to use operators!</h2>
          <h3>Combining Numbers and Lists using Operators</h3>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="zoom-out" data-aos-delay="100">
            <img src="pyassets/img/operators.png" class="img-fluid" alt="">
            <img src="pyassets/img/operatorsstring.png" class="img-fluid" alt="">
            <img src="pyassets/img/remainder.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <h3>What am I looking at?</h3>
            <p class="font-italic">
             Many programming languages use operators, and we can with Python as well.
            </p>
            <ul>
              <li>
            
                <div>
                  <h5>Let's look at thise a bit closer:</h5>
                  <p>
                      <li> In the upper example, we have a variable called "number" and set a bunch of arithmatic to it.</li>
                      <li> The arithmatic is done automatically, where we can print it out afterwards. Be wary of PEMDAS.</li>
                      <li> With the "helloworld" variable, we can separate "hello" and "world" and add them together using +.</li>
                      <li> Be sure to add a " " with some space in it, otherwise the print result would be "Helloworld" instead of "Hello world".</li>
                      <li> With the remainder example, we can calculate powers, square roots and remainders as shown in the example.</li>

                    </p>
                </div>
              </li>

            </ul>
          </div>
        </div>

      </div>
    </section><!-- Operators Section -->


    <!-- ======= Learning Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Resources</h2>
          <h3><span>Tutorials</span> to help expand your knowledge!</h3>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
                <h4><a href="">Loops</a></h4>
              <p>A look at For/While Loops in Python!</p>
                <a href="https://youtu.be/6iF8Xb7Z3wQ" class="venobox btn-watch-video" data-vbtype="video" data-autoplay="true"> Watch Video <i class="icofont-play-alt-2"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <h4><a href="">Lists</a></h4>
              <p>An introduction Lists within Python.</p>
                <a href="https://youtu.be/tw7ror9x32s" class="venobox btn-watch-video" data-vbtype="video" data-autoplay="true"> Watch Video <i class="icofont-play-alt-2"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <h4><a href="">Functions</a></h4>
              <p>Function learning that will help you understand how to use them.</p>
                <a href="https://youtu.be/owglNL1KQf0" class="venobox btn-watch-video" data-vbtype="video" data-autoplay="true"> Watch Video <i class="icofont-play-alt-2"></i></a>
                
                
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
          <script src="pyassets/vendor/jquery/jquery.min.js"></script>
          <script src="pyassets/vendor/jquery.easing/jquery.easing.min.js"></script>
          <script src="pyassets/vendor/php-email-form/validate.js"></script>
          <script src="pyassets/vendor/waypoints/jquery.waypoints.min.js"></script>
          <script src="pyassets/vendor/counterup/counterup.min.js"></script>
          <script src="pyassets/vendor/owl.carousel/owl.carousel.min.js"></script>
          <script src="pyassets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
          <script src="pyassets/vendor/venobox/venobox.min.js"></script>
          <script src="pyassets/vendor/aos/aos.js"></script>

          <!-- Template Main JS File -->
          <script src="pyassets/js/main.js"></script>
        
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
               url: "python.php",
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