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
        header("location: fruit.html");

    } 
    else {
        echo "ERROR";
    }

    
}
?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selected Fruit</title>
    <style>
        .orange {
            background-color: rgb(140, 217, 125);
            width: 100%;
            height: 100px;
            font-size: 50px;
            position: relative;
        }
        .orange img {
            height: 100%;
        }
        .orange-text {
            position: absolute;
            top: 25px;
            left: 11.5%;
            transform: translateX(-50%);
        }
        .fruit-container{
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding: 20px;
        }
        .fruit{
            width: calc(20% - 20px);
            margin: 10px;
            padding: 10px;
            text-align: center;
            background-color: white;
            border-radius: 5px;
            box-shadow: 1px 2px 11px 4px rgb(14 55 54 / 15%);
        }
        .fruit:hover{
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.438); 
        }
        .fruit img{
            max-width: 100%;
            max-height: 100px;
            margin-bottom: 10px;
        }
        .price {
            margin-top: 5px;
            color: #888;
        }

        button {
            background-color: rgb(93,196,79);
            color: white;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin-top: 10px;
            cursor: pointer;
            border-radius: 5px;
        }

        button:hover {
            background-color: rgb(21,168,50);
        }
    </style>
</head>
<body>
    <h1>Selected Fruit</h1>
    <div class="fruit">
        <img src="<?php echo $_SESSION['fruit_image']; ?>" alt="<?php echo $_SESSION['fruit_name']; ?>">
        <div class="fruit-name"><?php echo $_SESSION['fruit_name']; ?></div>
        <div class="price"><?php echo $_SESSION['price']; ?></div>
        <form action="selected_fruit.php" method="post">
            <input type="hidden" name="fruit_name" value="<?php echo $_SESSION['fruit_name']; ?>">
            <input type="hidden" name="fruit_image" value="<?php echo $_SESSION['fruit_image']; ?>">
            <input type="hidden" name="price" value="<?php echo $_SESSION['price']; ?>">
            <button type="submit">Add to Cart</button>
        </form>
    </div>
</body>
</html> -->
