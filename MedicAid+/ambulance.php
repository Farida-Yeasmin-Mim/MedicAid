<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ambulance</title>
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
    <div class="container">
        <div class="row mb-5">
          <div class="col-lg-6 col-md-6 col-12">
            <img src="Image/ambulancepage.jpg" class="img-fluid">
        </div>

        <div class="col-lg-6 col-md-6 col-12">
          <br>

          <h1 class="text-danger">Emergency Ambulance!</h1>
            <p class="text-dark">An ambulance is a type of vehicle made to carry sick or injured people. Normally, ambulances go to people in emergencies to take people to hospital. </p>

            <button class="btn bg-danger text-white" onclick="window.location ='ambulance_information.php'">View Ambulance List</button>
      </div>
      </div>


      <div class="container-fluid">

      <hr>

        <div class="row mb-5">
          <div class="col-lg-6 col-md-6 col-12">
            <br>
            <br>


            <h1 class="text-primary">Register Ambulance</h1>
              <p class="text-dark">You can register your own ambulance to serve your hospitality. When you register and you can update your status at any time. </p>
              <br>
              <button class="btn bg-primary text-white" onclick="window.location ='ambulance_form.php'">Register Your Ambulance</button>
        </div>
          <div class="col-lg-6 col-md-6 col-12">
            <img src="Image/creatacc1.jpg" class="img-fluid">
        </div>


      </div>
      <footer>
      <?php include 'footer2.php';?>
    </footer>




  </body>
</html>
