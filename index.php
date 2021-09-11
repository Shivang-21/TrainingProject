<?php
require("includes/common.php");
if(isset($_SESSION['email'])) {
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
        <title>Index Page</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>        
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>        
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">       
    </head>
    <body>
        <div style="padding-bottom: 80px;">
           <?php
            require 'includes/header.php';
            ?> 
        </div>                        
        <div class="container">
            <div style="background-color: black; color: white;"class="jumbotron home-spacer" id="jumbotron">
                <h1>Welcome to our Mobile Store!</h1>
                <p>We have the best smartphone range from biggest brands. No need to hunt around, we
                    have all in one place.</p>
                <?php if(!isset($_SESSION['email'])) { ?>
                <center><a href="#" data-toggle="modal" data-target="#lm" class="btn btn-danger btn-lg active">Shop Now</a></center>
                <?php } ?>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <div style="width: 100%; background-color: gainsboro; color: black;"class="panel-heading">
                            <h4 style="font-weight: bold;">Mobile 1</h4>
                        </div>
                        <div style="padding-top: 10px;" class="imgchg">                             
                            <img src="img/samsung_1.jpg" alt="Samsung Galaxy S21 Ultra 5G" class="img-responsive">
                        </div>
                        <div class="caption">
                            <h3>Samsung Galaxy S21 Ultra 5G</h3>
                            <p>Phantom Silver, 12GB, 256GB Rs.1,05,999</p>
                            <a href="#" data-toggle="modal" data-target="#lm"><button type="button" class="btn btn-primary btn-block">Order Now!</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <div style="width: 100%; background-color: gainsboro; color: black;"class="panel-heading">
                            <h4 style="font-weight: bold;">Mobile 2</h4>
                        </div>
                        <div style="padding-top: 10px;" class="imgchg">                             
                            <img src="img/samsung_2.jpg" alt="Samsung Galaxy Z Fold2 5G" class="img-responsive">
                        </div>                        
                        <div class="caption">
                            <h3>Samsung Galaxy Z Fold2 5G</h3>
                            <p>Mystic Black, 12GB RAM, 256GB Rs.1,79,999</p>
                            <a href="#" data-toggle="modal" data-target="#lm"><button type="button" class="btn btn-primary btn-block">Order Now!</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <div style="width: 100%; background-color: gainsboro; color: black;"class="panel-heading">
                            <h4 style="font-weight: bold;">Mobile 3</h4>
                        </div>
                        <div style="padding-top: 10px;" class="imgchg">                             
                            <img src="img/samgung_3.jpg" alt="Samsung Galaxy Note 20 Ultra 5G" class="img-responsive">
                        </div>
                        <div class="caption">
                            <h3>Samsung Galaxy Note 20 Ultra 5G</h3>
                            <p>Mystic Black, 12GB RAM, 256GB Rs.1,15,000</p>
                            <a href="#" data-toggle="modal" data-target="#lm"><button type="button" class="btn btn-primary btn-block">Order Now!</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <div style="width: 100%; background-color: gainsboro; color: black;"class="panel-heading">
                            <h4 style="font-weight: bold;">Mobile 4</h4>
                        </div>
                        <div style="padding-top: 10px;" class="imgchg">                             
                            <img src="img/samsung_4.jpg" alt="Samsung Galaxy Z Flip" class="img-responsive">
                        </div>
                        <div class="caption">
                            <h3>Samsung Galaxy Z Flip</h3>
                            <p>Purple, 8GB RAM, 256GB Rs.1,21,999</p>
                            <a href="#" data-toggle="modal" data-target="#lm"><button type="button" class="btn btn-primary btn-block">Order Now!</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <div style="width: 100%; background-color: gainsboro; color: black;"class="panel-heading">
                            <h4 style="font-weight: bold;">Mobile 5</h4>
                        </div>
                        <div style="padding-top: 10px;" class="imgchg">                             
                            <img src="img/apple_1.jpg" alt="Apple iPhone 12 Pro Max" class="img-responsive">
                        </div>
                        <div class="caption">
                            <h3>Apple iPhone 12 Pro Max</h3>
                            <p>256GB - Pacific Blue Rs.1,32,200</p>
                            <a href="#" data-toggle="modal" data-target="#lm"><button type="button" class="btn btn-primary btn-block">Order Now!</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <div style="width: 100%; background-color: gainsboro; color: black;"class="panel-heading">
                            <h4 style="font-weight: bold;">Mobile 6</h4>
                        </div>
                        <div style="padding-top: 10px;" class="imgchg">                             
                            <img src="img/apple_2.jpg" alt="Apple iPhone 11 Pro Max" class="img-responsive">
                        </div>
                        <div class="caption">
                            <h3>Apple iPhone 11 Pro Max</h3>
                            <p>256GB - Midnight Green Rs.1,10,999</p>
                            <a href="#" data-toggle="modal" data-target="#lm"><button type="button" class="btn btn-primary btn-block">Order Now!</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <div style="width: 100%; background-color: gainsboro; color: black;"class="panel-heading">
                            <h4 style="font-weight: bold;">Mobile 7</h4>
                        </div>
                        <div style="padding-top: 10px;" class="imgchg">                             
                            <img src="img/apple_3.jpg" alt="Apple iPhone XS 64GB" class="img-responsive">
                        </div>
                        <div class="caption">
                            <h3>Apple iPhone XS Pro Max</h3>
                            <p>256GB - Gold Rs.1,15,000</p>
                            <a href="#" data-toggle="modal" data-target="#lm"><button type="button" class="btn btn-primary btn-block">Order Now!</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <div style="width: 100%; background-color: gainsboro; color: black;"class="panel-heading">
                            <h4 style="font-weight: bold;">Mobile 8</h4>
                        </div>
                        <div style="padding-top: 10px;" class="imgchg">                             
                            <img src="img/apple_4.jpg" alt="Apple iPhone SE Pro Max" class="img-responsive">
                        </div>
                        <div class="caption">
                            <h3>Apple iPhone SE Pro Max</h3>
                            <p>128GB - Black  Rs.96,999</p>
                            <a href="#" data-toggle="modal" data-target="#lm"><button type="button" class="btn btn-primary btn-block">Order Now!</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <div style="width: 100%; background-color: gainsboro; color: black;"class="panel-heading">
                            <h4 style="font-weight: bold;">Mobile 9</h4>
                        </div>
                        <div style="padding-top: 10px;"class="imgchg">                             
                            <img src="img/oneplus_1.jpg" alt="OnePlus 9 Pro 5G" class="img-responsive">
                        </div>
                        <div class="caption">
                            <h3>OnePlus 9 Pro 5G</h3>
                            <p>Morning Mist, 12GB RAM, 256GB Rs.69,999</p>
                            <a href="#" data-toggle="modal" data-target="#lm"><button type="button" class="btn btn-primary btn-block">Order Now!</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <div style="width: 100%; background-color: gainsboro; color: black;"class="panel-heading">
                            <h4 style="font-weight: bold;">Mobile 10</h4>
                        </div>
                        <div style="padding-top: 10px;" class="imgchg">                             
                            <img src="img/oneplus_2.jpg" alt="OnePlus 8T 5G" class="img-responsive">
                        </div>
                        <div class="caption">
                            <h3>OnePlus 8T 5G</h3>
                            <p>Lunar Silver 12GB RAM, 256GB Rs.45,999</p>
                            <a href="#" data-toggle="modal" data-target="#lm"><button type="button" class="btn btn-primary btn-block">Order Now!</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <div style="width: 100%; background-color: gainsboro; color: black;"class="panel-heading">
                            <h4 style="font-weight: bold;">Mobile 11</h4>
                        </div>
                        <div style="padding-top: 10px;" class="imgchg">                             
                            <img src="img/oneplus_3.jpg" alt="OnePlus 8 Pro" class="img-responsive">
                        </div>
                        <div class="caption">
                            <h3>OnePlus 8 Pro</h3>
                            <p>Glacial Green 8GB RAM+128GB Rs.48,999</p>
                            <a href="#" data-toggle="modal" data-target="#lm"><button type="button" class="btn btn-primary btn-block">Order Now!</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <div style="width: 100%; background-color: gainsboro; color: black;"class="panel-heading">
                            <h4 style="font-weight: bold;">Mobile 12</h4>
                        </div>
                        <div style="padding-top: 10px;" class="imgchg">                             
                            <img src="img/oneplus_4.jpg" alt="OnePlus Nord N10 5G" class="img-responsive">
                        </div>
                        <div class="caption">
                            <h3>OnePlus Nord 5G</h3>
                            <p>Midnight Ice 128GB, 6GB RAM Rs.28,999</p>
                            <a href="#" data-toggle="modal" data-target="#lm"><button type="button" class="btn btn-primary btn-block">Order Now!</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        require 'includes/footer.php';
        ?>        
    </body>
</html>
