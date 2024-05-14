<?php 

    require_once("connection1.php");
    $query = " select * from donor";
    $result = mysqli_query($con,$query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="CSS/bootstrap.css"/>
    <title>View Records of donors</title>
</head>
<section class="intro">
  <div class="bg-image h-100" style="background-image: url('https://mdbootstrap.com/img/Photos/new-templates/tables/img2.jpg');">
    <div class="mask d-flex align-items-center h-100" style="background-color: rgba(0,0,0,.25);">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12">
            <div class="card bg-dark shadow-2-strong">
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-dark table-borderless mb-0">
                    <thead>

                            <tr>
                                <td> NAME </td>
                                <td> DOB </td>
                                <td> GENDER </td>
                                <td> PHONE NUMBER </td>
                                <td> BLOOD GROUP </td>
                                <td> Delete </td>
                            </tr>
                            </thead>
                    <tbody>

                    <?php 
                                    
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        $Username = $row['name'];
                                        $Userdob = $row['dob'];
                                        $Usergender = $row['gender'];
                                        $Userphone = $row['phone'];
                                        $Userbg = $row['bloodtype'];
                            ?>
                                    <tr>
                                        <td><?php echo $Username ?></td>
                                        <td><?php echo $Userdob ?></td>
                                        <td><?php echo $Usergender ?></td>
                                        <td><?php echo $Userphone ?></td>
                                        <td><?php echo $Userbg ?></td>
                                        <td><a href="#" class="btn btn-pencil">Edit</a></td>
                                        <td><a href="#" class="btn btn-danger">Delete</a></td>
                                    </tr>        
                            <?php 
                                    }  
                            ?>                                                                    
                                   

           

                            </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</html>s