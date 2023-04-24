<?php

include'connection.php';
$fname= $_POST['fname'];
$lname= $_POST['lname'];
$country = $_POST['country'];
$city=$_POST['city'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$profeesional=$_POST['profeesional'];
$passw=$_POST['password'];
$comfirm=$_POST['comfirm-password'];

if ($passw==$comfirm) {
    $sql = "INSERT INTO `users`( `first_name`, `last_name`, `country`, `city`, `email`, `phone_number`, `password`, `profession`) 
    VALUES ('$fname','$lname','$country','$city','$email','$phone','$passw','$profeesional')";
    $result=mysqli_query($conn,$sql);
    if ($result) {
        echo"inserted";
    } else {
        echo"no data inserted";
    }
    
} else {
   echo"password mismatch  <a href='pr_register.php'>back to register</a>";
}




?>