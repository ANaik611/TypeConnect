<?php
session_start();
//$user=   $_SESSION['username'];
/*
if($user==true)
{

}
else
{
    header('location: login.php');
}
*/
?>


<!DOCTYPE html>
<html>
  
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA compatible"
    context="IE=edge">
    <meta name="viewport" context="width=device-width,intial-scale=1.0">
    <title>
        blood donation website
    </title>
    <link rel="stylesheet" href="sytle.css">
</head>
  
<!-- body tag starts here -->
<style>
body
    {
        margin:0px;
    padding: 0px;
        width: 100%;
    height: 100vh;
    background-image:url("https://wallpapercave.com/wp/wp4323463.jpg");
    background-repeat: no-repeat;

    background-size: cover;
    background-position: 5px 0px;
    }
    </style>
<body>
<header>
    
        
    <h2 class="logo">
    <ion-icon name="water"></ion-icon>
        <i>save lives</i></h2>

<nav class="navigation">
    <a href="search1.php">searching for blood</a>
    <a href="donor.php">donate blood</a>
    <a href="bloodcamp.php">blood donation camps</a>
    <button class="btnLoginpopup">
        <a href="logout.php">log out</a></button>
</nav>
</header>
   
   
        
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>
    
     
      <marquee width="100%" direction="left" height="30px" >
      
CLICK ON THIS LINK TO GET A MAP TO LOCATE NEARBY BLOOD BANKS.  .
<a href="ponda.html">
      LOCATE BLOOD BANKS ON MAP.
</a>
    </marquee>
    <br>
     <br>
<center>
  <h1>
<font size="+8"    
         <br>
      <br>
        WELCOME
</font>
<br>
<?php
/*
echo $_SESSION['username'];*/
?>

</h1>

    </center>
    <nav class="navigation-bar">
        <a href="about.html">ABOUT US</a>
        <a href="contact.html">CONTACT US</a>
</nav>
</body>
<!-- body tag ends here -->

<script src="script.js"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  
</html>
