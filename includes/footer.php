<footer>
    <div style="background-color: black;" class="container hover-zoom text-xs-start mt-5">
        <div class="row mt-3">
            <div class="col-xs-4">
                <h3 style="color: white;"class="fw-bold mb-4">Information</h3>
                <a href="aboutus.php">About Us</a><br>
                <a href="contact.php">Contact Us</a>
            </div>        
            <div class="col-xs-4">
                <h3 style="color: white;"class="fw-bold mb-4">My Account</h3>
                <?php if(isset($_SESSION['email'])) { ?>
                <a href="products.php">Login</a><br>
                <?php } else { ?>
                <a href="#" data-toggle="modal" data-target="#lm">Login</a><br>
                <?php } ?>
                <a href="signup.php">Sign Up</a>
            </div>
            <div class="col-xs-4">
                <h3 style="color: white;">Contact Us</h3>
                <p>Contact: +91-123-000000</p>
                <h5>Follow Us On<br><br>
                <a style="padding-right: 20px; color: #3b5998;" href="#!" role="button"><i class="fa fa-facebook fa-lg" ></i></a>
                <a style="padding-right: 20px; color: #55acee;" href="#!" role="button"><i class="fa fa-twitter fa-lg"></i></a>
                <a style="padding-right: 20px; color: #ac2bac;" href="#!" role="button"><i class="fa fa-instagram fa-lg"></i></a>
                </h5>
            </div> 
        </div><br>        
    <p>Copyright © E-Store. All Rights Reserved 2020-21</p>        
    </div>
</footer>
<?php
require 'login.php';
?>