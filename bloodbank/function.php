<?php

function check_login($con)
{
    if(isset($_SESSION['username']))
    {
        $use=$_SESSION['username'];
        $query="select * from users where username='$use' limit 1";
        $result=mysqli_query($con.$query);
        if($result && sqli_num_rows($results)>0)
        {
            $user_data=mysqli_fetch_assoc($result);
            return $user_data;
        }
    }
    header("Location: login.php");
    die;
}

