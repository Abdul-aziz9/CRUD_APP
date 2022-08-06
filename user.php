<?php
include 'connect.php';

if(isset($_POST['submit'])){
    $username=$_POST['Username'];
    $email=$_POST['Email'];
    $mobile=$_POST['Mobile'];
    $password=$_POST['Password'];
    /*you add the insert query then create a variable for results*/

    $sql="insert into `crudtable` (Username,Email,Mobile,Password)
    value('$username','$email','$mobile','$password')";
    $results = mysqli_query($con,$sql);
    if ($results){
        echo "data saved successfully";
    }else{
        die(mysqli_err($con));
    }

}


?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>C.R.U.D</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" >
  </head>
  <body>
    <div class="container my-5 ">
        <form method='post'>
            <div class="mb-3">
                <label>Username</label>
                <input type="text" class='form-control' placeholder="Enter your name" name="Username">
            </div>
            <div class="mb-3">
                <label>Email</label>
                <input type="email" class='form-control' placeholder="Enter your email" name="Email">
            </div>
            <div class="mb-3">
                <label>Phone Number</label>
                <input type="integer" class='form-control' placeholder="Enter your number" name="Mobile">
            </div>
            <div class="mb-3">
                <label>Password</label>
                <input type="text" class='form-control' placeholder="Enter your password" name="Password">
            </div>
            <button type="submit" class="btn btn-primary" name='submit'>Submit</button>
        </form>
    </div>
  </body>
</html>