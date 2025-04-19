<?php
function alert($message) { 
	
	// Display the alert box 
	echo "<script>alert('$message');</script>"; 
} 
session_start();
include("connection1.php");
include("function.php");
if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $name=$_POST['name'];
    $db=$_POST['date'];
    $t=$_POST['taluka'];
    $p=$_POST['detail'];
  
    $otp=rand(1000,9999);
    $d='C';
    $did=$d.$otp;
    $_SESSION['anu']=$did;
    
        $query="insert into bloodcamp (bcname,taluka,bddate,bcreg,details) values ('$name','$t','$db',' $did','$p')";
        mysqli_query($con,$query);

        alert("BLOOD CAMP HAS BEEN REGISTERED SUCCESSFULLY");
        


    
}
?>