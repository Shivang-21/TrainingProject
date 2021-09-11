<?php
require_once("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Settings Page</title>
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
                <div class="col-lg-4 col-lg-offset-4" id="settings-container">
                    <h4>Change Password</h4>
                    <form action="settings_script.php" method="POST">
                        <div class="form-group">
                            <input type="password" class="form-control" name="old-password"  placeholder="Old Password" required="true">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="new-password" placeholder="New Password" required="true">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="rn-password"  placeholder="Re-type New Password" required="true">
                        </div>
                        <button type="submit" class="btn btn-primary">Change</button>
                        <?php
                        if(isset($_GET['error'])) {
                        echo "<br><br><b class='red'>" . $_GET['error'] . "</b>";
                        }
                        ?>
                    </form>
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