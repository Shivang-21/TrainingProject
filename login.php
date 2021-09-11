<div id="lm" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"> &times;</button>
                <h4><b>LOGIN</b></h4>
            </div>
            <div class="modal-body">
                <p>Don't have an account? <a href="signup.php">Register</a></p>
                <form action="login_script.php" method="POST">
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email" id="email" name="email" required="true">
                    </div>
                    <div class="form-group">  
                        <input type="password" class="form-control" placeholder="Password" id="password" name="password" required="true">
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button><br><br>
                    <?php
                    if(isset($_GET['error'])) {
                    echo "<br><br><b class='red'>" . $_GET['error'] . "</b>";
                    }
                    ?>
                </form>
                <div "class="modal-footer">
                    <a href="#">Forgot Password?</a>
                </div>
            </div>            
        </div>
    </div>
</div>