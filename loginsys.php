<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include("connect.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_POST['username'];
    $password = $_POST['password'];

    if (!empty($name) && !empty($password)) {
        $query = "SELECT * FROM details WHERE username = '$name' LIMIT 1";
        $result = mysqli_query($con, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            $user_data = mysqli_fetch_assoc($result);

            if ($user_data['password'] == $password) {
                header("Location: home.html");
                exit();
            } else {
                echo "<script>alert('Wrong password'); window.location.href='login.php';</script>";
                exit();
            }
        } else {
            echo "<script>alert('User not found'); window.location.href='login.php';</script>";
            exit();
        }
    } else {
        echo "<script>alert('Please fill all fields'); window.location.href='login.php';</script>";
        exit();
    }
}
?>