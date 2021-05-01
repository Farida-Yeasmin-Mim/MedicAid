<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>MedicAid+</title>
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
          <a class="nav-link" style="font-size:23px; font-weight:bold" href="#">Donation</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" style="font-size:23px; font-weight:bold" href="#">Ambulance</a>
        </li>

        <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" style="font-size:23px; font-weight:bold" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Volunteer
        </a>

        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="signup.html">Sign In</a>
          <a class="dropdown-item" href="donating_requirements.php">Volunteer Feedback</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="contactus.html">Covid-19 Information</a>

        </div>
      </li>


        <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" style="font-size:23px; font-weight:bold" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          More
        </a>

        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="signup.html">Login</a>
          <a class="dropdown-item" href="signup.html">Sign Up</a>
          <a class="dropdown-item" href="donating_requirements.php">Donating Criteria</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="contactus.html">Feedback</a>
          <a class="dropdown-item" href="contactus.html">Contact Us</a>
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
          <img src="Image/blood11.jpg" alt="Los Angeles" width="1100" height="500">
          <div class="carousel-caption">
            <h1 class="text-white display-6 font-weight-bold">Blood Donation</h1>
            <p class="text-white font-weight-bold">Anybody can give blood!</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="Image/Plasma2.jpg" alt="Chicago" width="1100" height="500">
          <div class="carousel-caption">
            <h1 class="text-white display-6 font-weight-bold">Plasma Donation</h1>
            <p class="text-white font-weight-bold">Thank you, Chicago!</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="Image/vn1.jpg" alt="New York" width="1100" height="500">
          <div class="carousel-caption">
            <h1 class="text-white display-6 font-weight-bold">Volunteer</h1>
            <p class="text-white font-weight-bold">We love the Big Apple!</p>
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
      <div class="container-fluid">
        <h1 class="text-center text-dark text-capitalize pt-5">About Us</h1>
        <hr class="w-25 pt-5">
        <div class="row mb-5">
          <div class="col-lg-6 col-md-6 col-12">
            <img src="Image/bloodn.jpg" class="img-fluid">
        </div>

        <div class="col-lg-6 col-md-6 col-12">

          <h1 class="text-dark">MedicAid+</h1>
            <p class="text-dark">Thousands of people just like you provide compassionate care to those in need. We roll up our sleeves and donate time, money and blood. We teach life-saving skills so our communities can be better prepared when the need arises and we do this every day because Medicare is needed each and every day.</p>

            <button class="btn bg-primary text-white">More</button>
      </div>
      </div>
    </section>




    <!--Main layout-->
    <main class="mt-5">
    <div class="container">

            <!--Section: Best Features-->
            <section id="best-features" class="text-center">

                <!-- Heading -->
                <h1 class="mb-6 font-weight-bold">The MedicAid Mission At Work</h1>

                <!--Grid row-->
                <div class="row d-flex justify-content-center mb-4">
                    <!--Grid column-->
                    <div class="col-md-8">

                        <!-- Description -->
                        <p style="color:grey">Read the Latest News about How We Help People Across the Country and Around the World.</p>
                    </div>
                    <!--Grid column-->
                </div>
                <!--Grid row-->



                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-3 mb-2">
                        <i class="fa fa-user-md fa-5x "></i>
                        <h4 class="my-4 font-weight-bold">Experience</h4>
                        <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit
                            maiores nam,
                            aperiam minima
                            assumenda deleniti hic.</p>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-3 mb-1">
                        <i class="fa fa-tint fa-5x "></i>
                        <h4 class="my-4 font-weight-bold">Happiness</h4>
                        <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit
                            maiores nam,
                            aperiam minima
                            assumenda deleniti hic.</p>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-3 mb-1">
                        <i class="fa fa-medkit fa-5x"></i>
                        <h4 class="my-4 font-weight-bold">Happiness</h4>
                        <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit
                            maiores nam,
                            aperiam minima
                            assumenda deleniti hic.</p>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-3 mb-1">
                        <i class="fa fa-fire fa-5x "></i>
                        <h4 class="my-4 font-weight-bold">Adventure</h4>
                        <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit
                            maiores nam,
                            aperiam minima
                            assumenda deleniti hic.</p>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

            </section>
            <!--Section: Best Features-->










  </body>
</html>
