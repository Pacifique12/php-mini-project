<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
    <title>online appointment</title>
</head>
<body class="bg-secondary p-3">
  <div class="row">
    <div class="card-body">
        
    
    </div>
  </div>
  </div>
  <div class="row">
    <div class=" p-3" style="margin-top: -5vh;" >

      <div class="" >
      <nav class="nav">
        <li class="nav-item">
          <a class="nav-link active" href="dashboard.php" style="font-family: Georgia, 'Times New Roman', Times, serif; color: aliceblue;"><b>Dashboard</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="Make_Appointment.php" tabindex="-1" aria-disabled="true" style="font-family: Georgia, 'Times New Roman', Times, serif; color: aliceblue;"><b>Make Appointment</b> </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="View_Appointment.php" tabindex="-1" aria-disabled="true" style="font-family: Georgia, 'Times New Roman', Times, serif; color: aliceblue;"><b>View Appointment</b> </a>
        </li>
      </nav>
    </div>
    <div>
      <ul class="nav gap-3 " style="margin-left: 970px; margin-top: -40px; ">
        
        <a href="#tab1Id" class="btn btn-primary" style="font-family: Georgia, 'Times New Roman', Times, serif;" aria-current="page" >Update Appointment</a>
        <a href="index.php" class="btn btn-primary"  aria-current="page" style="font-family: Georgia, 'Times New Roman', Times, serif;">Log out </a>
        
        
        
      </div>
    </div>
  </div>
  <center><h1 style="color: blue; font-family: Georgia, 'Times New Roman', Times, serif;">Make Your Appointmrent Here</h1></center>
    <div class="card col-sm-9 d-flex justify-content-center mt-4" style="margin-left:150px ;">
      
      <div class="card-body mb-5">
        <form action="Make_Appointment_validation.php" method="post" style="height: 680px;">
          <div class="mb-3">
            <label for="" class="form-label" style="font-family: Georgia, 'Times New Roman', Times, serif;">First Name</label>
            <input type="text" name="fname"  class="form-control" placeholder="Enter your first name" style="font-family: Georgia, 'Times New Roman', Times, serif;">
          </div>
          <div class="mb-3">
              <label for="" class="form-label" style="font-family: Georgia, 'Times New Roman', Times, serif;">Last Name</label>
              <input type="text" name="lname"  class="form-control" placeholder="Enter your last name" style="font-family: Georgia, 'Times New Roman', Times, serif;">
            </div>
            <div class="mb-3">
              <label for="" class="form-label" style="font-family: Georgia, 'Times New Roman', Times, serif;">country</label>
              <input type="text" name="country"  class="form-control" placeholder="Enter yoour country" style="font-family: Georgia, 'Times New Roman', Times, serif;">
            </div>
            <div class="mb-3">
              <label for="" class="form-label" style="font-family: Georgia, 'Times New Roman', Times, serif;">City</label>
              <input type="text" name="city"  class="form-control" placeholder="Enter your city" style="font-family: Georgia, 'Times New Roman', Times, serif;">
            </div>
            <div class="mb-3">
              <label for="" class="form-label" style="font-family: Georgia, 'Times New Roman', Times, serif;">email</label>
              <input type="email" name="email"  class="form-control" placeholder="Enter your email" style="font-family: Georgia, 'Times New Roman', Times, serif;">
            </div>
            <div class="mb-3">
              <label for="" class="form-label" style="font-family: Georgia, 'Times New Roman', Times, serif;">Telephone</label>
              <input type="tel" name="phone"  class="form-control" placeholder="Enter your phone number" style="font-family: Georgia, 'Times New Roman', Times, serif;">
            </div>
          <div class="mb-3 form-control">
              <select name="profeesional" id="pr" style="font-family: Georgia, 'Times New Roman', Times, serif;">
                  <option id="pr">Select profesional</option>
                  <option value="doctor" id="pr">Doctor</option>
                  <option value="lecturer" id="pr">Lecturer</option>
                  <option value="lawyer" id="pr">Lawyer</option>
                  <option value="driver" id="pr">Driver</option>
              </select>
          </div>
          
          <div class="mb-3 form-control" name="proname">
            <select name="profeesionalname" id="pr" style="font-family: Georgia, 'Times New Roman', Times, serif;">
            <option id="pro">Select profesional's Name</option>
            <?php
          require_once('connection.php');
          $sql="SELECT * FROM `users`";
          $result=mysqli_query($conn,$sql);
          while($pro=mysqli_fetch_object($result)){?>
             
             <option value="<?php echo $pro->first_name;?>" id="pr"><?php echo $pro->id." ". $pro->first_name; ?></option>
          <?php
          }
          ?> 
            </select>
        </div>
            <div class="mb-3">
              <label for="" class="form-label" style="font-family: Georgia, 'Times New Roman', Times, serif;">Message</label>
              <input type="text" name="message"  class="form-control" placeholder="Enter A Message" style="font-family: Georgia, 'Times New Roman', Times, serif;">
            <div class="mt-2">
              <input type="submit" name="sunmit" id="" class="btn btn-primary" value="Make Appointment" style="font-family: Georgia, 'Times New Roman', Times, serif;">
            </div>
            
            </div>
            
      </form>
      </div>
    </div>
  
  </div>
  </div>
</body>
<script src="bootstrap/dist/js/bootstrap.min.js"></script>
<script src="bootstrap/dist/js/bootstrap.bundle.js"></script>

</html>