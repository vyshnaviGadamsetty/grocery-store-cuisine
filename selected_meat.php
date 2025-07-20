<?php
session_start();
include("connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['fruit_name'] = $_POST['fruit_name'];
    $_SESSION['fruit_image'] = $_POST['fruit_image'];
    $_SESSION['price'] = $_POST['price'];
    $_SESSION['quantity']=$_POST['quantity'];

    if (!empty($_SESSION['fruit_name']) && !empty($_SESSION['fruit_image']) && !empty($_SESSION['price'])) {

        $fruit_name = $_SESSION['fruit_name'];
        $fruit_image = $_SESSION['fruit_image'];
        $price = $_SESSION['price'];
        $quantity= $_SESSION['quantity'];
        $query = "INSERT INTO cart VALUES ('$fruit_name','$fruit_image','$price','$quantity')";
        mysqli_query($con, $query);
        header("location: meat.html");

    } 
    else {
        echo "ERROR";
    }

    
}
?>