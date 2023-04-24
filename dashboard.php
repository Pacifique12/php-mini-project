
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
    <div class="card col-sm-4" style="height: 540px;">
      
      <div class="card-body my-2 ">
        <div class="bg-info d-flex justify-content-center" style="height: 175px;margin-top: -15px;">
                    <h6 class="card-subtitle mb-2 text-muted py-5 my-4"><a href="dashboard.php" class="d-flex justify-content-center my-4">Dashboard</a></h6>
                </div>
                <div class="bg-primary d-flex justify-content-center" style="height: 175px;">
                    <h6 class="card-subtitle mb-2 text-muted py-5 my-4"><a href="Make_Appointment.php" style="color: aliceblue;" class="d-flex justify-content-center my-4">Make Appointment</a></h6>
                </div>
                <div class="bg-success d-flex justify-content-center" style="height: 175px;">
                    <h6 class="card-subtitle mb-2 text-muted py-5 my-4"><a href="Make_Appointment.php" style="color:black;"class="d-flex justify-content-center my-4 " method="post" name="vappointment">View Appointment</a></h6>
                </div>
      </div>
    </div>
    <div class="card col-sm-8">
      
        
            
      <div class="card-body bg-secondary mb-2 my-2  " >
       <h5 class="card-title d-flex justify-content-center" style="color:aqua">User Informations</h5>
       <img class="card-img-bottom" src="C:\xampp\htdocs\php-mini-project\icon.png" alt="">
       <?php 
// include('connection.php');

// $sql="SELECT `Client_id`, `Client_Names`, `Client_country`, `email`, `phone_number`, `Message`,  `Status`, `Feedback` FROM `appointment`";
//     $result=mysqli_query($conn,$sql);
    

//   while($result){
//     $view=mysqli_fetch_object($result);
//     echo "$view->Client_id";
//     echo "$view->Client_Names";
//     echo "$view->Client_country";
//     echo "$view->email";
//     echo "$view->phone_number";
//    echo "$view->Message";
    
//   }
?>
      
      </div>
    </div>
  </div>
  

</body>
<script src="bootstrap/dist/js/bootstrap.min.js"></script>
<script src="bootstrap/dist/js/bootstrap.bundle.js"></script>

</html>