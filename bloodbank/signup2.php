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
    $username=$_POST['username'];
    $email_id=$_POST['emailid'];
    $password=$_POST['password'];
    
    if ($_POST['password'] != $_POST['cpassword']) { //matching passwords
        $error = "Password do not match";
    } 

    if(!empty($username) && !empty($password) && !empty($email_id))
    {
        $otp=rand(1000,9999);
        $query="insert into users (username,password,email_id,otp) values ('$username','$password','$email_id',$otp)";
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
                $mail->Body = 'Hello ' . $username . ', <br> OTP FOR USER VERIFICATION<br> ' . $otp;

        
    
    
   if( $mail->Send())
   {
    header("Location: verify.php");
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
    <SCRIPT type="text/javascript">
        function verifyPassword() {  
  var pw = document.getElementById("pswd").value;  
  var pw2 = document.getElementById("pswd2").value;  
   
  if(pw == "") {  
    alert("Password is empty");  
     return false;  
  }       
  if(pw.length < 8) {  
    alert("Password is less than 8 character");  
     return false;  
  }     
  if(pw.length > 15) {  
    alert("Password is more than 8 characters");  
     return false;  
  } 
  if(pw!=pw2)
  {
    alert("Passwords do not match");  
     return false;  
  }

  else {  
     alert("Password is correct");  
  }  
}  

        </script>
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
                    <div class="title sup">Sign Up</div>
                    <form action=""  onsubmit ="return verifyPassword()" method="post">

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
                            <label>Username</label>
                        </div>
                        <div class="inputbox">
                            <input type="email" name="emailid" id="" required>
                            <label>Email Id</label>
                        </div>
                        <div class="inputbox">
                            <input type="password" name="password" id = "pswd"  required>
                            <label>Password</label>
                        </div>
                        <div class="inputbox">
                            <input type="password" name="cpassword" id="pswd2" required>
                            <label>Re-Enter Password</label>
                        </div>
                    
                        <div class="inputbox ssbtn">
                            <input type="submit" name="submit" id="" value="Sign Up">
                        </div>

                        <p class="sign">
                            Already have an account?
                            <a href="login.php">Log In</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>

    </section>


</body>

</html>