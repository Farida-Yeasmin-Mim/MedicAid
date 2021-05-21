<?php

  include 'connection.php';

  if (isset($_POST['log_in'])) {
      // Set variables to represent data from database

  $dbNumber = strip_tags($_POST['number']);
  $dbpass = strip_tags($_POST['password']);


  $sql = "SELECT contact_number, password FROM ambulance";
  $result = mysqli_query($conn,$sql);

  if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      $Number= $row["contact_number"] ;
      $Pass= $row["password"] ;
      // Check if the username and the password they entered was correct
      if ( $Number == $dbNumber && $Pass == $dbpass) {
        $sql = "SELECT ambulance_id
        FROM ambulance
        WHERE contact_number='$dbNumber'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
        $dbid= $row["ambulance_id"];
        header("Location: ambulance_profile.php?id=$dbid");
      } else {
      // Display the alert box
      echo "<script>
    alert('Invalid Input!');
    window.location.href='ambulance_login.php';
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
    <title>Ambulance Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  <script src="https://apis.google.com/js/platform.js" async defer></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
      <br>  <br>
      <h1 class="text-center text-dark text-capitalize pt-5">Ambulance Login</h1>
      <hr class="w-25 pt-4">
      <div class="w-25 mx-auto">
        <form id="loginform" method="POST" action="ambulance_login.php">


  <div class="form-group">

    <input type="text" name="number" class="form-control" placeholder="Enter Your Number" id="email" autocomplete="off" required="">
  </div>

  <div class="form-group">
    <input type="password" name="password" class="form-control" placeholder="Enter Your Password" id="pwd" required="">
  </div>

  <div class="col-md-12 text-center">
      <hr>
  <button name="log_in" class="btn btn-info w-50"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</button>


</div>

</form>


      </div>
    </div>

  </body>
</html>
