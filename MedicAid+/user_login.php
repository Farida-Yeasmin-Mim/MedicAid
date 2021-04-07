<?php
    require_once "config.php";
	$loginURL = $gClient->createAuthUrl();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>User Log In</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://apis.google.com/js/platform.js" async defer></script>
  </head>
  <body>
    <div class="container-fluid ">
      <h1 class="text-center text-dark text-capitalize pt-5">Login</h1>
      <hr class="w-25 pt-4">
      <div class="w-25 mx-auto">
        <form action="/action_page.php">

  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" placeholder="Enter email" id="email" autocomplete="off">
  </div>

  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" placeholder="Enter password" id="pwd">
  </div>

  <div class="col-md-12 text-center">
  <button type="submit" class="btn btn-primary w-50">Login</button>
  <hr>
  <button type="submit" class="btn btn-danger ">Sign Up</button>
  <button type="button" onclick="window.location = '<?php echo $loginURL ?>';" class="btn btn-danger">Login With Google</button>
</div>

</form>


      </div>
    </div>

  </body>
</html>
