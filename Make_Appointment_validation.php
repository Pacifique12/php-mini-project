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
$proname=$_POST['proname'];

if (isset($sunmit)) {
       $sql="INSERT INTO `appointment`(`Client_Names`, `Client_country`, `email`, `phone_number`, `Message`, `Choosed_profesional'name`) VALUES ('$fname $lname','$country','$email','$phone','$message','$proname')";
       $result=mysqli_query($conn,$sql);
       echo "<script>alert('your appointment is done succefuly');
       window.location.replace('Make_Appointment.php');</script>";
} else {
       echo "<script>alert('your appointment is failed prease re try');
       window.location.replace('Make_Appointment.php');</script>";
}



?>
