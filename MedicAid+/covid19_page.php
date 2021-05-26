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
    <title>Covid19 | Update</title>
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
        <div class="container">
        <div class="container-fluid">

          <div class="row mb-5">
            <div class="col-lg-6 col-md-6 col-12">
              <br>
              <br>

              <h1 class="text-dark">Bangladesh Covid19 Update</h1>
                <p class="text-dark">Donation is a practice when people donate to others to help them with their critical conditions. To ensure safety, these are some of the requirements donors must meet to be eligible.To see a list of eligibility information,search donating requirements. </p>

                <button class="btn bg-primary text-white" onclick="window.location ='bangladesh_covid_info.php'">Bangladesh Covid19 Update</button>
                <button class="btn bg-primary text-white" onclick="window.location ='covid19.php'">Worldwide Update</button>

          </div>
            <div class="col-lg-6 col-md-6 col-12">
              <img src="Image/covid19news.jpg" class="img-fluid">
          </div>


        </div>
        <hr>
      </section>
    <div class="container">
        <div class="row mb-5">
          <div class="col-lg-6 col-md-6 col-12">
            <img src="Image/plasmaIndex1.jpg" class="img-fluid">
        </div>

        <div class="col-lg-6 col-md-6 col-12">
          <br>

          <h1 class="text-dark">Plasma Donation</h1>
            <p class="text-dark">A specific injury or sickness can cause lost blood in the influenced, along these lines, representing the danger of death if the blood level isn’t taken back to the ordinary. Blood is an essential flood that moves oxygen to other indispensable body parts. With the loss of blood from the body doesn’t get vital oxygen bringing about death. In such a case emerges the requirement for deliberate blood gift from another person, regardless of whether known or obscure to the person.</p>

            <button class="btn bg-primary text-white" onclick="window.location ='plasma_donor_information.php'">View Donor List</button>
      </div>
      </div>

      <section>
        <div class="container-fluid">

        <hr><br><br>
        <div class="blog">
          <div class="container">
            <div class="row mb-5">
              <div class="col-md-6 col-lg-6 col-sm-12">
                <div class="card">
                  <div class="card-img">
                    <img src="Image/covid_regi.jpg" class="img-fluid">
                  </div>

                  <div class="card-body">
                    <h4 class="card-title">Are You A Corona Recovery Patient?</h4>
                    <p class="card-text">

                      If you have fully recovered from COVID-19, you may be able to help patients currently fighting the infection by donating your plasma.
                    </p>
                  </div>
                  <div class="card-footer">
                    <div class="text-center">
                    <button class="btn bg-primary text-white text-left"type="button" onclick="window.location ='plasma_form.php'">Register To Become A Plasma Donor</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-6 col-sm-12">
                <div class="card">
                  <div class="card-img">
                    <img src="Image/covid19pi.png" class="img-fluid">
                  </div>

                  <div class="card-body">
                    <h4 class="card-title">Information</h4>
                    <p class="card-text">

                      The blood donation process from the time you arrive until the time you leave takes about an hour. The donation itself is only about 8-10 minutes on average.
                    </p>
                  </div>
                  <div class="card-footer">
                    <div class="text-center">
                    <button class="btn bg-primary text-white text-left"type="button" onclick="window.location ='covid19info.php'">Read More To Get Information</button>
                    </div>

                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>

      </section>

      <footer>
      <?php include 'footer2.php';?>
    </footer>




  </body>
</html>
