<?php
include 'connection.php';

if (!empty($_GET['id'])){
   $dbid =  $_GET['id'];
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registration Completed</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
  body {
  background-image: url('Image/bloodpb.jpg');
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
    <main class="mt-5">
      <section>
        <div class="container-fluid">
          <br>
          <br>
          <h1 class="text-center font-weight-bold text-dark text-capitalize ">Registration Completed!</h1>
          <h2 class="text-center font-weight-bold text-danger text-capitalize ">Remember Your Token Number: <?php echo $dbid ?></h2>
          <p class="text-center"> This token number will help you to update your status! </p>
          <hr class="w-25 ">
            <div class="text-center">
          <button class="btn bg-info text-white text-left"type="button" onclick="window.location ='ambulance_information.php'">See Plasma Donor List</button>
        </div>



                </header>


  </body>
</html>
