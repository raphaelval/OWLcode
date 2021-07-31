<?php

    require 'PHPmailer/PHPMailer.php';
    require 'PHPmailer/SMTP.php';
    require 'PHPmailer/Exception.php';

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    $mail = new PHPMailer();

    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = "true";
    $mail->SMTPSecure = "tls";
    $mail->Port = "587";
    $mail->Username = "owlcode.mgmt@gmail.com";
    $mail->Password = "owlcode123";