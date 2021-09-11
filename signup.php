<?php
require("includes/common.php");
if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Sign Page</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>        
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div style="padding-bottom: 60px;">
           <?php
            require 'includes/header.php';
            ?> 
        </div>        
        <div class="container">   
            <div class="row"> 
                <div class="col-xs-6" style="padding-top: 50px;">                    
                    <img src="img/sign_upimg.jpg" alt="SignUp" width="500px"class="img-responsive">                    
                </div>
                <div class="col-xs-6">                                         
                    <h4><b>SIGN UP</b></h4>
                    <form action="signup_script.php" method="POST">
                        <div class="form-group">
			    <input type="text" class="form-control" id="name" name="name" placeholder="Name" required="true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
			</div>
			<div class="form-group">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
			</div>
		        <div class="form-group">
		       	    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required="true" pattern=".{6,}">
			</div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="contact" name="contact" placeholder="Contact" maxlength="10" size="10" required="true">
			</div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="city" name="city" placeholder="City" required="true">
			</div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="address" name="address" placeholder="Address" required="true">
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
                        <?php
                        if(isset($_GET['error'])) {
                        echo "<br><br><b class='red'>" . $_GET['error'] . "</b>";
                        }
                        ?>
                    </form>                    
                </div>
            </div>                          
        </div>
        <div style="padding-top: 32px;">
            <?php
            require 'includes/footer.php';
            ?>
        </div>        
    </body>
</html>