<?php
session_start();
include("connection1.php");
include("function.php");
if(isset($_GET["id"]))
{
    $id=$_GET["id"];
   
    
    $query="delete from recipient where rid='$id'";
    mysqli_query($con,$query);
    header("location:recipientlist.php");
    die;

}

?>