<?php

include('session.inc.php');

$id = $loggedInId;

if (isset($_POST["confirmDelete"])) {
    $keyword = 'DELETE';
    $delete = $_POST["delete"];
    if (preg_match('~\b'.$keyword.'\b~', $delete)) {
        $sql = "DELETE FROM users WHERE usersId = '$id'";
        $result = mysqli_query($con, $sql);
        if ($result) {
            echo "Account Deleted Sucessfully.";
            if (session_destroy()) {
                header('location: ../index.php?success=accountdeleted');
            }
        } elseif (!isset($loggedInSession) || $loggedInSession==NULL) {
            header("Location: ../index.php");
            exit();
        } else {
            header("location: ../profile/accountdelete.php");
        }
    } else {
        header("location: ../profile/accountdelete.php?error=incorrectvalue");
    }
} else {
    header("location: ../profile/accountdelete.php");
}