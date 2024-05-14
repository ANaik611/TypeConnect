<html>
    
    <link rel="stylesheet" href="style4.css">
   
   
   
   
   <!--Hey! This is the original version
of Simple CSS Waves-->

<body style="background-image: url('//wallpapercave.com/wp/wp4323651.jpg');">
<div class="header">
<br>
  <h2>NEED BLOOD?</h2>
  <h3>check if sufficient blood is available or not</h3>
    <!--Waves Container-->
    <div>
    <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
    viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
    <defs>
    <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
    </defs>
    <g class="parallax">
    <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7)" />
    <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
    <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
    <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
    </g>
    </svg>
    </div>
    <!--Waves end-->
    
    </div>
    <!--Header ends-->
    <br>
    <br>
    <br>
    <center>
    <form action=" " method="POST">
      <label for="bt">Choose a blood type:</label>
      
      <select name="bt" id="bt">
        <option value="11">A+</option>
        <option value="12">A-</option>
        <option value="13">B+</option>
        <option value="14">B-</option>
        <option value="15">AB+</option>
        <option value="16">AB-</option>
        <option value="17">O+</option>
        <option value="18">O-</option>
      </select>
      <br>
      <br>
      
      <label>ENTER UNITS OF BLOOD NEEDED</label>
      <input type="num" name="units">
      
      <br><br>
      <div><input type="submit" name="search" class="btn btn-primary" value="Search" style="cursor:pointer"></div>
      </form>
</body>
</html>

<?php
function alert($message) { 
	
	// Display the alert box 
	echo "<script>alert('$message');</script>"; 
} 
session_start();
include("connection1.php");
if(isset($_POST['search']))
{
  $bu=$_POST['units'];
  $_SESSION['a']=$bu;
  $bg=$_POST['bt'];
 $sql="select * from bloodgrp where bloodtype_id=$bg AND bloodunits>=$bu";
 $result=mysqli_query($con,$sql);
 if(mysqli_num_rows($result)>0)
 {
  echo "blood is avaliable";
  header("location: rptreg.php");
        die;

 }

 else
 {
  alert("SUFFICIENT BLOOD IS NOT AVAILABLE IN THE BLOOD STOCK");
 }

}
?>