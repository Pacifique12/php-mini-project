<?php
include('connection.php');
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$country = $_POST['country'];
$city = $_POST['city'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$profeesional = $_POST['profeesional'];
$profeesionalname = $_POST['profeesionalname'];
$message = $_POST['message'];
$sunmit = $_POST['sunmit'];

if (isset($sunmit)) {
       $sql="INSERT INTO `appointment`(`Client_Names`, `Client_country`, `email`, `phone_number`, `Message`, `Choosed_profesional'name`) VALUES ('$fname $lname','$country','$email','$phone','$message','$profeesionalname')";
       $result=mysqli_query($conn,$sql);
       echo "data inserted";
} else {
       echo "data is not inserted";
}



?>
