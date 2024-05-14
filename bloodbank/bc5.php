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
    <h1>LIST OF BLOOD CAMPS</h1>
    <br>
    <table class="table">
    <thead>
            <tr>
            <td> REG NUM </td>
                                <th> NAME </th>
                                <th> DATE </th>
                                <th> TALUKA </th>
                                
                                <th> DETAILS </th>
</tr>
</thead>
<br>
<br>
<tbody>
    <?php
    session_start();
    include("connection1.php");
  $name=$_SESSION['t'];
  $da=$_SESSION['d'];
     $sql="select * from bloodcamp where '$name'=taluka AND '$da'=bddate";
     $result=mysqli_query($con,$sql);

     while($row=$result->fetch_assoc())
     {
        echo "<tr>
        <td>" . $row["bcreg"] . "</td>
        <td>" . $row["bcname"] . "</td>

        <td>" . $row["bddate"] . "</td>

        <td>" . $row["taluka"] . "</td>
        <td>" . $row["details"] . "</td>
        

        

       

        
        
        </tr>";

        echo "\n";
        
     }
    
    
    ?>
</tbody>
</table>
</body>
  
</html>