<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="CSS/index.css">
  </head>
  <body>
    <header>
      <?php include 'header.php';?>
    </header>
    <div id="demo" class="carousel slide" data-ride="carousel">
      <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
      </ul>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="Image/Blood22.jpg" alt="Los Angeles" width="1100" height="500">
          <div class="carousel-caption">
            <h1 class="text-white display-3 font-weight-bold">Blood Donation</h1>
            <p class="text-body font-weight-bold">Anybody can give blood!</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="Image/Plasma1.jpg" alt="Chicago" width="1100" height="500">
          <div class="carousel-caption">
            <h1 class="text-white display-3 font-weight-bold">Plasma Donation</h1>
            <p>Thank you, Chicago!</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="Image/Blood2.jpg" alt="New York" width="1100" height="500">
          <div class="carousel-caption">
            <h3>Platelets</h3>
            <p>We love the Big Apple!</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div>
  </body>
</html>
