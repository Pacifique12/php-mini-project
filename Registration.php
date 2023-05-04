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
<div class="row d-flex justify-content-center">
        <div class="col-sm-2"></div>
        <div class="col-sm-8 mt-5" style="padding-top: 80px;">
            <h1>REGISTRATION HERE</h1>
            <form action="" class="mt-4" >
                <div class="form-group">
                    <label for="fn">First name</label>
                    <input id="my-input" class="form-control" type="text" name="fname" placeholder="Enter your Firstname">
                </div>
                <div class="form-group">
                    <label for="ln">Last name</label>
                    <input id="my-input" class="form-control" type="text" name="lname" placeholder="Enter your Lastname">
                </div>
                <div class="form-group">
                    <label for="em">Email</label>
                    <input id="em" class="form-control" type="email" name="email"  placeholder="Enter your Email">
                </div>
                <div class="form-group">
                    <label for="my-input">Password</label>
                    <input id="my-input" class="form-control" type="password" name="pass" placeholder="Enter your Password">
                </div>
                <div class="form-group">
                    <label for="my-input">Confirm-Password</label>
                    <input id="my-input" class="form-control" type="password" name="cpass" placeholder="Confirm your Password">
                </div>
                <div class="form-group">
                
                    <input class=" btn btn-success mt-3" type="submit" name="submit" value="REGISTER">
                </div>

            </form>
            
        </div>
        <div class="col-sm-2 mt-3" style="padding: 5px;">
            <button class="btn bg-secondary"  type="button" role="tab">Login</button>
            <button class="btn bg-primary"  type="button">Register</button>
         
        </div>
    </div>
    
</body>
<script src="bootstrap/dist/js/bootstrap.min.js"></script>
<script src="bootstrap/dist/js/bootstrap.bundle.js"></script>

</html>