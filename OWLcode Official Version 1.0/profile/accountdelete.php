<?php
    include('../includes/session.inc.php');
?>
<!DOCTYPE html>

<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../images/OWLcode_icon.png" rel="icon">
    <link href="../images/OWLcode_icon.png" rel="apple-touch-icon">
    <title>Account - OWLcode</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/9d55518d07.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="../CSS/style-home.css">
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
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="buton" data-toggle="dropdown">Topics</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="../topics/cplusplus.php">C++</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="../topics/html-css.php">HTML & CSS</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="../topics/javascript.php">JavaScript</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="../topics/python.php">Python</a>
                    </div>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../index.php#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="accounttopics.php">Questionnaire</a></li>
                </ul>
                
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="../login-signup/signout.php">Sign Out</a></li>
                </ul>
            </div>
        </nav>
        <div class="padding searchBar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <form class="form-inline" method="GET" action="../topics/search.php">
                        <input class="form-control my-1 ml-auto mr-2" type="search" placeholder="Search" aria-label="Search" >
                        <button class="btn btn-light mr-auto" type="submit">Search</button></form>
                    </div>
                </div>
            </div>
        </div>
        <div class="account">
            <div class="account-rect col-md-8">
                <div class="row">
                    <div class="account-tabs">
                        <div class="account-img-cont">
                            <div class="account-img">
                                <i class="fas fa-user account-img-user"></i>
                            </div>
                        </div>
                        <div class="account-tabs-text-cont">
                            <a class="button" href="account.php">Account details</a>
                            <a class="button" href="accounttopics.php">Your topics</a>
                            <a class="button active" href="accountdelete.php">Delete account</a>
                        </div>
                    </div>
                    <div class="account-info">
                        <div class="account-info-content">
                            <form action="../includes/deleteacc.inc.php" method="post">
                                <p>Enter the word 'DELETE' to confirm deleting your account: </p>
                                <input type="text" class="form-control" name="delete" placeholder="Enter..." required>
                                <button class="btn btn-danger" name="confirmDelete" type="submit">Delete</button>
                                <?php
                                    $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                                    if (strpos($fullUrl, "incorrectvalue") == true) {
                                        echo "<div class='error-cont'><div class='error'>Value entered was not exactly 'DELETE'.</div></div>";
                                    }
                                ?>
                            </form>
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
        Account Page Designed By The OWLcode Team
      </div>
    </div>
        </footer>
    </body>



</html>