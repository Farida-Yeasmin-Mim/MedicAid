<!<?php
include 'connection.php';


if ($_GET['id']==NULL){
   header('location:volunteer_signup.php');
}

$dbid =  $_GET['id'];
$sql = "SELECT name
FROM volunteer
WHERE volunteer_id='$dbid'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
$dfname= $row["name"];
?>>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Volunteer Profile</title>
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
                <main class="mt-5 ">
                <div class="container">
                  <div class="container-fluid">
                    <div class="row mb-5 ">
                      <div class="col-lg-6 col-md-6 col-12">
                        <img src="Image/ambulancepro.jpg" class="img-fluid">
                    </div>

                    <div class="col-lg-6 col-md-6 col-12">
                      <br><br>

                      <h1 class="text-dark">Hey <?php echo $dfname ?>!</h1>
                        <p class="text-dark">View all your information and you can also change it.</p>
                        <br>

                        <button class="btn bg-primary text-white" onclick="window.location ='edit_volunteer_profile.php?id=<?php echo $dbid ?>'">Edit Profile</button>
                        <button class="btn bg-primary text-white" onclick="window.location ='volunteer_login.php'">Logout</button>
                  </div>
                  </div>



                  </div>


  </body>
</html>
