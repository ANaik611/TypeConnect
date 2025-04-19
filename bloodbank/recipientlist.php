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
    <h1>LIST OF RECIPIENTS</h1>
    <a class="btn btn-primary" href="search1.php" role="button">NEW RECIPIENT</a>
    <br>
    <table class="table">
    <thead>
            <tr>
            <td> NAME </td>
                                <th> DOB </th>
                                <th> GENDER </th>
                                <th> PHONE NUMBER </th>
                                <th> BLOOD GROUP </th>
                                <th>UNITS</th>
                                <th> ACTION </th>
</tr>
</thead>
<br>
<br>
<tbody>
    <?php
     include("connection1.php");
     $query = " select * from recipient";
     $result = mysqli_query($con,$query);

     while($row=$result->fetch_assoc())
     {
        echo "<tr>
        <td>" . $row["Name"] . "</td>

        <td>" . $row["DOB"] . "</td>

        <td>" . $row["Gender"] . "</td>
        <td>" . $row["Phone"] . "</td>

        <td>" . $row["BT"] . "</td>

        <td>" . $row["UNITS"] . "</td>

        <td>
        <a  class ='btn btn-primary btn-sm' href='reedit.php?id=$row[rid]'>EDIT</a>
        <a class ='btn btn-danger btn-sm' href='deletere.php?id=$row[rid]'>DELETE</a>
        </td>

        
        
        </tr>";

        echo "\n";
        
     }
    
    
    ?>
</tbody>
</table>
</body>
  
</html>