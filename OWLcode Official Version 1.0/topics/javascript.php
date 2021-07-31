<?php
    include('../includes/db.inc.php');
    session_start();

    @$userCheck = $_SESSION['loginUser'];
    @$sessionSql = mysqli_query($con, "select usersName,usersId from users where usersName='$userCheck'");
    $row = mysqli_fetch_array($sessionSql, MYSQLI_ASSOC);

    $loggedInSession = $row['usersName'];
    $loggedInId = $row['usersId'];

    require_once('jscriptassets/jsratesys.inc.php');
?>
<!DOCTYPE html>

<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../images/OWLcode_icon.png" rel="icon">
    <link href="../images/OWLcode_icon.png" rel="apple-touch-icon">
    <title>JavaScript - OWLcode</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/9d55518d07.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="../CSS/style-home.css">
      <!-- Vendor CSS Files -->
  <link href="jscriptassets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="jscriptassets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="jscriptassets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="jscriptassets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="jscriptassets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="jscriptassets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="jscriptassets/css/style.css" media="screen"rel="stylesheet">
  <link href="print.css" media="print" rel="stylesheet">
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
                        <a class="dropdown-item" href="cplusplus.php">C++</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="html-css.php">HTML & CSS</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item active" href="javascript.php">JavaScript</a>
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
      <h1>Welcome to <span>JavaScript</span>
      </h1>
      <h2>The most popular programming language! The lifeblood of a website!</h2>

      <div class="d-flex">
        <a href="#about" class="btn-get-started scrollto">Get Started</a>
        <a href="https://www.youtube.com/watch?v=2nZiB1JItbY" class="venobox btn-watch-video" data-vbtype="video" data-autoplay="true"> Watch Video <i class="icofont-play-alt-2"></i></a>
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
              <h4 class="title"><a href="">JavaScript Origins</a></h4>
              <p class="description">The early to mid-1990s was an important time for the internet. 
                  Key players like Netscape and Microsoft were in the midst of browser wars, with Netscape’s Navigator and Microsoft’s Internet Explorer going head to head. 
                  In September 1995, a Netscape programmer named Brandan Eich developed a new scripting language in just 10 days. 
                  It was originally named Mocha, but quickly became known as LiveScript and, finally, JavaScript.
              </p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">JavaScript vs Java</a></h4>
              <p class="description">JavaScript and Java have basically nothing in common despite the misconception of them being related.
                  Java needs to be run with executable and JavaScript runs in real time making it more dynamic.
                  It used to be called "UI glue".
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
          <h2>document.getElementById('demo').innerHTML = 'Hello World';</h2>
          <h3>The beginning of your dive into JavaScript!</h3>
          <p>The way to make websites better and more responsive.</p>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="zoom-out" data-aos-delay="100">
            <img src="jscriptassets/img/jhelloworld1.png" class="img-fluid" alt="">
            <img src="jscriptassets/img/jhelloworld2.png" class="img-fluid" alt="">
            <img src="jscriptassets/img/jhelloworld3.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <h3>What am I looking at?</h3>
            <p class="font-italic">
              You're looking at basic HTML and JavaScript code that shows how JavaScript can change HTML content.
            </p>
            <ul>
              <li>
            
                <div>
                  <h5>Let's break it down:</h5>
                  <p>
                      <li>The code has all the basic essentials for making a webpage: DOCTYPE, html tags, and body tags.</li>
                      <li>The imporant parts are id= "demo", and onclick="document.getElementById('demo').innerHTML = 'Hello World!'".</li>
                      <li>id= "demo" gives the paragraph a unique signifier.</li>
                      <li>onclick="document.getElementById('demo').innerHTML = 'Hello World!'" houses the first instance of JavaScript code. It means when the button is clicked it will execute the JavaScript code.</li>
                      <li>document signifies the current page</li>
                      <li>getElementById means it will get whatever HTML element that has the id within the parentheses, 'demo'. innerHTML means the content of the elemnt. Equaling all of this to 'Hello World' means that elements with the id of 'demo' will have its content changed to 'Hello World!'.</li>
                      <li>This is one of the most important things to learn about JavasScript is using it to change HTML in response to something, that is why JavaScript is so important.
                    </p>
                </div>
              </li>

            </ul>
          </div>
        </div>

      </div>
    </section><!-- End Intro Section -->
    
    <!-- ======= Script Section ======= -->
    <section id="about" class="about section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2><"script"></"script"></h2>
          <h3>How to utilize Javascript code in HTML</h3>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="zoom-out" data-aos-delay="100">
            <img src="jscriptassets/img/scripttags.png" class="img-fluid" alt="">
            <img src="jscriptassets/img/scriptexternal.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <p>
             The way to insert JavaScript into HTML code without writing it inline with HTML elements is to use the script tag. The first example
             shows the internal way to utilize JavaScript with script tags. The code is specified right in the HTML document. In the
             second example the script tag has a src attribute where it points to an external JavaScript document that houses the desired
             JavaScript code. The script tag can be placed in any location within the body or head tags. Using the script tag with in the HTML document
             or externally depend on how much JavaScript code there is the way the creator wants to organize their documents.
            </p>
          </div>
        </div>

      </div>
    </section><!-- ======= End of Script Section ======= -->

    <!-- ======= Variable Section ======= -->
    <section id="about" class="about section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>var z = x + y;</h2>
          <h3>Variables, Operators, and Arithmetic</h3>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="zoom-out" data-aos-delay="100">
            <img src="jscriptassets/img/jscriptvariables.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <ul>
              <li>
                <div>
                  <h3>How variables, operators, and arithmetic work</h3>
                  <h5>Variables</h5>
                    <p>
                      <li>The left shows examples of variables, operators, and arithmetic in action.</li>
                      <li>There numerous ways to make a variable and they can be a variety of types. 
                          They can be strings, integers, floats, booleans, etc. The first 3 lines show a floating number variable and two string variables.
                          Strings can be made with "" or ''.</li>
                      <li>Variables need to have unique identifiers or names. Names can contain letters, digits, underscores, and dollar signs.
                          Names must begin with a letter, $ or _.
                          Names are case sensitive.
                          Reserved words (like JavaScript keywords) cannot be used as names.
                      </li> 
                      <li>Variables can be declared in a variety of ways as shown on the left. But remember if you make without a value it will be Undefined so remember to always eventually assign a value to your variables.</li>
                    </p>
                    <h5>Operators and Arithmetic</h5>
                    <p>
                      <li>The assignment operator (=) assigns a value to a variable.</li>
                      <li>The addition operator (+) adds numbers, concatenates strings, or concatenates strings and numbers.</li>
                      <li>The multiplication operator (*) multiplies numbers.</li>
                      <li>There are even more operators for more complex operations like modulus(%) and exponent(**). Also, there are comparison operators for greater than and equal too.</li>
                      <li>Operators allow you to do mathematical operations with them and assign them to variables. It generally works like
                          regular math except the equal sign means assignment not equal so you can do things like x = x + 5 and have it work.
                          Its because you are assign x the value of x + 5 not equating them.
                      </li>
                    </p>
                </div>
              </li>
            </ul>
          </div>
        </div>

      </div>
    </section>

    <!-- ======= Learning Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Resources</h2>
          <h3><span>Tutorials</span> to master JavaScript</h3>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
                <h4><a href="">If/Else Statements</a></h4>
              <p>Teach you how to use if/else statements in JavaScript to make your websites be even more responsive and useful.</p>
                <a href="https://www.youtube.com/watch?v=IsG4Xd6LlsM" class="venobox btn-watch-video" data-vbtype="video" data-autoplay="true"> Watch Video <i class="icofont-play-alt-2"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <h4><a href="">DOM</a></h4>
              <p>Understand how Document Object Model (DOM) works to use it to its best ability with JavaScript to gain complete control and effectiveness on how your webpages change and respond.</p>
                <a href="https://www.youtube.com/watch?v=_GxpmQ54aqg" class="venobox btn-watch-video" data-vbtype="video" data-autoplay="true"> Watch Video <i class="icofont-play-alt-2"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <h4><a href="">Functions</a></h4>
              <p>Tutorial on how to use functions with Javascript to make coding simultaneously less cumbersome but more complex.</p>
                <a href="https://www.youtube.com/watch?v=AY6X5jZZ_JE" class="venobox btn-watch-video" data-vbtype="video" data-autoplay="true"> Watch Video <i class="icofont-play-alt-2"></i></a>
                
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
        
          <script src="jscriptassets/vendor/jquery/jquery.min.js"></script>

  <script src="jscriptassets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="jscriptassets/vendor/php-email-form/validate.js"></script>
  <script src="jscriptassets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="jscriptassets/vendor/counterup/counterup.min.js"></script>
  <script src="jscriptassets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="jscriptassets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="jscriptassets/vendor/venobox/venobox.min.js"></script>
  <script src="jscriptassets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
    <script src="jscriptassets/js/main.js"></script>
        
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
               url: "javascript.php",
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