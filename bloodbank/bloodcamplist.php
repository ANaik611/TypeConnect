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
    <h1>LIST OF ALL THE BLOOD DONATION CAMPS</h1>
    <br>
    <a class="btn btn-primary" href="bc1.php" role="button">NEW REGISTRATION</a>
    <table class="table">
    <thead>
            <tr>
            <th> REGISTRATION ID </th>
            <td> NAME </td>
                                <th> DATE </th>
                                <th> TALUKA </th>
                               
                                <th>DETAILS</th>
                                
                                <th> ACTION </th>
</tr>
</thead>
<br>
<br>
<tbody>
    <?php
     include("connection1.php");
     $query = " select * from bloodcamp";
     $result = mysqli_query($con,$query);

     while($row=$result->fetch_assoc())
     {
        echo "<tr>
        <td>" . $row["bcreg"] . "</td>
        <td>" . $row["bcname"] . "</td>

        <td>" . $row["bddate"] . "</td>

        <td>" . $row["taluka"] . "</td>
        <td>" . $row["details"] . "</td>

        

        <td>
        <a  class ='btn btn-primary btn-sm' href='redit.php?id=$row[bcreg]'>EDIT</a>
        <a class ='btn btn-danger btn-sm' href='rdelete.php?id=$row[bcreg]'>DELETE</a>
        </td>

        
        
        </tr>";

        echo "\n";
        
     }
    
    
    ?>
</tbody>
</table>
</body>
  
</html>