<?php
require("includes/common.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>About Us Page</title>
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
        <div class="container">
            <div class="row">
                <div class="col-sm-4">                    
                    <h2 style="font-weight: bolder;">Who We Are</h2> 
                    <img src="img/about.png" width="350px" alt="About Page">                    
                    <p style="font-size: 16px;">E-store is an Indian Electronic Commerce company
                        with headquarters in Washington. It is the largest internet-based retailer
                        in India. E-Store started as an online blog but soon diversified,
                        selling mobile phones. E-Store also sells certain low in products like USB cables
                        and other accessories. E-Store has separate retail websites for United States,
                        United Kingdom and Ireland, France, Canada, Germany, Italy, Spain, The Netherlands,
                        Australia, Brazil, Japan, China, India and Mexico.E-Store is guided by these
                        principles, customer obsession rather than competitor focus, passion for invention,
                        commitment to operational excellence, and long-term thinking. E-Store strives
                        to be Earth’s Most Customer-Centric Company, Earth’s Best Employer,
                        and Earth’s Safest Place to Work. Customer reviews, 1-Click shopping,
                        personalized recommendations, etc.</p>
                </div>
                <div class="col-sm-4">
                    <h2 style="font-weight: bolder;">Our History</h2> 
                    <p style="font-size: 16px;">
                    <h4 style="color: blue;">1998-</h4>
                    The company was founded in 1998, spurred by what Velos called his
                    "Initiating framework", which described his efforts as an initiative
                    to participate in the Internet business boon during that time. In 1998,
                    Velos left his employment as president of Ofcol & Co. and moved to Seattle.
                    He began to work on a business plan for what would eventually become E-Store.<br>
                    <h4 style="color: blue;">2002-</h4>
                    In January 2002, E-Store has received a funding of $12 million from
                    Venture Partners and Indo-US Venture Partners.<br>
                    <h4 style="color: blue;">2008-</h4>
                    In July 2008, the company raised of further $45 million from Bessemer
                    Venture Partners, along with existing investors Venture Partners and
                    Indo-US Venture Partners.<br>
                    <h4 style="color: blue;">2015-</h4>
                    E-Store received its third rounding of funding of $133 million on Feb-2015.
                    The third round of funding was led by Fcom with all the current institutional
                    investors, including Kataari Capital.
                    </p>
                </div>
                <div class="col-sm-4">
                    <h2 style="font-weight: bolder;">Opportunities</h2>
                    <p style="font-size: 16px;">
                    <h4 style="font-weight: bold;">Available Roles</h4>
                    <b>1.</b> Jr./Sr. Web Developer [Full Time Role + also available as a 6 Months
                    Internship]<br><br>
                    <b>2.</b> Business Apprentice [6 Months Internship]<br><br>
                    <b>3.</b> Manager at Backend Operations [Full Time Role + also available as a 6 Months
                        Internship]
                    </p>
                </div>
            </div>
        </div>
        <div style="padding-top: 30px;">
            <?php
            require 'includes/footer.php';
            ?>
        </div>                 
    </body>
</html>    