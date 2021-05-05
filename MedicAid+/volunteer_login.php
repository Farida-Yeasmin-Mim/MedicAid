<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Volunteer Log In</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  <script src="https://apis.google.com/js/platform.js" async defer></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="CSS/user_login.css">
  <style>
body {
  background-image: url('Image/v-login.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>
  </head>

  <body>
    <header>
      <?php include 'header.php';?>
                </header>

    <div class="container-fluid ">
      <h1 class="text-center text-dark text-capitalize pt-5">Volunteer Login</h1>
      <hr class="w-25 pt-4">
      <div class="w-25 mx-auto">
        <form id="loginform" method="POST" action="user_login.php">

  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" name="email" class="form-control" placeholder="Enter email" id="email" autocomplete="off" required="">
  </div>

  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" name="password" class="form-control" placeholder="Enter password" id="pwd" required="">
  </div>

  <div class="col-md-12 text-center">
  <button name="log_in" class="btn btn-primary w-50"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</button>
  <hr>
  <button type="submit" class="btn btn-danger "><i class="fa fa-user-plus" aria-hidden="true"></i> Sign Up</button>
  <button type="button" onclick="window.location = '<?php echo $loginURL ?>';" class="btn btn-danger"><i class="fa fa-google"></i> Login With Google</button>

</div>

</form>


      </div>
    </div>

  </body>
</html>
