<?php
require("includes/common.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Contact Us Page</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>        
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>        
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">         
    </head>
    <body>
        <?php
            require 'includes/header.php';
        ?>
        <div class="container">                                       
            <div class="row">
                <div class="col-sm-8">
                    <h2 style="padding-top: 50px; font-weight: bolder;">LIVE SUPPORT</h2>
                    <h4>24 hours | 7 days a week | 365 days a year Live Technical Support</h4>
                    <p style="font-size: 16px;">It is a long established fact that a reader will be distracted by the readable
                        content of a page when looking at its layout. The point of using Lorem Ipsum
                        is that it has a more or less normal distribution of letters. There are many
                        variations of passages of Lorem Ipsum available, but the majority have suffered
                        alteration in some form, by injecting humour, or randomised words which don't look
                        even slightly believable. If you are going to use a passage of Lorem Ipsum you
                        need to be sure there isn't any embarrassing hidden in the middle of text.</p>
                </div>
                <div class="col-sm-4">
                    <div class="cimg">
                        <img src="img/contact.jpg" alt="Contact Us Image">                        
                    </div>                
                </div>                    
            </div>
            <div class="row">
                <div class="col-sm-8">
                    <h2 style="font-weight: bolder;">CONTACT US</h2>
                    <form action="contact_script.php" method="POST">
                        <div class="form-group">
                            <label for="name">Name:</label>
			    <input type="text" class="form-control" id="name" name="name" required="true">
			</div>                        
			<div class="form-group">
                            <label for="email">Email:</label>
			    <input type="email" class="form-control" id="email" name="email" required="true">
			</div>
		        <div class="form-group">
                            <label for="mssg">Message:</label><br>
                            <textarea cols="120" style="max-width:100%;" required="true"></textarea>
			</div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <div class="col-sm-4">
                     <h2 style="font-weight: bolder;">Company Information:</h2> 
                     <p style="font-size: 18px;">500 Loren Ipsum Dolor Sit,<br>22-56-2-9 Amet, Lorem,<br>USA<br>
                         Phone: (00) 222 666 444<br>Fax: (000) 000 00 00 0<br>Email: 
                         info@mycompany.com<br>Follow Us On:  
                         <a style="padding: 20px; color: #3b5998;" href="#!" role="button"><i class="fa fa-facebook fa-lg" ></i></a>
                         <a style="padding: 20px; color: #55acee;" href="#!" role="button"><i class="fa fa-twitter fa-lg"></i></a>
                         <a style="padding: 20px; color: #ac2bac;" href="#!" role="button"><i class="fa fa-instagram fa-lg"></i></a>
                     </p>     
                </div>
            </div>
        </div>
        <div style="padding-top: 10px;">
           <?php
                require 'includes/footer.php';
            ?> 
        </div>                                
    </body>       
</html>