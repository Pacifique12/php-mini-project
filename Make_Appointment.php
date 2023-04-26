<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
    <title>online appointment</title>
</head>
<body>
  <div class="row">
    <div class="card col-sm-4" style="height: 720px;">
      
      <div class="card-body">
        <div class="bg-info d-flex justify-content-center" style="height: 240px;margin-top: -15px;">
                    <h6 class="card-subtitle mb-2 text-muted py-5 my-4"><a href="dashboard.php" class="d-flex justify-content-center my-4">Dashboard</a></h6>
                </div>
                <div class="bg-primary d-flex justify-content-center" style="height: 240px;">
                    <h6 class="card-subtitle mb-2 text-muted py-5 my-4"><a href="Make_Appointment.php" style="color: aliceblue;" class="d-flex justify-content-center my-4">Make Appointment</a></h6>
                </div>
                <div class="bg-success d-flex justify-content-center" style="height: 240px;">
                    <h6 class="card-subtitle mb-2 text-muted py-5 my-4"><a href="View_Appointment.php" style="color:black;"class="d-flex justify-content-center my-4 " method="post" name="vappointment">View Appointment</a></h6>
                </div>
      </div>
    </div>
    <div class="card col-sm-6">
      
      <div class="card-body">
        <form action="Make_Appointment_validation.php" method="post" style="height: 680px;">
          <div class="mb-3">
            <label for="" class="form-label">First Name</label>
            <input type="text" name="fname"  class="form-control" placeholder="Enter your first name">
          </div>
          <div class="mb-3">
              <label for="" class="form-label">Last Name</label>
              <input type="text" name="lname"  class="form-control" placeholder="Enter your last name">
            </div>
            <div class="mb-3">
              <label for="" class="form-label">country</label>
              <input type="text" name="country"  class="form-control" placeholder="Enter yoour country">
            </div>
            <div class="mb-3">
              <label for="" class="form-label">City</label>
              <input type="text" name="city"  class="form-control" placeholder="Enter your city">
            </div>
            <div class="mb-3">
              <label for="" class="form-label">email</label>
              <input type="email" name="email"  class="form-control" placeholder="Enter your email">
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Telephone</label>
              <input type="tel" name="phone"  class="form-control" placeholder="Enter your phone number">
            </div>
          <div class="mb-3 form-control">
              <select name="profeesional" id="pr">
                  <option id="pr">Select profesional</option>
                  <option value="doctor" id="pr">Doctor</option>
                  <option value="lecturer" id="pr">Lecturer</option>
                  <option value="lawyer" id="pr">Lawyer</option>
                  <option value="driver" id="pr">Driver</option>
              </select>
          </div>
          
          <div class="mb-3 form-control" name="proname">
            <select name="profeesionalname" id="pr">
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
              <label for="" class="form-label">Message</label>
              <input type="text" name="message"  class="form-control" placeholder="enter A Message" aria-describedby="helpId">
            </div>
            <div class="mb-3">
              <input type="submit" name="sunmit" id="" class="btn btn-primary" value="Make Appointment">
            </div>
      </form>
      </div>
    </div>
  </div>
  

</body>
<script src="bootstrap/dist/js/bootstrap.min.js"></script>
<script src="bootstrap/dist/js/bootstrap.bundle.js"></script>

</html>