<?php

$username=$_POST['username'];
$password=$_POST['password'];

if($username==='dbmsproj' && $password==='123admin')
{
    header("Location: indexadmin.php");
}

else
{
    echo "wrong admin password or username";
}
?>