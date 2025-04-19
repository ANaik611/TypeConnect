<?php
session_start();
include("connection1.php");
if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $b=$_SESSION['d'];
    $u=$_POST['units'];
    $g=$_POST['G'];
    if($g==='female')
    {
        
   $q="select * from bloodgrp where bloodtype_id=$b";
   $result = mysqli_query($con,$q);
   $row=$result->fetch_assoc();
   $c=$row['bloodunits'];
   $w=$c-$u;
    $query="update bloodgrp SET bloodunits=$w where bloodtype_id=$b";
    mysqli_query($con,$query);
    $q="select * from bloodgrp where bloodtype_id=2";
    $result = mysqli_query($con,$q);
    $row=$result->fetch_assoc();
    $c=$row['bloodunits'];
    $o=$c-$u;
    $query="update bloodgrp SET bloodunits=$o where bloodtype_id=2";
    mysqli_query($con,$query);
    header("Location:bloodlist.php");
    }
   else if($g==='male')
    {
        
   $q="select * from bloodgrp where bloodtype_id=$b";
   $result = mysqli_query($con,$q);
   $row=$result->fetch_assoc();
   $c=$row['bloodunits'];
   $w=$c+$u;
    $query="update bloodgrp SET bloodunits=$w where bloodtype_id=$b";
    mysqli_query($con,$query);
           
    $q="select * from bloodgrp where bloodtype_id=2";
    $result = mysqli_query($con,$q);
    $row=$result->fetch_assoc();
    $c=$row['bloodunits'];
    $y=$c+$u;
 
           $query="update bloodgrp SET bloodunits=$y where bloodtype_id=2";
           mysqli_query($con,$query);
    header("Location:bloodlist.php");
    }
}

?>


<html>
<style>
body
    {
        margin:0px;
    padding: 0px;
        width: 100%;
    height: 100vh;
    background-image:url("anu.jpg");
    background-repeat: no-repeat;

    background-size: cover;
    background-position: 5px 0px;
    }
    </style>

<form action="" method="post">

               <center>      
                <br>
                <br>
                <br>
                <h1> <label>SELECT</label></h1>
               <h3>
            <br>
            ADD UNITS<input type="radio" name="G" value="male">
<br>
            <label>SUBTRACT UNITS</label><input type="radio" name="G" value="female">
         <br>
         <br>   <input type="text" name="units"  required>
                            <br>
                            <label>ENTER  NUMBER OF UNITS</label>
                            <br>
</h3>
                           
                       
                        <br>
                        
                            <input type="submit" name="submit" id="" value="click">
                        
</center>
                     

</html>

