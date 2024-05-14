<?php

$error = false;
$message = false;
session_start();

include("connection1.php");

$cat=$_SESSION['anu'];
$emailid=$_SESSION['e'];
$un=$_SESSION['u'];
session_unset();
session_destroy();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require '../PHPMailer/PHPMailer.php';
require '../PHPMailer/Exception.php';
require '../PHPMailer/SMTP.php';
$message = false;
$error = false;

$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'bloodbank2157@gmail.com';
$mail->Password = 'ucvwintztmctoxgk';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;
$mail->CharSet = 'UTF-8';
// $mail->SMTPDebug       = 3;

$mail->setFrom('bloodbank2157@gmail.com', 'bloodbank');
$mail->addAddress($emailid);
$mail->isHTML(true);
$mail->Subject = 'Email Verification';
$mail->Body = 'Hello ' . $un . ', <br> YOU HAVE SUCCESSFULLT REGISTERED DOR THE BLOOD DONATION <br> HERE IS YOUR DONOR ID<br>' . $cat;
if( $mail->Send())
   {
    header("Location: verifydo.php");
    die;
   }
     


?>