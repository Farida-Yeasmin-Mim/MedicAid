<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Header 2</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="CSS/header.css">
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">

    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" style="font-size:23px; font-weight:bold" href="index.php<?php if($dbid!=0) echo "?id=$dbid" ?>">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" style="font-size:23px; font-weight:bold" href="blood.php<?php if($dbid!=0) echo "?id=$dbid" ?>">Donation</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" style="font-size:23px; font-weight:bold" href="volunteer.php<?php if($dbid!=0) echo "?id=$dbid" ?>">Volunteer</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" style="font-size:23px; font-weight:bold" href="ambulance.php<?php if($dbid!=0) echo "?id=$dbid" ?>">Ambulance</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" style="font-size:23px; font-weight:bold" href="appointment.php<?php if($dbid!=0) echo "?id=$dbid" ?>">Appointment</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" style="font-size:23px; font-weight:bold" href="feedback.php<?php if($dbid!=0) echo "?id=$dbid" ?>">Feedback</a>
      </li>
      <li class="nav-item active">
        <a name="logi" class="nav-link" style="font-size:23px; font-weight:bold" href="login_as.php<?php if($dbid!=0) echo "?id=$dbid" ?>">Login</a>
      </li>

    </ul>
    <form class="form-inline my-2 my-lg-0">
      <div class="ml-auto">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
    </form>

  </div>
</nav>
  </body>
</html>
