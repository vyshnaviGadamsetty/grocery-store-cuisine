<?php
$con = mysqli_connect("localhost", "root", "", "cuisine");

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
