<?php

include('db.inc.php');
session_start();

$userCheck = $_SESSION['loginUser'];
$sessionSql = mysqli_query($con, "select usersName,usersId,usersEmail from users where usersName='$userCheck'");
$row = mysqli_fetch_array($sessionSql, MYSQLI_ASSOC);

$loggedInSession = $row['usersName'];
$loggedInId = $row['usersId'];
$loggedInEmail = $row['usersEmail'];

if (!isset($loggedInSession) || $loggedInSession==NULL) {
    header("Location: ../index.php");
    exit();
}