<?php
require("includes/common.php");
if(!isset($_SESSION['email'])) {
  header('location: index.php');
}
?>
<html>
    <head>
        <title>Order History Page | E-Store</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>        
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>        
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    </head>
    <body>
        <div style="padding-bottom: 100px;">
            <?php
            require 'includes/header.php';            
            ?>            
        </div>        
        <div class="container-fluid" id="content">
            <div class="row">
                <div class="col-lg-4 col-lg-offset-4">
                    <h4 style="font-weight: bolder;">Know Your Order</h4>
                    <form action="order_script.php" method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control" name="order_id"  placeholder="Order ID" required="true">
                        </div>                        
                        <center><button type="submit" class="btn btn-danger">Track</button></center>                        
                    </form>
                </div>
            </div>
        </div>        
        <div style="position: fixed; bottom: 0; width: 100%;">
            <?php
            require 'includes/footer.php';
            ?>
        </div>
    </body>
</html>