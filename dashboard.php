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
  <center><h1 style="color: blue; font-family: Georgia, 'Times New Roman', Times, serif;">Welcome To Online Appointment Platform</h4></center>
     <div class="row">
      <div class="col-sm-2">
        <h4 style="font-family: Georgia, 'Times New Roman', Times, serif; color: aliceblue;">On this Platform You can Send A request For Doctor, Driver, Lowyer and Lecturer Appointment</h1>
        
      </div>
      <div class="col-sm-4">
        <div class="bg-danger rounded-pill" style="padding: 60px;">
         <p style="font-family: Georgia, 'Times New Roman', Times, serif; color: aliceblue;">Click Here To View Appointments</p> <a class="nav-link active" href="View_Appointment.php" style="font-family: Georgia, 'Times New Roman', Times, serif; color: aliceblue;"><b>View Appointment</b> </a>
        </div>
        <div class="bg-primary mt-5 rounded-pill" style="padding: 60px;">
          <p style="font-family: Georgia, 'Times New Roman', Times, serif; color: aliceblue;">Click Here To Make Appointments</p> <a class="nav-link active" href="Make_Appointment.php"  style="font-family: Georgia, 'Times New Roman', Times, serif; color: aliceblue;"><b>Make Appointment</b> </a>
         </div>
      </div>
      <div class="col-sm-6">
        <div> 
          <center><h1 style="font-family: Georgia, 'Times New Roman', Times, serif; color: aliceblue;">User Imformations</h1></center>
        </div>
        <div>
          <center><img class="rounded-pill" src="pic.jpg" alt="" width="100px" height="100px"></center>
        </div>
        <div>
          <?php 
          $connects=mysqli_connect('localhost','root','','appointment_system')
          
          ?>
        </div>
      </div>
     </div> 
  
  
</body>
<script src="bootstrap/dist/js/bootstrap.min.js"></script>
<script src="bootstrap/dist/js/bootstrap.bundle.js"></script>

</html>