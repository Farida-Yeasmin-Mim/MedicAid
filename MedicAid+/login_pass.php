<?php
  // Create database connection
  include 'connection.php';

$username =  $_GET['id'];


if (isset($_POST['log_in'])) {
    // Set variables to represent data from database
    $dbUsname = strip_tags($_POST['username']);
$dbEmail = strip_tags($_POST['email']);
$dbpass = strip_tags($_POST['password']);


    $sql = "SELECT User_Name, Email, Password FROM user";
$result = mysqli_query($conn,$sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    $UserName= $row["User_Name"];
    $Email= $row["Email"] ;
    $Pass= $row["Password"] ;
    // Check if the username and the password they entered was correct
    if ($UserName == $dbUsname && $Email == $dbEmail && $Pass == $dbpass) {
  header("Location: user_profile.php?id=$UserName");
    } else {
    // Display the alert box
    echo "<script>
  alert('Invalid Input!');
  window.location.href='user_login.php';
  </script>";
}

  }
}

}


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>User Password</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://apis.google.com/js/platform.js" async defer></script>
    <title>About</title>
  </head>
  <body>
    <div class="container-fluid ">
      <h1 class="text-center text-dark text-capitalize pt-5">Login</h1>
      <hr class="w-25 pt-4">
      <div class="w-25 mx-auto">
        <form action="login_passs.php">

  <div class="form-group">
    <label for="pwd">Set Password:</label>
    <input type="password" class="form-control" placeholder="Enter password" id="pwd">
  </div>

  <div class="col-md-12 text-center">
  <button type="submit" class="btn btn-primary w-50">Login</button>
</div>

</form>


      </div>
    </div>
<h1> Login Succcessfully <?php echo $username?></h1>
  </body>
</html>
