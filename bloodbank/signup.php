<?php
session_start();
include("connection.php");
include("function.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $username=$_POST['username'];
    $email_id=$_POST['email_id'];
    $password=$_POST['password'];

    if(!empty($username) && !empty($password) && !empty($email_id))
    {
        $query="insert into users (username,password,email_id) values ('$username','$password','$email_id')";
        mysqli_query($con,$query);

        header("Location: login.php");
        die;
    }

    else{
        echo "you have not entered valid information!";
    }
}
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
    </title>
    <link rel="stylesheet" href="sytle2.css">
</head>
<header>
    
    <h2 class="logo">
        <i>blood bank management</i></h2>

    
</nav>
</header>

  <style>
body
    {
        margin:0px;
    padding: 0px;
        width: 100%;
    height: 100vh;
    background-image:url("https://wallpaperaccess.com/full/6553556.jpg");
    background-repeat: no-repeat;

    background-size: cover;
    background-position: 5px 0px;
    }

</style>
<br>
<br>
<br>

<center>

<div class="wrapper">
   
    <div class="form-box registration">
        <h2>Registration</h2>
        <form method="post">
            <div class="input-box">
                <span class="icon">
                    <ion-icon name="person"></ion-icon></span>
                <input id="text" type="text" name="username" required>
                <label>username</label>
</div>

<div class="input-box">
                <span class="icon">
                    <ion-icon name="lock-closed"></ion-icon></span>
                <input id="text" type="password" name="password" required>
                <label>password</label>
</div>

<div class="input-box">
                <span class="icon">
                <ion-icon name="mail-sharp"></ion-icon></span>
                <input type="email" name="email_id" required>
                <label>Email ID</label>
</div>



<br>
    <button type="submit" class="btn">sign up</button>
    <div class="login-register">
        <p>ALREADY HAVE AN ACCOUNT?<a href="login.php " class ="register-link">Login Now</a></p>
</div>

</form>
</div>

</div>
</center>





<script src="script.js"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
        </html>