<?php
session_start();
include("connection1.php");
include("function.php");
if(isset($_GET["id"]))
{
    $id=$_GET["id"];
    echo "$id";
    echo "hello";
$_SESSION['k']=$id;
header("Location:k1.php");


}

?>