<?php 
include('connection.php');
$username=$_POST['username'];
$password=$_POST['password'];

$sql="SELECT * FROM `users`";
$result=mysqli_query($conn,$sql);
$view=mysqli_fetch_object($result);
$chekname=$view->email;
$chekpass=$view->password;
if ($chekname==$username && $chekpass==$password) {
    header('location:dashboard.php');
} else {
    echo"<script>alert('Your Account Not found Please Register');
    window.location.replace('index.php');</script>";
}


?>
