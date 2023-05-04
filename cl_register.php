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
    <div class="row my-1">
        <div class="col-sm-6"></div>
        <div class="col-sm-6">
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-3"></div>
                <div class="col-sm-6 ">
                <!-- Nav tabs -->
                <ul class="nav gap-3 d-flex justify-content-center" id="navId" role="tablist">
                    <li class="nav-item">
                        <a href="index.php" class="btn btn-primary" name="login">Login</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"  role="button" aria-haspopup="true" aria-expanded="false">Register</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="cl_register.php">Register as client</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="pr_register.php">Register as profeesional</a>
                        </div>
                    </li>
                </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row d-flex justify-content-center my-5">
        <div class="card col-sm-8 my-5">
            <div class="card-body">
                <h5 class="card-title d-flex justify-content-center">Register as Client</h5>
                <form action="cl_register_validation.php" method="post">
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
                      <div class="mb-3">
                        <label for="" class="form-label">password</label>
                        <input type="password" name="password"  class="form-control" placeholder="Enter your Password" aria-describedby="helpId">
                      </div>
                      <div class="mb-3">
                        <label for="" class="form-label">comfirm</label>
                        <input type="password" name="comfirm-password"  class="form-control" placeholder="Comfirm your password" aria-describedby="helpId">
                      </div>
                      <div class="mb-3">
                        <input type="submit" name="sunmit" id="" class="btn btn-primary" value="Register">
                      </div>
                </form>
            </div>
        </div>
    </div>
</body>
<script src="bootstrap/dist/js/bootstrap.min.js"></script>
<script src="bootstrap/dist/js/bootstrap.bundle.js"></script>

</html>





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
  <center><h1 style="color: blue; font-family: Georgia, 'Times New Roman', Times, serif;">View Your Appointmrent Here</h1></center>
    <div class="card col-sm-9 d-flex justify-content-center" style="margin-left:150px ;">
      
      <div class="card-body" style="margin-top: -47vh;">
        
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

                  $sql="SELECT `Client_id`, `Client_Names`, `Client_country`, `email`, `phone_number`, `Message`,  `Status`, `Feedback` FROM `appointment`";
                  $result=mysqli_query($conn,$sql);
                  $view=mysqli_fetch_array($result);
                  while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    
                    echo "<td>". $row["Client_id"]."</td>"."  "."<td>". $row["Client_Names"]."</td>"."  " ."<td>".$row["email"]."</td>" ."<td>".$row["Client_country"]."</td>" . "<td>".$row["phone_number"]."</td>" . "<td>".$row["Message"]."</td>"  ."<td>".$row["Status"]."</td>"."<td>".$row["Feedback" ]."</td>". "<br>";
                    echo "</tr>";
                    // Access data using $row['column_name']
                    
                  }
                  ?>
                
                  
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  
  </div>
  </div>
