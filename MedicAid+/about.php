<?php
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-wiidth,initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <title>About MedicAid</title>

    <!-- about.css-->
    <link rel="stylesheet" href="CSS/about.css">

  </head>
  <body>
    <header>
      <?php include 'header.php';?>
    </header>



    <div class="aboutBground">
    <div id='AppendHere'></div>

    <!-- About Cooking realm section-->
    <div class="About">
      <div class="container">
        <div class="row">

          <div class="col-md-4 pt-2">
            <div class="row justify-content-center">
            <iframe width="300" height="310" src="https://www.youtube.com/embed/yocyWr-wSJY" allowfullscreen></iframe>
            </div>
          </div>

        <div class="col-md-8">
          <h4>ABOUT MEDICAID</h4>
           <p> Your medical website is the virtual office of your clinic, a digital image of your practice. Make it well-structured and
             appealing and it will bring you more patients and revenue. That's what the best medical websites do and that's why medical
             website design is key. When you hire Healthcare Success to create your custom website, your team of experts will include a
             strategist, project leader, designer, programmer, writer(s) and a search engine optimization specialist. </p>
           <div class="text-center mt-2">
             <button class="btn btn-danger" type="button" onclick="window.location ='index.php'"></i>See More</a>
             </button>
           </div>
        </div>

        </div>

      </div>
    </div>

  </body>
</html>
