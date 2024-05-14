<?php

session_start();



$an='yes';

$username=$_POST['username'];
$password=$_POST['password'];

$con= new mysqli("localhost","root","","blood");
$s=$con->prepare("select * from users where username=?");
$s->bind_param("s",$username);
$s->execute();
$result=$s->get_result();
$_SESSION['username']=$username;
if($result && mysqli_num_rows($result) > 0)
{
    $data=$result->fetch_assoc();
    if($data['status']!=$an)
    {
        echo ("u r not verfied");
        header("location: verify.php");
        die;
    }
    else
    {
    if($data['password']===$password)
    {
        echo "login successful $username";
     
        header("Location: index.php");
        die;
    }
    else
    {
        echo "wrong password";
    }
}
}
else
{
    echo "invalid password or username";
}
?>