<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Blood Donation</title>
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
            <img src="Image/blood00.jpg" class="img-fluid">
        </div>

        <div class="col-lg-6 col-md-6 col-12">
          <br>

          <h1 class="text-dark">Blood Donation</h1>
            <p class="text-dark">A specific injury or sickness can cause lost blood in the influenced, along these lines, representing the danger of death if the blood level isn’t taken back to the ordinary. Blood is an essential flood that moves oxygen to other indispensable body parts. With the loss of blood from the body doesn’t get vital oxygen bringing about death. In such a case emerges the requirement for deliberate blood gift from another person, regardless of whether known or obscure to the person.</p>

            <button class="btn bg-primary text-white" onclick="window.location ='blood_donor_information.php'">View Donor List</button>
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
                    <img src="Image/creatacc1.jpg" class="img-fluid">
                  </div>

                  <div class="card-body">
                    <h4 class="card-title">Sign Up As A Donor</h4>
                    <p class="card-text">

                      Signing up on your state registry means that someday you could save lives as a donor—by leaving behind the gift of life. When you register and you can update your status at any time.
                    </p>
                  </div>
                  <div class="card-footer">
                    <a href="" class="card-link">Sign Up For Free Now!</a>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-6 col-sm-12">
                <div class="card">
                  <div class="card-img">
                    <img src="Image/bloodpi.jpg" class="img-fluid">
                  </div>

                  <div class="card-body">
                    <h4 class="card-title">Information</h4>
                    <p class="card-text">

                      The blood donation process from the time you arrive until the time you leave takes about an hour. The donation itself is only about 8-10 minutes on average.
                    </p>
                  </div>
                  <div class="card-footer">
                    <a href="information.php" class="card-link">Read More To Get Information!</a>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>

      </section>
      <div class="container-fluid">

      <hr>

        <div class="row mb-5">
          <div class="col-lg-6 col-md-6 col-12">
            <br>
            <br>

            <h1 class="text-dark">Are you  eligible to donate blood?</h1>
              <p class="text-dark">Donation is a practice when people donate to others to help them with their critical conditions. To ensure safety, these are some of the requirements donors must meet to be eligible.To see a list of eligibility information,search donating requirements. </p>

              <button class="btn bg-primary text-white" onclick="window.location ='donating_requirements.php'">Eligibility Criteria</button>
        </div>
          <div class="col-lg-6 col-md-6 col-12">
            <img src="Image/bloodreq.jpg" class="img-fluid">
        </div>


      </div>
      <?php include 'footer2.php';?>

                </header>


  </body>
</html>
