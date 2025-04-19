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
    <h1>RECIPIENT REGISTRATION<h1>
</center>

    <center>
        <div class="wrapper">
            <div class="form-box login">
        <form action="s3.php" method="POST">
            <br>
            
          
           <label> FULL NAME:</label><br><input type="text" name="name"><br>

<br>

            <label>DATE OF BIRTH:</label><br><input type="date" name="dob"><br>
 <br>
            <label>ENTER GENDER</label>
            <br>
            male<input type="radio" name="G" value="male">

            <label>female</label><input type="radio" name="G" value="female">

            others<input type="radio" name="G" value="others">
            <br>
          

<br>

                
           <label>.   EMAIL ID:</label><br><input type="email" name="email"><br>

<br>

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

          

            
            <br>
           
            <a href="bc1.php"><button class="bn632-hover bn25">SUBMIT</button></a>
           

        </form>
</div>
</div>
</center>
    </body>
</html>

