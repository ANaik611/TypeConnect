<?php
$error = false;
$message = false;
session_start();
session_unset();
session_destroy();
include("connection1.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require '../PHPMailer/PHPMailer.php';
require '../PHPMailer/Exception.php';
require '../PHPMailer/SMTP.php';

$username=$_POST['firstname'];
$lname=$_POST['lastname'];
$body=$_POST['subject'];
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
$mail->addAddress('anushkaanilnaik611@gmail.com');
$mail->isHTML(true);
$mail->Subject = 'Email Verification';
$mail->Body = 'Hello i m' . $username . '  '.$lname.'  subject: ' .$body;
if($mail->send())
{
    echo "your message has been delivered";
}
?>