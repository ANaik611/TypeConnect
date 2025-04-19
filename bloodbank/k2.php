
<?php
session_start();
include("connection1.php");
if($_SERVER['REQUEST_METHOD'] == "POST")
{
   $p= $_SESSION['k'];
   echo "$p";
    $q="select * from donor where did='$p'";
    $result = mysqli_query($con,$q);
    $row=$result->fetch_assoc();
    $name=$_POST['name'];
    $dob=$_POST['dob'];
   
    $phone=$_POST['phone'];
   $un=$_POST['u'];
 
   $a=$_POST['add'];

    $email=$_POST['email'];
    echo "$p";
    if($name==NULL)
    $name=$row['name'];

    if($dob==NULL)
    $dob=$row['dob'];
    if($_POST['G']=='du')
    $gender=$row['gender'];
else
$gender=$_POST['G'];

    if($phone==NULL)
    $phone=$row['phone'];
    if($un==NULL)
    $un=$row['weight'];
    if($_POST['D']=='du')
    $bloodtype=$row['bloodtype'];

    else
    $bloodtype=$_POST['D'];
    if($email==NULL)
    $email=$row['email'];
if($a==NULL)
$a==$row['address'];

    $query="update donor SET name='$name',dob='$dob',gender='$gender',phone=$phone,email='$email',bloodtype='$bloodtype',weight=$un,address='$a' where did='$p'";
        mysqli_query($con,$query);
        header("location:donorlist.php");
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

           <label> ADDRESS:</label><br><input type="text" name="add"><br>


            <label>DATE OF BIRTH:</label><br><input type="date" name="dob">
 <br>
            <label>ENTER GENDER</label>
            <br>
            male<input type="radio" name="G" value="male">

            <label>female</label><input type="radio" name="G" value="female">

            DONT UPDATE<input type="radio" name="G" value="du">
            <br>
          



                
           <label>.   EMAIL ID:</label><br><input type="email" name="email"><br>


<label>.   WEIGHT</label><br><input type="num" name="u"><br>

             <label for="phone">
                Enter Phone Number
             </label>
             <br>
        
            <input type="tel"  id="phone" name="phone" pattern="[0-9]{10}">
            <br>
           
<br>

         
             <label>ENTER BLOOD TYPE</label>
             <br>
            A+<input type="radio" name="D" value="A+">
            B+<input type="radio" name="D" value="B+">
            O+<input type="radio" name="D" value="O+">
            AB+<input type="radio" name="D" value="AB+">
            A-<input type="radio" name="D" value="A-">

       

            B-<input type="radio" name="D" value="B-">

     
            O-<input type="radio" name="D" value="O-">

            AB-<input type="radio" name="D" value="AB-">
            DONT UPDATE<input type="radio" name="D" value="du">

          

            
            <br>
           
            <a href="bc1.php"><button class="bn632-hover bn25">update</button></a>
           

        </form>
</div>
</div>
</center>
    </body>
</html>

