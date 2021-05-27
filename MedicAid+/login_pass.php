<?php
  // Create database connection
  include 'connection.php';

$userid =  $_GET['id'];


if (isset($_POST['log_in'])) {

$dbpass = strip_tags($_POST['password']);

$sql = "UPDATE user
SET password='$dbpass'
WHERE user_id='$userid' ";
// execute query
mysqli_query($conn, $sql);
header("Location: user_profile.php?id=$userid");
exit();

}


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Set Password</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://apis.google.com/js/platform.js" async defer></script>

  <style>
body {
  background-image: url('Image/logg.jpg');
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
      <h1 class="text-center text-dark text-capitalize pt-5">Login</h1>
      <hr class="w-25 pt-4">
      <div class="w-25 mx-auto">
        <form action="login_pass.php?id=<?php echo $userid?>" id="loginform" method="POST">

  <div class="form-group">
    <label for="pwd">Set Password:</label>
    <input type="password" name="password" class="form-control" placeholder="Enter password" id="pwd">
  </div>

  <div class="col-md-12 text-center">
  <button type="submit" name="log_in" form="loginform" class="btn btn-primary w-50">Set Password</button>
</div>

</form>


      </div>
    </div>

  </body>
</html>
