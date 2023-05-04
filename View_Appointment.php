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
  <center><h1 style="color: blue; font-family: Georgia, 'Times New Roman', Times, serif;">View Your Appointmrent Here</h1></center>
  <div class="table-responsive">
          
    <table class="table table-codensed table-custom" border="4" style="background-color:blue;">
      <thead style="font-family: Georgia, 'Times New Roman', Times, serif; color: rgb(8, 136, 248);">
        <tr>
          <th>Client ID</th>
          <th>Names</th>
          <th>Email</th>
          <th>Country</th>
          <th>Phone Number</th>
          <th>Message</th>
          <th>Status</th>
          <th>Feedback</th>
        </tr>
      </thead>
      <tbody style="font-family: Georgia, 'Times New Roman', Times, serif; color: rgb(0, 3, 5);">
          <?php
          include ('connection.php');
          $indb= array();
          $sql="SELECT *FROM `appointment`";
          $result=mysqli_query($conn,$sql);
          $view=mysqli_fetch_array($result);
          while($row= mysqli_fetch_assoc($result)){
            $indb[]=$row;

          foreach($indb as $data): ?>
            <tr>
            <td><?php echo $data['Client_id'];?></td>
            <td><?php  echo $data['Client_Names'];?></td>
            <td><?php  echo $data['email'];?></td>
            <td><?php  echo $data['Client_country'];?></td>
            <td><?php  echo $data['phone_number'];?></td>
            <td><?php  echo $data['Message'];?></td>
            <td><?php  echo $data['Status'];?></td>
            <td><?php  echo $data['Feedback'];?></td>
            </tr>
            
            // Access data using $row['column_name']
           <?php 
           endforeach;
          } 
          ?> 
          
          ?>
        
          
      </tbody>
    </table>
  </div>


</body>
<script src="bootstrap/dist/js/bootstrap.min.js"></script>
<script src="bootstrap/dist/js/bootstrap.bundle.js"></script>

</html>