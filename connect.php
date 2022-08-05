<?php
$con = new mysqli('localhost','Huncho','Blaze234?','mycrud');

if(!$con){
    die(mysqli_err($con));
}

?>