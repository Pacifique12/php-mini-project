
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
  <div class="row" >
    <div class="card col-sm-4" style="height: 540px;">
      
      <div class="card-body my-2">
        <div class="bg-info d-flex justify-content-center" style="height: 175px;margin-top: -15px;">
                    <h6 class="card-subtitle mb-2 text-muted py-5 my-4"><a href="dashboard.php" class="d-flex justify-content-center my-4">Dashboard</a></h6>
                </div>
                <div class="bg-primary d-flex justify-content-center" style="height: 175px;">
                    <h6 class="card-subtitle mb-2 text-muted py-5 my-4"><a href="Make_Appointment.php" style="color: aliceblue;" class="d-flex justify-content-center my-4">Make Appointment</a></h6>
                </div>
                <div class="bg-success d-flex justify-content-center" style="height: 175px;">
                    <h6 class="card-subtitle mb-2 text-muted py-5 my-4"><a href="View_Appointment.php" style="color:black;"class="d-flex justify-content-center my-4 " method="post" name="vappointment">View Appointment</a></h6>
                </div>
      </div>
    </div>
    <div class="card col-sm-8">
      
        
            
      <div class="card-body bg-secondary mb-2 my-2">
       <h5 class="card-title d-flex justify-content-center" style="color:aqua">View Appointments Details</h5>
  
<div class="container" style="margin-top:-38vh">
      
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php
               
               include('connection.php');

$sql="SELECT `Client_id`, `Client_Names`, `Client_country`, `email`, `phone_number`, `Message`,  `Status`, `Feedback` FROM `appointment`";
$result=mysqli_query($conn,$sql);
$view=mysqli_fetch_array($result);
echo "<table>";
echo "<tr><th>ID</th><th>Names</th><th>E-maill</th><th>Country</th><th>Phone_Number</th><th>Message</th><th>Status</th><th>Feedback</th></tr>";

if (mysqli_num_rows($result) > 0) {
  // Loop through each row of data
  while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    
    echo "<td>". $row["Client_id"]."</td>"."  "."<td>". $row["Client_Names"]."</td>"."  " ."<td>".$row["email"]."</td>" ."<td>".$row["Client_country"]."</td>" . "<td>".$row["phone_number"]."</td>" . "<td>".$row["Message"]."</td>"  ."<td>".$row["Status"]."</td>"."<td>".$row["Feedback" ]."</td>". "<br>";
    echo "</tr>";
    // Access data using $row['column_name']
    
  }
} else {
  echo "0 results";
}
$confirmStatus = $row['confirmation_status']; // Assuming 'confirmation_status' is the column name in your database table for confirmation status
$denyStatus = $row['denial_status']; // Assuming 'denial_status' is the column name in your database table for denial status
?>
<tr>
<td><?php echo $row['Status']; // Assuming 'item_name' is the column name in your database table for the item name ?></td>
<td>
<?php
          // Display the status based on confirmation and denial status
          if ($confirmStatus == 1) {
            echo '<span class="badge badge-success">Confirmed</span>';
          } elseif ($denyStatus == 1) {
            echo '<span class="badge badge-danger">Denied</span>';
          } else {
            echo '<span class="badge badge-secondary">Pending</span>';
          }
        ?>
</td>
<td>
        <!-- Create confirmation and denial buttons with Bootstrap styles -->
        <button class="btn btn-success btn-sm" <?php echo ($confirmStatus == 1) ? 'disabled' : ''; ?>>
          Confirm
        </button>
        <button class="btn btn-danger btn-sm" <?php echo ($denyStatus == 1) ? 'disabled' : ''; ?>>
          Deny
        </button>
      </td>
</tr>
  <?php 

    mysqli_close($conn);
  ?>
            </tbody>
        </table>
    </div>
      
      </div>
    </div>
  </div>
  

</body>
<script src="bootstrap/dist/js/bootstrap.min.js"></script>
<script src="bootstrap/dist/js/bootstrap.bundle.js"></script>

</html>