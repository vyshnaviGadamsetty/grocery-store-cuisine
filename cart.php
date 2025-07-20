<!DOCTYPE html>
<html>
<head>
        <script src="https://kit.fontawesome.com/fdc7a295f2.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <style>
        .item {
            margin-top: 20px ;
            border: 1px solid #ccc;
            margin-bottom: 20px;
            padding: 10px;
            width: 200px;
            box-shadow: 1px 2px 11px 4px rgb(14 55 54 / 15%);   
            margin-left: 10px ;         
        }

        .item img {
            max-width: 100%;
            height: auto;
        }

        .item .name {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .item .price {
            font-size: 16px;
            color: green;
        }
        .navbar {
             background-color: #ff9b82;
                height: 110px;
                width: 101%;
                margin-left: -8px;
                display: flex;
                box-shadow: 0px 5px 50px rgb(115, 115, 115);
                margin-top: -8px;
            /* overflow: hidden;
            background-color: rgb(170, 87, 10); */
            /* position: fixed; */
            /* /* top: 0;
            width: 100%;
            z-index: 1000;
            display: flex; */
            justify-content: space-between;
            /* height: 125px; */ 
        }
        .navbar a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }

        .pay{
            margin-top: 10px;
            margin-right: 20px;
        }
        .navb{
            display: flex;
            padding-right: 30px;
        }
        .navb i {
            margin: 0 10px;
            color: #000000;
            font-size: 30px;
            cursor: pointer;
            margin-top: 30px;
        }
        .navb button{
            cursor: pointer;
            background-color: transparent;
            height: 50px;
            width: 100px;
            font-size: 1.5em;
            border-color: none;
            border: 0px;
        }
        .btnn {
            background-color: black;
            color: white;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display:block;
            font-size: 16px;
            margin-top: 10px;
            cursor: pointer;
            border-radius: 5px;
            margin-top: 30px;
        }

        .btnn:hover {
            background-color: grey;
        }
        .material-symbols-outlined {
            font-variation-settings:
            'FILL' 1,
            'wght' 700,
            'GRAD' 200,
            'opsz' 40
        }
        img{
            height: 100px;
            width: 100px;
        }
        .s{
            display: flex;
            
        }
        .bill{
            margin-left: 20px;
            font-style:italic;
            font-size: 50px;
          
        }
    </style>
</head>
<body>
<div class="navbar">
        <div class="navb">
            <a href="home.php"><i class="fa-solid fa-house" style="color: #000000;"></i></a>
            <a href="#"><i class="fa-solid fa-bell" style="color: #000000;"></i></a>
            <a href="cart.php"><i class="fa-solid fa-cart-shopping" style="color: #000000; margin: top 10px;"></i></cart>
            <a href="catagories.html"><div style="margin-top: 0px;margin-left: 13px;"><i class="material-symbols-outlined">grid_view</i></div></a>
        </div>
    <div class="pay">
        <button class='btnn' onclick="pay()" >Buy Now</button> 
    </div>
</div>
<div class="s">
<?php
include("connect.php");

$query = "SELECT * FROM cart";
$result = mysqli_query($con, $query);
$sum=null;
if ($result) {
    if (mysqli_num_rows($result) > 0) {
        while($user_data = mysqli_fetch_assoc($result)){
            echo "<div class='item'>";
            echo "<div class='name'>".$user_data['name']."</div>";
            echo "<div><img src='" . $user_data['image'] . "' alt='img1'></div>";
            echo "<div class='price'>price:".$user_data['price']."</div>";
            echo "<div class='quantity'>quantity:".$user_data['quantity']."</div>";
            echo " Total Price:".(int)$user_data['price']*(int)$user_data['quantity'];
            echo "</div>";
            $sum+=(int)$user_data['price']*(int)$user_data['quantity'];
        }
    } 
    
} else {
    echo "<script type='text/javascript'>alert('Query Failed');</script>";
}
?>
</div>
<?php echo"<br><div class='bill'>Total bill is: ".$sum ."</div>";?>
<script>
    function pay(){
        alert("your payment is successfully visit again");
        <?php
        $query = "truncate table cart";
        $result = mysqli_query($con, $query);
        ?>
        window.location.href = "home.html";
    }
</script>


</body>
</html>
