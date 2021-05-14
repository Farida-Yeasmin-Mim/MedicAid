<?php
include 'connection.php';

if (isset($_POST['feedback'])) {
  // Set variables to represent data from database
  $dbUsname = strip_tags($_POST['name']);
$dbEmail = strip_tags($_POST['email']);
$dbmess = strip_tags($_POST['message']);
$sql = "INSERT INTO feedback (name, email, message)
VALUES ('$dbUsname', '$dbEmail', '$dbmess');";
mysqli_query($conn, $sql);
echo "<script>
alert('Thank you For Your Response!');
window.location.href='index.php';
</script>";
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Feedback</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="CSS/feedback.css">
  <style>
  body {
  background-image: url('Image/fbbg.jpg');
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
          <h2 class="text-center font-weight-bold text-dark text-capitalize pt-5">Send us your Feedback about MedicAid+!</h2>
          <hr class="w-25">


        <!--Grid row-->
        <div class="row" >

            <!--Grid column-->
            <div class="col-lg-5 col-md-12 mx-auto">
                <!-- Form contact -->
                <form id="feed" class="p-5 grey-text " method="POST" action="feedback.php">
                    <div class="md-form form-sm"> Your name <i class="fa fa-user prefix"> </i>
                        <input type="text" name="name" id="form3" class="form-control form-control-sm" required="">

                    </div>
                    <br>
                    <div class="md-form form-sm"> Your Email <i class="fa fa-envelope prefix"></i>
                        <input type="email" name="email" id="form2" class="form-control form-control-sm" required="">

                    </div>
                    <br>
                    <div class="md-form form-sm"> Your Message <i class="fa fa-pencil prefix"></i>
                        <textarea type="text" name="message" id="form8" class="md-textarea form-control form-control-sm" rows="4" required=""></textarea>

                    </div>
                    <br>
                    <div class="text-center mt-4">
                        <button class="btn btn-primary" name="feedback" form="feed">Send <i class="fa fa-paper-plane-o ml-1"></i></button>
                    </div>

                </form>
                <!-- Form contact -->
            </div>
            <!--Grid column-->



        </div>
        <!--Grid row-->

    </section>
    <!--Section: Contact-->
