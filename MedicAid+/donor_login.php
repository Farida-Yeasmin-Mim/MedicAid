<?php

  include 'connection.php';

  if (isset($_POST['log_in'])) {
      // Set variables to represent data from database

  $dbEmail = strip_tags($_POST['email']);
  $dbpass = strip_tags($_POST['password']);


  $sql = "SELECT email, password FROM donor";
  $result = mysqli_query($conn,$sql);

  if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      $Email= $row["email"] ;
      $Pass= $row["password"] ;
      // Check if the username and the password they entered was correct
      if ( $Email == $dbEmail && $Pass == $dbpass) {
        $sql = "SELECT donor_id
        FROM donor
        WHERE email='$dbEmail'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
        $dbid= $row["donor_id"];
        header("Location: donor_profile.php?id=$dbid");
      } else {
      // Display the alert box
      echo "<script>
    alert('Invalid Input!');
    window.location.href='donor_login.php';
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
    <title>Donor Login</title>
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
  background-image: url('Image/up_bg.jpg');
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
      <h1 class="text-center text-dark text-capitalize pt-5">Donor Login</h1>
      <hr class="w-25 pt-4">
      <div class="w-25 mx-auto">
        <form id="loginform" method="POST" action="donor_login.php">

  <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" name="email" class="form-control" placeholder="abc@email.com" id="email" autocomplete="off" required="">
  </div>

  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" name="password" class="form-control" placeholder="**********" id="pwd" required="">
  </div>

  <div class="col-md-12 text-center">
      <hr>
  <button name="log_in" class="btn btn-info w-50"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</button>

  <button type="submit" class="btn btn-secondary "><i class="fa fa-user-plus" aria-hidden="true"></i> Sign Up</button>


</div>

</form>


      </div>
    </div>

  </body>
</html>
