<nav class="nav navbar-inverse navbar-fixed-top">    
    <div style="background-color: black; width: 100%;" class="container">       
        <div class="navbar-header">            
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div style="float: left;"><a href="index.php"><img src="img/logo.jpg" style="height: 50px; width: 60px;"></a></div>            
            <a style="color: white;" class="navbar-brand" href="index.php">E-Store</a>
            
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <?php if(isset($_SESSION['email'])){ ?>                    
                    <li><a style="color: white;" href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                    <li><a style="color: white;" href="settings.php"><span class="glyphicon glyphicon-shopping-cart"></span> Settings</a></li>
                    <li><a style="color: white;" href="OrderHistory.php"><span class="glyphicon glyphicon-time"></span> Order History</a></li>
                    <li><a style="color: white;" href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>                    
                <?php } else { ?>    
                    <li><a style="color: white;" href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a style="color: white;" href="#" data-toggle="modal" data-target="#lm"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    <li><a style="color: white;" href="aboutus.php"><span class="glyphicon glyphicon-tasks"></span> About Us</a></li>
                    <li><a style="color: white;" href="contact.php"><span class="glyphicon glyphicon-phone"></span> Contact Us</a></li>
                <?php } ?>    
            </ul>
        </div>       
    </div>
</nav> 
<?php
require 'login.php';
?>