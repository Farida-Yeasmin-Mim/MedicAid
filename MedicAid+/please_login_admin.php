<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login Required</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="CSS/feedback.css">
  <style>
  body {
  background-image: url('Image/extra.jpg');
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

    <!--Section: Contact-->
    <section id="contact">

        <!-- Heading -->
        <div class="container-fluid">

          <h2 class="text-center font-weight-bold text-dark text-capitalize pt-5 mt-5">Login First!</h2>
          <hr class="w-25">


        <!--Grid row-->
        <div class="row" >

            <!--Grid column-->
            <div class="col-lg-5 col-md-12 mx-auto">
                <!-- Form contact -->

                    <div class="text-center mt-4">
                      <button class="btn btn-info" type="button" onclick="window.location ='admin_login.php'"> <i class="fa fa-sign-in" aria-hidden="true"></i> Login Now!</a>
                      </button>



                    </div>


            </div>
            <!--Grid column-->



        </div>
        <!--Grid row-->

    </section>
    <!--Section: Contact-->
