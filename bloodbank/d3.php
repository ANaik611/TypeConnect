<?php
session_start();
include("connection1.php");
include("function.php");
function function_alert($message) { 
	
	// Display the alert box 
	echo "<script>alert('$message');</script>"; 
} 
if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $name=$_POST['name'];
    $h=$_POST['add'];
    $email=$_POST['email'];
    $_SESSION['e']=$email;
    $_SESSION['u']=$name;
    $dob=$_POST['dob'];
    $gender=$_POST['G'];
    $phone=$_POST['phone'];
    $weight=$_POST['w'];
    $bloodtype=$_POST['D'];
    $year = (date('Y') - date('Y',strtotime($dob)));
    $otp=rand(1000,9999);
    $d='D';
    $did=$d.$otp;
    $_SESSION['anu']=$did;

    if($weight>=45 && $year>=17 && $year<=60)
    {
        $query="insert into donor (did,name,address,email,dob,gender,phone,weight,bloodtype) values ('$did','$name','$h','$email','$dob','$gender',$phone,$weight,'$bloodtype')";
        mysqli_query($con,$query);

        header("Location:donorss.php");
        die;
    }

    else{
        if($weight<45)
        {
            
// PHP program to pop an alert 
// message box on the screen 

// Function definition 



// Function call 
function_alert("YOU ARE UNDER WEIGHT TO DONATE BLOOD"); 



        }
    else if($year<17)
    {
        function_alert("YOU ARE UNDER AGE TO DONATE BLOOD"); 
    }

    else
    {
        function_alert("YOU ARE OVER AGE TO DONATE BLOOD"); 
    }
   
    }
}
?>