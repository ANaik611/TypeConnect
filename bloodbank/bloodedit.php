<?php
session_start();
include("connection1.php");
include("function.php");
if(isset($_GET["id"]))
{
    $id=$_GET["id"];
    $_SESSION['d']=$id;
    header("Location:diwali.php");


}

?>