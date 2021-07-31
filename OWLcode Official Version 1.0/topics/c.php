<?php
    include('db.inc.php');
    session_start();

    $userCheck = $_SESSION['loginUser'];
    $sessionSql = mysqli_query($con, "select usersName,usersId from users where usersName='$userCheck'");
    $row = mysqli_fetch_array($sessionSql, MYSQLI_ASSOC);

    $loggedInSession = $row['usersName'];
    $loggedInId = $row['usersId'];
?>
<!DOCTYPE html>

<html>
<head>
    <title>Home - OWLcode</title>
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
                    <li class="nav-item active dropdown"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="buton" data-toggle="dropdown">Topics</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item active" href="c.html">C</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="cplusplus.html">C++</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="java.html">Java</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="html-css.html">HTML/CSS</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="javascript.html">Javascript</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="python.html">Python</a>
                    </div>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../index.php#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="../index.php#contact">Contact</a></li>
                </ul>
                
                <ul class="navbar-nav ml-auto">
                    <?php
                        if (isset($_SESSION['loginUser'])) { //check if logged in
                    ?>
                    <li class="nav-item"><a class="nav-link" href="">Hello <?php echo $_SESSION['loginUser']; ?></a></li>
                    <li class="nav-item"><a class="nav-link" href="login-signup/signout.php">Sign Out</a></li>
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
                        <form class="form-inline">
                        <input class="form-control my-1 ml-auto mr-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-light mr-auto" type="submit">Search</button></form>
                    </div>
                </div>
            </div>
        </div>
        
        
        
        
        
        
        <footer class="container-fluid text-center">
            <div class="row">
                <div class="col-sm-6">
                    <h3 id="contact">Contact Us</h3>
                    <br>
                    <h4>Address and contact info here.</h4>
                </div>
                <div class="col-sm-6">
                    <h3>Follow Us</h3>
                    <br>
                    <a href="#" class="fa fa-facebook-square"></a>
                    <a href="#" class="fab fa-instagram-square"></a>
                    <a href="#" class="fa fa-twitter-square"></a>
                    <a href="#" class="fa fa-linkedin-square"></a>
                </div>
            </div>
        
        </footer>
    </body>



</html>