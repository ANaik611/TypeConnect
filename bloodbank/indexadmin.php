

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
    <a href="recipientlist.php">RECIPIENT LIST</a>
    <a href="donorlist.php">DONOR LIST</a>
    <a href="bloodcamplist.php">CAMP LIST</a>
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
      <marquee width="100%" direction="left" height="30px">
      If you’ve decided to donate blood, you may be curious about what to expect. Giving blood is a simple, safe way to make a big difference in people’s lives. Knowing what will happen before, during, and after you donate can help you prepare for the process.
</marquee>
<center>
  <h1>
<font size="+8"    
         <br>
      <br>
        WELCOME
</font>
<br>
<?php
echo "ADMIN";
?>

</h1>

    </center>
    <nav class="navigation-bar">
        <a href="bloodlist.php">DISPLAY THE TOTAL BLOOD STOCK IN THE BLOOD BANK</a>
        
</nav>
</body>
<!-- body tag ends here -->

<script src="script.js"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  
</html>
