<?php
    include('includes/db.inc.php');
    session_start();

    @$userCheck = $_SESSION['loginUser'];
    @$sessionSql = mysqli_query($con, "select usersName,usersId from users where usersName='$userCheck'");
    $row = mysqli_fetch_array($sessionSql, MYSQLI_ASSOC);

    $loggedInSession = $row['usersName'];
    $loggedInId = $row['usersId'];
?>
<!DOCTYPE html>

<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="images/OWLcode_icon.png" rel="icon">
    <link href="images/OWLcode_icon.png" rel="apple-touch-icon">
    <title>Home - OWLcode</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/9d55518d07.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="CSS/style-home.css">
    </head>
    <body>
    
        <nav class="navbar navbar-expand-md navbar-light">
            <a class="navbar-brand" href="index.php">
                <img src="images/OWLcode_horizontal.png" height="60px">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarSupportContent">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="buton" data-toggle="dropdown">Topics</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="topics/cplusplus.php">C++</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="topics/html-css.php">HTML & CSS</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="topics/javascript.php">JavaScript</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="topics/python.php">Python</a>
                    </div>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#questionnaire">Questionnaire</a></li>
                </ul>
                
                <ul class="navbar-nav ml-auto">
                    <?php
                        if (isset($_SESSION['loginUser'])) { //check if logged in
                    ?>
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="buton" data-toggle="dropdown">Hello <?php echo $_SESSION['loginUser']; ?>!</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="profile/account.php">Account</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="login-signup/signout.php">Sign Out</a>
                    </div>
                    </li>
                    <?php
                        } else {
                    ?>
                    <li class="nav-item"><a class="nav-link" href="login-signup/login.php">Login</a></li>
                    <li class="nav-item"><a class="nav-link" href="login-signup/signup.php">Sign Up</a></li>
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
                        <form class="form-inline" method="GET" action="topics/search.php">
                        <input class="form-control my-1 ml-auto mr-2" type="search" placeholder="Search" aria-label="Search" >
                        <button class="btn btn-light mr-auto" type="submit">Search</button></form>
                    </div>
                </div>
                <div class="row">
                    <?php
                        $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                        if (strpos($fullUrl, "accountdeleted") == true) {
                            echo "<div class='col-sm-12 successDelete'><p>Your account has been deleted successfully!</p><i class='far fa-check-circle'></i></div>";
                        }
                        if (strpos($fullUrl, "success=signedout") == true) {
                            echo "<div class='col-sm-12 successDelete'><p>Signed out successfully!</p><i class='far fa-check-circle'></i></div>";
                        }
                    ?>
                </div>
            </div>
        </div>
        <div id="home">
            <div class="landing">
                <div class="landing-text">
                    <div class="landingtextbg">
                        <h1>WELCOME TO OWLCODE</h1>
                        <h3>Learn The Basics of Programming Languages</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="padding aboutSec">
            <div class="container">
                <div  id="about" class="row">
                    <div class="text-center col-sm-6">
                        <img class="logo" src="images/OWLcode.png">
                    </div>
                    <div class="col-sm-6 text-center">
                        <h2>About OWLcode</h2>
                        <p class="lead">    OWLcode was created by a group of students that attend Florida Atlantic University. As learning developers, we demonstrated our skills by building a website that will be helpful to other students that are also aspiring developers!</p>
                        <div class="lead-icon-cont"><img class="lead-icon" src="images/OWLcode_icon.png"></div>
                        <p class="lead">    What does OWLcode provide? We provide full access for Computer, Electrical Engineering and Computer Science (CEECS) students at FAU to topics such as JavaScript, Python, etc. Our goal is to create a pinnacle where students can come to for help and information to start coding!</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="padding topicsSec">
            <div class="container-fluid text-center">
                <h2><span style="color: dodgerblue;">Learn</span> A New Programming Language Today</h2>
            </div>
            <div class="container">
                <div class="row">
                    <div class="text-center col-lg-3 col-sm-6">
                        <div class="topics-container">
                            <a class="topicsButton" href="topics/cplusplus.php">
                                <h3>C++</h3>
                                <p>C++ is an object-orientated language that works with both high and low languages within a machine, with static and dynamic actions.</p>
                                <h6>GET STARTED</h6>
                            </a>
                        </div>
                    </div>
                    <div class="text-center col-lg-3 col-sm-6">
                        <div class="topics-container">
                            <a class="topicsButton" href="topics/html-css.php">
                                <h3>HTML & CSS</h3>
                                <p>HTML and CSS are two of the core technologies for building Web pages. HTML provides the structure and CSS the visual layout.</p>
                                <h6>GET STARTED</h6>
                            </a>
                        </div>
                    </div>
                    <div class="text-center col-lg-3 col-sm-6">
                        <div class="topics-container">
                            <a class="topicsButton" href="topics/javascript.php">
                                <h3>JavaScript</h3>
                                <p>JavaScript is a scripting or programming language that allows you to implement complex features on web pages.</p>
                                <h6>GET STARTED</h6>
                            </a>
                        </div>
                    </div>
                    <div class="text-center col-lg-3 col-sm-6">
                        <div class="topics-container">
                            <a class="topicsButton" href="topics/python.php">
                                <h3>Python</h3>
                                <p>Python is a high level language that is used for general purposes made so code can be written more clearly and efficiently.</p>
                                <h6>GET STARTED</h6>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="questionnaire" class="padding questionSec">
            <div class="container-fluid text-center">
               <div class="grid">
                   <div id="quiz">
                       <h2><span style="color: dodgerblue;">Questionnaire:</span> Find Where to Start</h2>
                       <hr style="margin-bottom: 20px">
                       <div class="question-cont">
                           <p id="question"></p>
                       </div>
                       <div class="buttons">
                           <button style="margin:5px;" class="btn btn-primary" id="btn0"><span id="choice0"></span></button>
                           <button style="margin:5px;" class="btn btn-primary" id="btn1"><span id="choice1"></span></button>
                           <button style="margin:5px;" class="btn btn-primary" id="btn2"><span id="choice2"></span></button>
                           <button style="margin:5px;" class="btn btn-primary" id="btn3"><span id="choice3"></span></button>
                       </div>

                       <hr style="margin-top: 50px">
                       <div class="questionProg">
                           <p style="width:200px; margin:auto; font-size:20px;" id="progress">Question x of y</p>
                       </div>
                   </div>
                </div>
            </div>
        </div>
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
        &copy; 2020 OWLcode
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bizland-bootstrap-business-template/ -->
        Home Page Designed By The OWLcode Team
      </div>
    </div>
        </footer>
        <script src="includes/homequestionnaire.js"></script>
    </body>



</html>