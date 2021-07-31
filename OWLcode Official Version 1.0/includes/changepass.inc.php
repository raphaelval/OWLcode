<?php

include('db.inc.php');
session_start();

if (isset($_POST["submitChange"])) {
    
    $currentPass = $_POST['currentPass'];
    $newPass = $_POST['newPass'];
    $confirmNewPass = $_POST['confirmNewPass'];
    
    $loggedInUser = $_SESSION['loginUser'];
    $passSql = "SELECT usersName, usersPass FROM users WHERE usersName='$loggedInUser'";
    $result = $con->query($passSql);
    
    $passRow = $result->fetch_assoc();
    
    $newPasswordHash = password_hash($newPass, PASSWORD_BCRYPT);
    
    if (!password_verify($currentPass, $passRow['usersPass'])) {
        header("location: ../profile/account.php?changepassworderror=passwordnomatch");
        exit();
    } else {
        if ($currentPass == $newPass) {
            header("location: ../profile/account.php?changepassworderror=passwordmatch");
            exit();
        } else {
            if (strlen($newPass) < 5) {
                header("location: ../profile/account.php?changepassworderror=passtooshort");
                exit();
            } else {
                if (!preg_match('/[0-9]/', $newPass)) {
                    header("location: ../profile/account.php?changepassworderror=missingnumber");
                    exit();
                } else {
                    if (!preg_match('/[A-Z]/', $newPass)) {
                        header("location: ../profile/account.php?changepassworderror=missingcapital");
                        exit();
                    } else {
                        if ($loggedInUser == $newPass) {
                            header("location: ../profile/account.php?changepassworderror=userpasserror");
                            exit();
                        } else {
                            if ($newPass == $confirmNewPass) {
                                $sql = "UPDATE users set usersPass='$newPasswordHash' WHERE usersName='$loggedInUser'";
                                mysqli_query($con, $sql);
                                header("location: ../profile/account.php?success=passwordchanged");
                            } else {
                                header("location: ../profile/account.php?changepassworderror=newpasswordnomatch");
                                exit();
                            }
                        }
                    }
                }
            }
        }
    }
}