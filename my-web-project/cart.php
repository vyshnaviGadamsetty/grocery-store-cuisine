<?php
session_start();

// Initialize the cart if it doesn't exist
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Function to add an item to the cart
function addToCart($item) {
    $_SESSION['cart'][] = $item;
}

// Function to remove an item from the cart
function removeFromCart($item) {
    if (($key = array_search($item, $_SESSION['cart'])) !== false) {
        unset($_SESSION['cart'][$key]);
    }
}

// Function to get the cart items
function getCartItems() {
    return $_SESSION['cart'];
}

// Handle form submissions
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['add'])) {
        $item = $_POST['item'];
        addToCart($item);
    } elseif (isset($_POST['remove'])) {
        $item = $_POST['item'];
        removeFromCart($item);
    }
}

// Get the current cart items
$cartItems = getCartItems();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to your CSS file -->
</head>
<body>
    <h1>Your Shopping Cart</h1>
    <ul>
        <?php foreach ($cartItems as $item): ?>
            <li>
                <?php echo htmlspecialchars($item); ?>
                <form method="POST" style="display:inline;">
                    <input type="hidden" name="item" value="<?php echo htmlspecialchars($item); ?>">
                    <button type="submit" name="remove">Remove</button>
                </form>
            </li>
        <?php endforeach; ?>
    </ul>

    <h2>Add Item to Cart</h2>
    <form method="POST">
        <input type="text" name="item" placeholder="Item name" required>
        <button type="submit" name="add">Add to Cart</button>
    </form>
</body>
</html>