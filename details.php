<?php
session_start();
include("connect.php");
if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $name = $_POST['username'];
    $phoneno = $_POST['mobileno'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    if (!empty($email) && !empty($password) && !empty($name) && !empty($phoneno)) {

        $query = "INSERT INTO details VALUES ('$email','$password','$phoneno','$name')";

        mysqli_query($con,$query);

        echo "<script type='text/javascript'> alert('Succesful Registration')</script>";
    } 
    else {
        echo "<script type='text/javascript'> alert('Please Enter Valid Details')</script>";
    }
    header("location: home.html");

}    
?>