<?php
require("includes/common.php");
$order_id=$_POST['order_id'];
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
        <h2><center>Your Order History</center></h2>
        <div class="row decor_bg">
             <div class="col-md-6 col-md-offset-3">
                <table class="table table-striped">
                    <?php
                        $sum = 0;
                        $user_id=$_SESSION['user_id'];                          
                        $query="SELECT items.price AS Price, items.id AS id, items.name AS Name FROM users_items JOIN items ON users_items.item_id = items.id WHERE users_items.user_id='$user_id' and users_items.order_id='$order_id'";
                        $result=mysqli_query($con,$query) or die($mysqli_error($con));
                        if(mysqli_num_rows($result) >= 1) { ?>
                         <thead>
                             <tr>
                                <th>Item Number</th>
                                <th>Item Name</th>
                                <th>Price</th>                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                while ($row = mysqli_fetch_array($result)) {
                                $sum+= $row["Price"];
                                $id="";
                                $id .= $row["id"] . ", ";
                                echo "<tr><td>" . "#" . $row["id"] . "</td><td>" . $row["Name"] . "</td><td>Rs " . $row["Price"] . "</td></tr>";
                                }
                                $id = rtrim($id, ", ");
                                echo "<tr><td></td><td>Total</td><td>Rs " . $sum . "</td></tr>";
                            ?>                            
                        </tbody>
                        <?php
                            }                            
                        ?>                        
                </table>
            </div>
        </div>        
    </body>
</html>


