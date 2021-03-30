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
      <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <a class="navbar-brand" href="#">
      <img src="Image/Main Logo.jpg" alt="Logo" style="width:153px"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" style="font-size:23px; font-weight:bold" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" style="font-size:23px; font-weight:bold" href="#">Volunteer</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" style="font-size:23px; font-weight:bold" href="#">About Us</a>
        </li>
        <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" style="font-size:23px; font-weight:bold" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>

      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
    </header>
    <div id="demo" class="carousel slide" data-ride="carousel">
      <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
      </ul>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="Image/Blood222.jpg" alt="Los Angeles" width="1100" height="500">
          <div class="carousel-caption">
            <h1 class="text-white display-6 font-weight-bold">Blood Donation</h1>
            <p class="text-body font-weight-bold">Anybody can give blood!</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="Image/Plasma11.jpg" alt="Chicago" width="1100" height="500">
          <div class="carousel-caption">
            <h1 class="text-white display-6 font-weight-bold">Plasma Donation</h1>
            <p>Thank you, Chicago!</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="Image/Volunteer1.jpg" alt="New York" width="1100" height="500">
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
    <section>
      <div class="container_fluid">
        <h1 class="text-center text-dark text-capitalize pt-5">About Us</h1>
        <hr class="w-25">
    </section>
  </body>
</html>
