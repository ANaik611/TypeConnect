<?php
session_start();
include("connection1.php");
function function_alert($message) { 
	
	// Display the alert box 
	echo "<script>alert('$message');</script>"; 
} 
if(isset($_POST['search']))
{
  $name=$_POST['taluka'];
  $_SESSION['t']=$name;
  
  $da=$_POST['date'];
  $_SESSION['d']=$da;

 $sql="select * from bloodcamp where '$name'=taluka AND '$da'=bddate";
 $result=mysqli_query($con,$sql);

 if(mysqli_num_rows($result)>0)
 {
 
  header("Location:bc5.php");
  die;
 

 }

 else
 {
  function_alert("SORRY NO BLOOD CAMPS ARE ORGANISED IN YOUR TALUKA ON THAT DAY"); 
 }

}
?>