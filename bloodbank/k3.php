
<?php
session_start();
include("connection1.php");
if($_SERVER['REQUEST_METHOD'] == "POST")
{
   $p= $_SESSION['k'];

    $q="select * from bloodcamp where bcreg='$p'";
    $result = mysqli_query($con,$q);
    $row=$result->fetch_assoc();
   
    $name=$_POST['name'];
    $dob=$_POST['dob'];
   
    $t=$_POST['t'];
   $de=$_POST['detail'];
 
   
    if($name==NULL)
    $name=$row['bcname'];

    if($dob==NULL)
    $dob=$row['bddate'];
   

    if($t==NULL)
    $phone=$row['taluka'];
    if($de==NULL)
    $de=$row['details'];
    

    $query="update bloodcamp SET bcname='$name',bddate='$dob',taluka='$t',details='$de' where bcreg='$p'";
        mysqli_query($con,$query);
        header("location:bloodcamplist.php");
        die;
       
       
        
}



?>


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
<style>
body
    {
        margin:0px;
    padding: 0px;
        width: 100%;
    height: 100vh;
    background-image:url("https://cdn.dribbble.com/users/1846344/screenshots/4894380/blood_donation_campagin.gif");
    background-repeat: no-repeat;

    background-size: cover;
    background-position: 5px 0px;
    }
    </style>
    <body>
    <center>
    <h2>Fill the details which you want to update </h2>
</center>

    <center>
        <div class="wrapper">
            <div class="form-box login">
        <form action=" " method="POST">
            <br>
            
          
           <label> FULL NAME:</label><br><input type="text" name="name"><br>



            <label>DATE:</label><br><input type="date" name="dob">
 <br>
          
            <br>
            <label> TALUKA:</label><br><input type="text" name="t"><br>
            <label> DETAILS:</label><br><input type="text" name="detail"><br>
          



                
         


            <a href="bc1.php"><button class="bn632-hover bn25">update</button></a>
           

        </form>
</div>
</div>
</center>
    </body>
</html>

