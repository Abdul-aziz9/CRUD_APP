<?php
include 'connect.php';

$id=$_GET['updateid'];

$sql="select * from `crudtable` where id=$id";
$result=mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($result);
$id=$row['id'];
$namefromrow=$row['username'];
$emailfromrow=$row['email'];
$mobilefromrow=$row['mobile'];
$passwordfromrow=$row['password'];


if(isset($_POST['submit'])){
    $username=$_POST['Username'];
    $email=$_POST['Email']; 
    $mobile=$_POST['Mobile'];
    $password=$_POST['Password'];
    /*you add the insert query then create a variable for results*/

    $sql="update `crudtable` set id=$id,Username='$username',Email='$email',Mobile='$mobile',Password='$password' where id=$id";
    $results = mysqli_query($con,$sql);
    if ($results){
        header('location:display.php'); 
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
                <input type="text" class='form-control' placeholder="Enter your name" name="Username" autocomplete="off" value=<?php echo $namefromrow;?>>
            </div>
            <div class="mb-3">
                <label>Email</label>
                <input type="email" class='form-control' placeholder="Enter your email" name="Email" autocomplete="off" value=<?php echo $emailfromrow;?>>
            </div>
            <div class="mb-3">
                <label>Phone Number</label>
                <input type="integer" class='form-control' placeholder="Enter your number" name="Mobile" autocomplete="off" value=<?php echo $mobilefromrow;?>>
            </div>
            <div class="mb-3">
                <label>Password</label>
                <input type="text" class='form-control' placeholder="Enter your password" name="Password" autocomplete="off" value=<?php echo $passwordfromrow;?>>
            </div>
            <button type="submit" class="btn btn-primary" name='submit'>Update</button>
        </form>
    </div>
  </body>
</html>