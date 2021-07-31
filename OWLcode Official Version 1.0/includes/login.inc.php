<?php

session_start();

include('db.inc.php');

if (isset($_POST["login"])) {
    
    $username = $_POST["username"];
    $password = $_POST["password"];
        
    $sql = "SELECT usersName, usersPass FROM users WHERE usersName='$username'";
   $result = $con->query($sql);
   if (!$result) {
      die("Error executing query: ($con->errno) $con->error");
   }
   elseif ($result->num_rows == 0) {
       header("location: ../login-signup/login.php?error=failed");
       exit();
   }
   else {
      $row = $result->fetch_assoc();

      // See if submitted password matches the hash stored in the Users table    
      if (password_verify($password, $row['usersPass'])) {
          $_SESSION['loginUser'] = $username;
          header("Location: ../index.php");
          exit();
      } 
      else {
          header("location: ../login-signup/login.php?error=failed");
          exit();
      }
   }
} 
else {
    header("location: ../login-signup/login.php");
    exit();
}
