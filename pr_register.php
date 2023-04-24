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
                        <a href="#tab1Id" class="btn btn-primary"  aria-current="page">Login </a>
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
                <h5 class="card-title d-flex justify-content-center">Register as Professional</h5>
                <form action="register_validation.php" method="post">
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