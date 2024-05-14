<?php
session_start();
include("connection1.php");
include("function.php");
if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $name=$_POST['name'];
    $dob=$_POST['dob'];
    $gender=$_POST['G'];
    $phone=$_POST['phone'];
   $un=$_SESSION['a'];
 
    $bloodtype=$_POST['D'];
    $_SESSION['s']= $bloodtype;
    $email=$_POST['email'];
    $otp=rand(1000,9999);
    $d='R';
    $rid=$d.$otp;
    $_SESSION['anu']=$rid;
    $_SESSION['e']=$email;
    $_SESSION['n']=$name;
    $_SESSION['k']=$un;

    
        $query="insert into recipient (rid,Name,DOB,Email,Gender,Phone,UNITS,BT) values ('$rid','$name','$dob','$email','$gender',$phone,$un,'$bloodtype')";
        mysqli_query($con,$query);

        header("Location:sss.php");
        die;


    
}
?>