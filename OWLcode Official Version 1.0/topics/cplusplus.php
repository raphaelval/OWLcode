<?php
    include('../includes/db.inc.php');
    session_start();

    @$userCheck = $_SESSION['loginUser'];
    @$sessionSql = mysqli_query($con, "select usersName,usersId from users where usersName='$userCheck'");
    $row = mysqli_fetch_array($sessionSql, MYSQLI_ASSOC);

    $loggedInSession = $row['usersName'];
    $loggedInId = $row['usersId'];

    require_once('cppassets/cppratesys.inc.php');
?>
<!DOCTYPE html>

<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../images/OWLcode_icon.png" rel="icon">
    <link href="../images/OWLcode_icon.png" rel="apple-touch-icon">
    <title>C++ - OWLcode</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/9d55518d07.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="../CSS/style-home.css">
      <!-- Vendor CSS Files -->
  <link href="cppassets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="cppassets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="cppassets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="cppassets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="cppassets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="cppassets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="cppassets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
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
                    <li class="nav-item active dropdown"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">Topics</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item active" href="cplusplus.php">C++</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="html-css.php">HTML & CSS</a>
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
                        <a class="dropdown-item" href="../login-signup/signout.php">Sign Out</a>
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
        
        <section id="hero" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <h1>Welcome to <span>C++</span>
      </h1>
      <h2>One of the most popular programming languages, C++ is widely used!</h2>

      <div class="d-flex">
        <a href="#about" class="btn-get-started scrollto">Get Started</a>
        <a href="https://youtu.be/raZSmcariyU" class="venobox btn-watch-video" data-vbtype="video" data-autoplay="true"> Watch Video <i class="icofont-play-alt-2"></i></a>
          <div align="center" class="ratesys-cont">
        <i class="fa fa-star fa-2x" data-index="0"></i>
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
              <h4 class="title"><a href="">C++</a></h4>
              <p class="description">C++ is the successor to C. Developed in 1985, it a object-orientated language that works both high and low languages within a machine, with static and dynamic actions. Because of this, there's 
                a lot of control with C++. This language will be focus on this page.
              </p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">C</a></h4>
              <p class="description">The language before C, C is a general-purpose language that supported machine instructions. However, it's more rudimentary for C is static and passes by value. It first appeared in 1972, and is still used by
                some people today.
              </p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">C#</a></h4>
              <p class="description">C# is the aftermath of C and C++. Developed by Microsoft in 2000, C# was made to be a much more simpler object-orientated program than C++. It was made for robustness,
                portability, and for the intention of being applicable for both hosted and embedded systems. 
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
          <h2>cout << "Hello, World" << endl;</h2>
          <h3>The start into your C++ Journey!</h3>
          <p>An object-orientated language that really helps!</p>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="zoom-out" data-aos-delay="100">
            <img src="cppassets/img/helloworld.png" class="img-fluid" alt="">
            <img src="cppassets/img/helloworld2.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <h3>What am I looking at?</h3>
            <p class="font-italic">
              You're looking at a basic function in C++ to output words into the terminal from the compiler.
            </p>
            <ul>
              <li>
            
                <div>
                  <h5>Let's break it down:</h5>
                  <p>
                      <li>#include "iostream" : Allows us to read or write to an input/output stream. Tells the computer to use this directive in the header files.</li>
                      <li>using namespace std; : Allows group entities under a name. Sets up variables and such.</li>
                      <li>int main (): The function means that our function, our area of operation, needs to return some number by the time it is done.</li>
                      <li> cout << "Hello World"; : The element and operator that has the terminal display "Hello World" when we run the program.</li>
                      <li> return 0: Tells the int main function to stop when it runs through the code.</li>
                    </p>
                </div>
              </li>

            </ul>
          </div>
        </div>

      </div>
    </section><!-- End Intro Section -->
      
    <!-- ======= Loops Section ======= -->
    <section id="about" class="about section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>"If/Else & For/While Loops"</h2>
          <h3>Let's do some statements!</h3>
          <p>C++ is a language that requires the input, management, and output of data.</p>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="zoom-out" data-aos-delay="100">
            <img src="cppassets/img/ifelse.png" class="img-fluid" alt="">
            <img src="cppassets/img/forwhile.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <h3>What are If/Else statements and For/While loops?</h3>
            <p class="font-italic">
             If/Else statements are statements made in C++ where an argument, whether numbers or words, are passed through the "if" brackets, seen in the example above. If the argument
             doesn't meet the first critieria, it goes to the else brackets, and if not that, either continues or closes. For/While loops are as they are called, "Loops". An argument
             is put into the For or While argument with conditions. If those conditions are met, the code will repeat outputs of the code inside as long as they are within the condition parameters,
             seen within the parenthesis. 
            </p>
            <ul>
              <li>
            
                <div>
                  <h5>Let's dissect the examples a bit more.</h5>
                  <p>
                      <li> So in the upper example, we put "int number = 5". </li>
                      <li>"int" is a data type in C++, where it means that we're going to be using a number.</li>
                      <li>"number" is the name of the variable we're going to use. It can be named to anything else other than "number", as long as there is a "name" in front of the data type.</li> 
                      <li> We put the condition for "If" up, stating that if the "number" is > 0, it will run the code within the "If" brackets.</li>
                      <li>Because our "int number" = 5, it will fulfill this condition.</li>
                      <li> If it didn't fulfill tihs condition, it would have run the code within the "Else" brackets. </li>
                      <li>If there were any other condition or once the code is done running in the brackets, then the code will move on from the loop</li>
                    </p>
                </div>
              </li>

            </ul>
          </div>
        </div>

      </div>
    </section><!-- End Loop Section -->


    <!-- ======= Learning Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Resources</h2>
          <h3><span>Tutorials</span> that can help you!</h3>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
                <h4><a href="">Data Types</a></h4>
              <p>A better look into the data types of C++, where it is quintessential to use data types.</p>
                <a href="https://youtu.be/8GJqjFoY7UQ" class="venobox btn-watch-video" data-vbtype="video" data-autoplay="true"> Watch Video <i class="icofont-play-alt-2"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <h4><a href="">Loops</a></h4>
              <p>An indepth look into the loops of C++, so you have a better understanding of running data.</p>
                <a href="https://youtu.be/_1AwR-un4Hk" class="venobox btn-watch-video" data-vbtype="video" data-autoplay="true"> Watch Video <i class="icofont-play-alt-2"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <h4><a href="">Extras!</a></h4>
              <p>Tips and Tricks to help you understand and learn coding efficiently.</p>
                <a href="https://youtu.be/vfqvzgkYYF0" class="venobox btn-watch-video" data-vbtype="video" data-autoplay="true"> Watch Video <i class="icofont-play-alt-2"></i></a>
                
                
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
        
          <script src="cppassets/vendor/jquery/jquery.min.js"></script>

  <script src="cppassets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="cppassets/vendor/php-email-form/validate.js"></script>
  <script src="cppassets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="cppassets/vendor/counterup/counterup.min.js"></script>
  <script src="cppassets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="cppassets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="cppassets/vendor/venobox/venobox.min.js"></script>
  <script src="cppassets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
    <script src="cppassets/js/main.js"></script>
        
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
               url: "cplusplus.php",
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