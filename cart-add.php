<?php
require("includes/common.php");
if (isset($_GET['id']) && is_numeric($_GET['id'])) {    
    $item_id = $_GET['id'];
    $user_id = $_SESSION['user_id'];
    $order_id = $_SESSION['order_id'];
    $query = "INSERT INTO users_items(user_id, item_id, status, order_id) VALUES('$user_id', '$item_id', 'Added to cart', '$order_id')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    header('location: products.php');
}
?>   