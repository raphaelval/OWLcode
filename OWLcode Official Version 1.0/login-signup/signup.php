<!DOCTYPE html>

<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../images/OWLcode_icon.png" rel="icon">
    <link href="../images/OWLcode_icon.png" rel="apple-touch-icon">
    <title>Sign Up - OWLcode</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/9d55518d07.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="../CSS/style-signup.css">
    <style>
        .error-cont{
            background-color: rgb(250,130,130,0.2);
            border-radius: 10px;
            box-shadow: 0px 0px 2px 1px red;
            padding: 10px;
            padding-bottom: 7px;
            padding-top: 7px;
        }
        .error{
            color: red;
        }
    </style>
</head>
<body class="bg">
    <div class="gradient-bg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 col-sm-12 col-xs-12"></div>
                <div class="col-md-4 col-sm-12 col-xs-12 form-container">
                    <form action="../includes/signup.inc.php" method="post">
                        <div class="logo">
                            <a href="../index.php">
                                <img src="../images/OWLcode_horizontal.png">
                            </a>
                        </div>
                        <br>
                        <div class="logo">
                            <h2>Sign Up</h2>
                        </div>
                        <br>
                        <?php
                            $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                            if (strpos($fullUrl, "usernametaken") == true) {
                                echo '<div class="error-cont"><div class="error">Username already taken.</div></div>';
                            }
                            elseif (strpos($fullUrl, "wrongchar") == true) {
                                echo '<div class="error-cont"><div class="error">Special characters are not allowed in username.</div></div>';
                            }
                            elseif (strpos($fullUrl, "usertooshort") == true) {
                                echo '<div class="error-cont"><div class="error">Username has to be 5 or more characters long.</div></div>';
                            }
                            elseif (strpos($fullUrl, "passtooshort") == true) {
                                echo '<div class="error-cont"><div class="error">Password has to be 5 or more characters long.</div></div>';
                            }
                            elseif (strpos($fullUrl, "missingnumber") == true) {
                                echo '<div class="error-cont"><div class="error">Password has to have at least one number.</div></div>';
                            }
                            elseif (strpos($fullUrl, "userpasserror") == true) {
                                echo '<div class="error-cont"><div class="error">Username and password cannot be the same.</div></div>';
                            }
                            elseif (strpos($fullUrl, "missingcapital") == true) {
                                echo '<div class="error-cont"><div class="error">Password has to have at least one capital letter.</div></div>';
                            }
                            elseif (strpos($fullUrl, "emailtaken") == true) {
                                echo '<div class="error-cont"><div class="error">Email already taken.</div></div>';
                            }
                            elseif (strpos($fullUrl, "passwordnomatch") == true) {
                                echo '<div class="error-cont"><div class="error">Passwords do not match.</div></div>';
                            }
                        ?>
                        <br>
                        <div class="form-group">
                            <label for="username">Enter a username</label>
                            <input type="text" class="form-control" name="username" placeholder="Username" required>
                            <small id="usernameHelp" class="form-text text-muted"><ul>
                                    <li>This appears on your profile.</li>
                                    <li>Minimum characters allowed: 5</li>
                                    <li>No special characters. Letters and numbers only.</li>
                                </ul></small>
                        </div>
                        <div class="form-group">
                            <label for="email">Enter your email</label>
                            <input type="email" class="form-control" name="email" placeholder="email@example.com" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Create a password</label>
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                            <small id="usernameHelp" class="form-text text-muted"><ul>
                                    <li>Include at least one number.</li>
                                    <li>Include at least one capital letter.</li>
                                    <li>Minimum characters allowed: 5</li>
                                </ul></small>
                        </div>
                        <div class="form-group">
                            <label for="confirmPassword">Confirm password</label>
                            <input type="password" class="form-control" name="confirmPassword" placeholder="Password" required>
                        </div>
                        <button type="submit" name="register" class="btn btn-primary btn-block">Sign Up</button>
                    </form>
                    <br>
                    <div class="form-bold">Already have an account?</div>
                    <div class="btn-padding">
                        <a href="login.php"><button class="btn btn-outline-primary btn-block">Login</button></a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12"></div>
            </div>
            <div class="container text-center">
                  <div class="copyright">
                    &copy; 2020 OWLcode
                  </div>
                  <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bizland-bootstrap-business-template/ -->
                    Designed by The OWLcode Team
                  </div>
                </div>
        </div>
    </div>
</body>
</html>