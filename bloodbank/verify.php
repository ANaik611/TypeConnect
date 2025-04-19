<?php

session_start();
include("connection.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $otp=$_POST['otp'];
    

    
       


    
       
$con= new mysqli("localhost","root","","blood");
$s=$con->prepare("select * from users where otp=?");
$s->bind_param("s",$otp);
$s->execute();
$result=$s->get_result();
$_SESSION['otp']=$otp;
if($result && mysqli_num_rows($result) > 0)
{
    $data=$result->fetch_assoc();
    $user=$data['password'];
    
    echo "login successful $user";
    $query="update users SET status='yes' where password='$user' ";
    mysqli_query($con,$query);

    header("location:index.php");
    die;
    
}


else
{
    echo ("wrong otp");
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
    <link rel="stylesheet" href="sytle1011.css">
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
        <h2>VERIFICATION</h2>
        <br>
        <p>an otp has being sent to your registered email id</p>
        <br>
        <form method="post">
            <div class="input-box">
                <span class="icon">
                <ion-icon name="bag-check"></ion-icon></span>
                <input id="text" type="text" name="otp" required>
                <label>OTP</label>
</div>




<br>
    <button type="submit" class="btn">submit</button>
   
</form>
</div>

</div>
</center>





<script src="script.js"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
        </html>

       