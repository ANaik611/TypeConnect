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
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body style="margin: 50px;">
    <h1>LIST OF DONOR</h1>
    <br>
    <a class="btn btn-primary" href="donor.php" role="button">NEW DONOR</a>
    <br>
    <table class="table">
    <thead>
            <tr>
            <td> NAME </td>
                                <th> DOB </th>
                                <th> GENDER </th>
                                <th> PHONE NUMBER </th>
                                <th> BLOOD GROUP </th>
                                <th>WEIGHT</th>
                                <th> ACTION </th>
</tr>
</thead>
<br>
<br>
<tbody>
    <?php
    
session_start();
     include("connection1.php");
     $query = " select * from donor";
     $result = mysqli_query($con,$query);

     while($row=$result->fetch_assoc())
     {
        echo "<tr>
        <td>" . $row["name"] . "</td>
       
      

        <td>" . $row["dob"] . "</td>

        <td>" . $row["gender"] . "</td>
        <td>" . $row["phone"] . "</td>

        <td>" . $row["bloodtype"] . "</td>

        <td>" . $row["weight"] . "</td>

        <td>
        <a  class ='btn btn-primary btn-sm'  href='redit2.php?id=$row[did]'>EDIT</a>
        <a class ='btn btn-danger btn-sm'  href='deletedo.php?id=$row[did]'>DELETE</a>
        </td>

        
        
        </tr>";

        echo "\n";
        
     }
    
    
    ?>
</tbody>
</table>
</body>
  
</html>