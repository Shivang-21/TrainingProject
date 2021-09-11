<?php
require("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
$user_id = $_SESSION['user_id'];
$order_id = $_SESSION['order_id'];
$select_query="SELECT item_id FROM users_items WHERE user_id='$user_id' AND order_id='$order_id'";
$select_query_result=mysqli_query($con,$select_query) or die(mysqli_error($con));
while($i=mysqli_fetch_array($select_query_result)){
    $item_id=$i['item_id'];
    $query="UPDATE users_items SET status='Confirmed' WHERE item_id='$item_id'";
    $query_result=mysqli_query($con,$query) or die(mysqli_error($con));            
}  
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Success Page</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>        
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    </head>
    <body>
        <div style="padding-bottom: 50px;">
            <?php
            require 'includes/header.php';
            ?>
        </div>
        <div class="container-fluid" id="content">
            <div class="col-md-12">
                <div class="jumbotron">
                      <h3 align="center">Thank you for ordering from E-Store. The order will be delivered
                      to you shortly.</h3><hr>
                      <h3 align="center">Your Order ID is : <?php echo $order_id; ?></h3>
                    <p align="center">Order some more electronic items <a href="products.php">here</a>.</p>
                </div>
            </div>
        </div>
        <div style="bottom: 0; position: fixed; width: 100%;">
            <?php
            require 'includes/footer.php';
            ?>
        </div>
    </body>
</html>