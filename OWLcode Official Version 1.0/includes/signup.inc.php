<?php

session_start();
header('location: ../login-signup/login.php?signup-success');

include('db.inc.php');

if (isset($_POST["register"])) {
    
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirmPassword"];
    
    $passwordHash = password_hash($password, PASSWORD_BCRYPT);

    $checkName = "select * from users where usersName = '$username'";
    
    $resultName = mysqli_query($con, $checkName);
    
    $numName = mysqli_num_rows($resultName);

    if ($numName == 1) {
        header("location: ../login-signup/signup.php?error=usernametaken");
        exit();
    } 
    else {
        if (preg_match('/[\'^£";:^`$%&*()}{@#~?><>,|=+¬]/', $username)) {
            header("location: ../login-signup/signup.php?error=wrongchar");
            exit();
        } 
        else {
            if (strlen($username) < 5) {
                header("location: ../login-signup/signup.php?error=usertooshort");
                exit();
            }
            else {
                $checkEmail = "select * from users where usersEmail = '$email'";

                $resultEmail = mysqli_query($con, $checkEmail);

                $numEmail = mysqli_num_rows($resultEmail);

                if ($numEmail == 1) {
                    header("location: ../login-signup/signup.php?error=emailtaken");
                    exit();
                }
                else {
                    if (strlen($password) < 5) {
                        header("location: ../login-signup/signup.php?error=passtooshort");
                        exit();
                    }
                    else {
                        if (!preg_match('/[0-9]/', $password)) {
                            header("location: ../login-signup/signup.php?error=missingnumber");
                            exit();
                        }
                        else {
                            if (!preg_match('/[A-Z]/', $password)) {
                                header("location: ../login-signup/signup.php?error=missingcapital");
                                exit();
                            }
                            else {
                                if ($username == $password) {
                                    header("location: ../login-signup/signup.php?error=userpasserror");
                                    exit();
                                }
                                else {
                                    if ($password == $confirmPassword) {
                                        
                                        $sql = "insert into users (usersName, usersEmail, usersPass) values ('" . $con->real_escape_string($username) . "' , '" . $con->real_escape_string($email) . "', '$passwordHash')";
                                        mysqli_query($con, $sql);
                                        
                                        include('../gmail-send/sendemail.inc.php');
                                        $mail->Subject = "Welcome to OWLcode!";
                                        $mail->setFrom("owlcode.mgmt@gmail.com");
                                        $mail->isHTML(true);
                                        //$mail->addAttachment();
                                        $mail->Body = "<h3>Welcome ". $username ."!</h3>
                                        <p>Your email is verified as ". $email .".</p>
                                        <p>Click <a href='https://lamp.cse.fau.edu/~f2020team13/OWLcode/'>HERE</a> to start coding!</p>";
                                        $mail->AltBody = "Welcome ". $username ."!
Your email is verified as ". $email .".
Click on the link provided to start coding! -> https://lamp.cse.fau.edu/~f2020team13/OWLcode/";
                                        $mail->addAddress($email);
                                        if ( $mail->Send() ) {
                                            header('location: ../login-signup/login.php?signup-emailsent-success');
                                        }

                                        $mail->smtpClose();
                                    } 
                                    else {
                                        header("location: ../login-signup/signup.php?error=passwordnomatch");
                                        exit();
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }
} 
else {
    header("location: ../login-signup/signup.php");
}

