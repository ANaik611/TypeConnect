<?php

include("connection1.php");
$query = " select * from bloodgrp";
$result = mysqli_query($con,$query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="font/css/all.min.css">
    <link rel="stylesheet" href="style11.css">
    <title>BLOOD STOCK</title>
</head>
<body> 
   

   <main>
       <?php
          while($row = mysqli_fetch_assoc($result)){
       ?>
       <div class="card">
           <div class="image">
               <img src="<?php echo $row["image"]; ?>" alt="">
           </div>
           <div class="caption">
               <p class="rate">
                    <i class="fas fa-star"></i>
                   
                    
               </p>
              
               <p class="price"><b><?php echo "units="; echo $row["bloodunits"]; ?></b></p>
              
           </div>
           
           <a href='bloodedit.php?id=<?php echo $row["bloodtype_id"]; ?>'><button class="bn632-hover bn25">EDIT</button></a>
          </div>
       <?php

          }
     ?>
   </main>
   <script>
   
</body>
</html>
