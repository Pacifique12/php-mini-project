<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .pp{
            background-image:url(p.jpg); 
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            
        }
        
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
    <title>online appointment</title>
    
</head>
<body class="pp" style="width: 100%;">
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
                
                <!-- Tab panes -->
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="tab1Id" role="tabpanel"></div>
                    <div class="tab-pane fade" id="tab2Id" role="tabpanel"></div>
                    <div class="tab-pane fade" id="tab3Id" role="tabpanel"></div>
                    <div class="tab-pane fade" id="tab4Id" role="tabpanel"></div>
                    <div class="tab-pane fade" id="tab5Id" role="tabpanel"></div>
                </div>
                
                <!-- (Optional) - Place this js code after initializing bootstrap.min.js or bootstrap.bundle.min.js -->
                <script>
                    var triggerEl = document.querySelector('#navId a')
                    bootstrap.Tab.getInstance(triggerEl).show() // Select tab by name
                </script>
                
                </div>
            </div>
        </div>
    </div>
    <div class="row d-flex justify-content-center my-5   rounded p-3">
        <div class="card col-sm-4 my-5 bg-secondary">
            <div class="card-body">
                <h6 class="card-title d-flex justify-content-center" class="card-title d-flex justify-content-center" style="font-family: Georgia, 'Times New Roman', Times, serif; color: rgb(207, 224, 230);"><b>LOGIN To Online Appointment Platform</b></h6>
                <form action="login_validation.php" method="post">
                    <div class="mb-3">
                      <label for="" class="form-label"></label>
                      <input type="email" name="username" id="" class="form-control" placeholder="Enter username" aria-describedby="helpId">
                    </div>
                    <div class="mb-3">
                      <label for="" class="form-label"></label>
                      <input type="password" name="password" id="" class="form-control" placeholder="Enter your password" aria-describedby="helpId">
                    </div >
                    <div class="mb-3">
                        <button class="" type="submit" name="login" value="Login" style="background-color:rgb(11, 138, 180);border-radius: 1ch;"><h4><b>Login</b></h4></button>
                      </div>
                   
                </form>
            </div>
        </div>
    </div>
</body>
<script src="bootstrap/dist/js/bootstrap.min.js"></script>
<script src="bootstrap/dist/js/bootstrap.bundle.js"></script>

</html>