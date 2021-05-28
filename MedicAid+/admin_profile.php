<!<?php
include 'connection.php';


if ($_GET['id']==NULL){
   header('location:please_login_admin.php');
}

$dbid =  $_GET['id'];
$sql = "SELECT name
FROM admin
WHERE admin_id='$dbid'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
$dbname= $row["name"];
?>>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Profile || Admin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="CSS/user_profile.css">

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
                <!--Main layout-->
                <main class="mt-5">
                <div class="container">

                  <div class="container-fluid">
                    <h1 class="text-center font-weight-bold text-dark text-capitalize">Welcome <?php echo $dbname ?>!</h1>
                    <hr class="w-25 pt-5">
                    <div class="row mb-5">
                      <div class="col-lg-6 col-md-6 col-12">
                        <img src="Image/admin_feedback.jpg" class="img-fluid">
                    </div>

                    <div class="col-lg-6 col-md-6 col-12">
                      <br>

                      <h1 class="text-dark">Reviews</h1>
                        <p class="text-dark">User reviews aren’t just important, they are critical to users’ purchasing decisions. View all reviews and you can also report review if it is irrelevant.</p>

                        <button class="btn bg-primary text-white" onclick="window.location ='report_review.php?id=<?php echo $dbid ?>'">View Reviews</button>
                  </div>
                  </div>
                  <div class="container-fluid">

                  <hr>

                    <div class="row mb-5">
                      <div class="col-lg-6 col-md-6 col-12">
                        <br>

                        <h1 class="text-dark">Blood Donor Details</h1>
                          <p class="text-dark">Donation is a practice when people donate to others to help them with their critical conditions. View their details and you can also block user if they are not useful. </p>

                          <button class="btn bg-primary text-white" onclick="window.location ='report_user.php?id=<?php echo $dbid ?>'">View Donor Details</button>
                    </div>
                      <div class="col-lg-6 col-md-6 col-12">
                        <img src="Image/admin_user.jpg" class="img-fluid">
                    </div>


                  </div>


                  <div class="row mb-5">
                    <div class="col-lg-6 col-md-6 col-12">
                      <img src="Image/admin_user.jpg" class="img-fluid">
                  </div>

                  <div class="col-lg-6 col-md-6 col-12">
                    <br>

                    <h1 class="text-dark">Plasma Donor Details</h1>
                      <p class="text-dark">User reviews aren’t just important, they are critical to users’ purchasing decisions. View all reviews and you can also report review if it is irrelevant.</p>

                      <button class="btn bg-primary text-white" onclick="window.location ='report_plasma.php?id=<?php echo $dbid ?>'">View Donor Details</button>
                </div>
                </div>

                  <div class="container-fluid">

                  <hr>

                    <div class="row mb-5">
                      <div class="col-lg-6 col-md-6 col-12">
                        <br>

                        <h1 class="text-dark">Ambulance</h1>
                          <p class="text-dark">Donation is a practice when people donate to others to help them with their critical conditions. View their details and you can also block user if they are not useful. </p>

                          <button class="btn bg-primary text-white" onclick="window.location ='report_ambulance.php?id=<?php echo $dbid ?>'">View Ambulance Details</button>
                    </div>
                      <div class="col-lg-6 col-md-6 col-12">
                        <img src="Image/admin_user.jpg" class="img-fluid">
                    </div>


                  </div>


  </body>
</html>
