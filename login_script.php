<?php
require("includes/common.php");
$email=$_POST['email'];
$email=mysqli_real_escape_string($con,$email);
$password=$_POST['password'];
$password=mysqli_real_escape_string($con,$password);
$password=MD5($password);
$query="SELECT id, email FROM users WHERE email='".$email."' AND password='".$password."'";
$result=mysqli_query($con,$query) or die($mysqli_error($con));
$num=mysqli_num_rows($result);
if($num==0){
    echo 'Please enter correct E-mail id and Password';
    header("location: login.php?error=Please enter correct E-mail id and Password");
}else{  
  $order_id= uniqid();
  $_SESSION['order_id']=$order_id;  
  $row = mysqli_fetch_array($result);
  $_SESSION['email'] = $row['email'];
  $_SESSION['user_id'] = $row['id'];
  header('location: products.php');
}

