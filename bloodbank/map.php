<html>
<link rel="stylesheet" href="style4.css">
   
   
   
   
   <!--Hey! This is the original version
of Simple CSS Waves-->

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
    <br>
    <br>
    <br>

    <center>
    <form action=" " method="POST">
      <label for="bt">CHOOSE YOUR TALUKA:</label>
      <br>
      <br>
      <select name="bt" id="bt">
        <option value="1">PERNEM</option>
        <option value="2">BICHOLIM</option>
        <option value="3">TISWADI</option>
        <option value="4">PONDA</option>
        <option value="5">SALCETE</option>
        <option value="6">MARGAO</option>
        <option value="7">QUEPEM</option>
        <option value="8">DHARBANDORA</option>
        <option value="9">CANCONA</option>
        <option value="10">BARDEZ</option>
        <option value="11">SATARI</option>
        <option value="12">SANGUEM</option>
      </select>
      <br>
      <br>
      
     
      
      
      <div><input type="submit" name="search" class="btn btn-primary" value="Search" style="cursor:pointer"></div>
      </form>
</center>

    </html>

    <?php

session_start();
include("connection1.php");
if(isset($_POST['search']))
{
  
  $loc=$_POST['bt'];

  if($loc==3)
  {
    header("location: leaflet.html");
    die;

  }
 

}

    ?>