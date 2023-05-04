<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
    <title>online appointment</title>
</head>
<body class="bg-info">
  <div class="row">
    <div class=" p-3" >

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
   
    <div class="row d-flex justify-content-center my-5">
        <div class="card col-sm-8 my-5">
            <div class="card-body">
                <h5 class="card-title d-flex justify-content-center">Register as Professional</h5>
                <form action="register_validation.php" method="post">
                    <div class="mb-3">
                      <label for="" class="form-label">First Name</label>
                      <input type="text" name="fname"  class="form-control" placeholder="Enter your first name" required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Last Name</label>
                        <input type="text" name="lname"  class="form-control" placeholder="Enter your last name" required>
                      </div>
                      <div class="mb-3">
                        <label for="" class="form-label">country</label>
                        <input type="text" name="country"  class="form-control" placeholder="Enter yoour country" required>
                      </div>
                      <div class="mb-3">
                        <label for="" class="form-label">City</label>
                        <input type="text" name="city"  class="form-control" placeholder="Enter your city " required>
                      </div>
                      <div class="mb-3">
                        <label for="" class="form-label">email</label>
                        <input type="email" name="email"  class="form-control" placeholder="Enter your email" required>
                      </div>
                      <div class="mb-3">
                        <label for="" class="form-label">Telephone</label>
                        <input type="tel" name="phone"  class="form-control" placeholder="Enter your phone number" required>
                      </div>
                    <div class="mb-3 form-control">
                      <option >Register As</option>
                        <select name="profeesional" id="pr" required>
                                                 
                          <option disabled selected value style="display:none"></option>
                            <option value="Client" id="pr">Client</option>
                            <option value="doctor" id="pr">Doctor</option>
                            <option value="lecturer" id="pr">Lecturer</option>
                            <option value="lawyer" id="pr">Lawyer</option>
                            <option value="driver" id="pr">Driver</option>
                        </select>
                      </div>
                      <div class="mb-3">
                        <label for="" class="form-label">password</label>
                        <input type="password" name="password"  class="form-control" placeholder="Enter your Password" aria-describedby="helpId" required>
                      </div>
                      <div class="mb-3">
                        <label for="" class="form-label">comfirm</label>
                        <input type="password" name="comfirm-password"  class="form-control" placeholder="Comfirm your password" aria-describedby="helpId" required>
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