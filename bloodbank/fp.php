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

$message = false;
$error = false;
if($_SERVER['REQUEST_METHOD'] == "POST")
{
    
    $password=$_POST['password'];
    $uname=$_POST['username'];
    if(!empty($uname) && !empty($password) )
    {
      
        $otp=rand(1000,9999);
        $anu="select * from users where username='$uname'"; 
       $soni= mysqli_query($con,$anu);
        $row=$soni->fetch_assoc();
        $email_id=$row["email_id"];
      
        $query="update  users set password='$password',otp=$otp,status='no' where username='$uname'";
        mysqli_query($con,$query);
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
                $mail->addAddress($email_id);
                $mail->isHTML(true);
                $mail->Subject = 'Email Verification';
                $mail->Body = 'Hello ' . $uname . ', <br> OTP FOR CHANGING PASSWORD <br> ' . $otp;

        
    
    
        
    
    
   if( $mail->Send())
   {
    header("Location: verify1.php");
    die;
   }
       
       
    }

    else{
        echo "you have not entered valid information!";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User SignUp</title>
    <link rel="stylesheet" href="style611.css">
</head>
<style>
    body
    {
        background-image:url('sign.jpg');
        background-repeat:no-repeat;
    }
    </style>
<body>

    <section class="content">
        <div class="box">
            <div class="square" style="--i:0"></div>
            <div class="square" style="--i:1"></div>
            <div class="square" style="--i:2"></div>
            <div class="square" style="--i:3"></div>
            <div class="square" style="--i:4"></div>
            <div class="container">
                <div class="form">
                    <div class="title sup">FORGOT PASSWORD</div>
                    <form action="" method="post">

                        <div>
                            <?php
                            if ($error) {
                                echo '<span class="errormsg">' . $error . '</span>';
                            } elseif (isset($_GET['message'])) {
                                $message = $_GET['message'];
                                echo '<span class="errormsg">' . $message . '</span>';
                            }
                            ?>
                        </div>
                        <div class="inputbox">
                            <input type="text" name="username" id="" required>
                            <label>Enter Username</label>
                        </div>
                       
                        <div class="inputbox">
                            <input type="password" name="password" id="" required>
                            <label>Enter New Password</label>
                        </div>
                        <div class="inputbox">
                            <input type="password" name="cpassword" id="" required>
                            <label>Re-Enter Password</label>
                        </div>
                        <div class="inputbox ssbtn">
                            <input type="submit" name="submit" id="" value="CLICK">
                        </div>

                    
                    
                    </form>
                </div>
            </div>
        </div>

    </section>


</body>

</html>