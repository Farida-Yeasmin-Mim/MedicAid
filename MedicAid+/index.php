<?php
include 'connection.php';
if (isset($_POST['search'])) {
$dbsearch = strip_tags($_POST['srch']);
if($dbsearch == NULL)
{
  echo "<script>
alert('Invalid Search!');
window.location.href='index.php';
</script>";
}
$sql = "SELECT page_name FROM page WHERE page_name LIKE '%$dbsearch%'";
$result = mysqli_query($conn,$sql);

if($result == NULL)
{
  echo "<script>
alert('Invalid Search!');
window.location.href='index.php';
</script>";
}
else
{
  $row = mysqli_fetch_assoc($result);
  $page = $row["page_name"];
  header("Location: $page");
}


if (isset($_POST['feedback'])) {
  header("Location: donor_login.php");


}


}
?>
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
          <img src="Image/bb.jpg" alt="Los Angeles" width="1100" height="500">
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
          <img src="Image/volunteer11.jpg" alt="New York" width="1100" height="500">
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
      <div class="blog">
        <div class="container">
          <div class="row mb-5">

            <div class="col-md-4 col-lg-4 col-sm-12">
              <div class="card">
                <div class="card-img">
                  <img src="Image/bloodIndex.jpg" class="img-fluid">
                </div>
                <div class="card-body">
                  <h4 class="card-title">Donation</h4>
                  <p class="card-text">
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                  </p>
                </div>
                <div class="card-footer">
                  <a href="" class="card-link">Read more</a>
                </div>
              </div>
            </div>

            <div class="col-md-4 col-lg-4 col-sm-12">
              <div class="card">
                <div class="card-img">
                  <img src="Image/ambulanceIndex.jpg" class="img-fluid">
                </div>
                <div class="card-body">
                  <h4 class="card-title">Ambulance</h4>
                  <p class="card-text">
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                  </p>
                </div>
                <div class="card-footer">
                  <a href="" class="card-link">Read more</a>
                </div>
              </div>
            </div>

            <div class="col-md-4 col-lg-4 col-sm-12">
              <div class="card">
                <div class="card-img">
                  <img src="Image/volunteerIndex.jpg" class="img-fluid">
                </div>
                <div class="card-body">
                  <h4 class="card-title">Volunteer</h4>
                  <p class="card-text">
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                  </p>
                </div>
                <div class="card-footer">
                  <a href="" class="card-link">Read more</a>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

    </section>

    <!--Main layout-->
    <main class="mt-5">
    <div class="container">


            <!--Section: Best Features-->

            <section>
              <div class="container-fluid">
                <h1 class="text-center font-weight-bold text-dark text-capitalize pt-5">About MedicAid+</h1>
                <hr class="w-25 pt-5">
                <div class="row mb-5">
                  <div class="col-lg-6 col-md-6 col-12">
                    <img src="Image/plasmaIndex1.jpg" class="img-fluid">
                </div>

                <div class="col-lg-6 col-md-6 col-12">

                  <h1 class="text-dark">MedicAid+</h1>
                    <p class="text-dark">Thousands of people just like you provide compassionate care to those in need. We roll up our sleeves and donate time, money and blood. We teach life-saving skills so our communities can be better prepared when the need arises and we do this every day because Medicare is needed each and every day.</p>

                    <button class="btn bg-primary text-white">More</button>
              </div>
              </div>
            </section>


            <section>
              <div class="container-fluid">

                <hr class="w-100 ">
              <div class="blog">
                <div class="container">
                  <div class="row mb-5">

                    <div class="col-md-12 col-lg-12 col-sm-12">
                      <div class="card">
                        <div class="card-img">
                          <img src="Image/donationindex.jpg" class="img-fluid">
                        </div>
                        <div class="card-body">
                          <h4 class="card-title">Donations</h4>
                          <p class="card-text">
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                          </p>
                        </div>
                        <div class="card-footer">
                          <div class="text-center">
                          <button class="btn bg-danger text-white text-left">Get More Information!</button>
                          </div>
                        </div>
                      </div>
                    </div>


                    <div class="col-md-6 col-lg-6 col-sm-12">
                      <br>
                      <div class="card">
                        <div class="card-img">
                          <img src="http://www.crmsoftwareapp.com/blog/blog-image/lumin-header.png" class="img-fluid">
                        </div>
                        <div class="card-body">
                          <h4 class="card-title">Appointment</h4>
                          <p class="card-text">
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                          </p>
                        </div>
                        <div class="card-footer">
                          <div class="text-right">
                          <button class="btn bg-info text-white text-left">Get Appointment</button>
                          </div>
                        </div>
                      </div>
                    </div>



                    <div class="col-md-6 col-lg-6 col-sm-12">
                      <br>
                      <div class="card">
                        <div class="card-img">
                          <img src="Image/feedbackindex.jpg" class="img-fluid">
                        </div>
                        <div class="card-body">
                          <h4 class="card-title">Feedback</h4>
                          <p class="card-text">
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                          </p>
                        </div>
                        <div class="card-footer">
                          <div class="text-right">
                          <button class="btn bg-warning text-white text-left">Send Feedback</button>
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>


            </section>




            <!--Section: Best Features-->
            <section id="best-features" class="text-center" >
              <br>

                <!-- Heading -->
                <h1 class="mb-6 font-weight-bold">The MedicAid+ Mission At Work</h1>

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








      <!--  <section>

<div class="contact-form">
 <div class="container">
  <form action="index.php" method="POST">
   <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-12">
      <h1>Get in Touch</h1>
    </div>
    <div class="col-lg-8 col-md-8 col-sm-12 right">
       <div class="form-group">
         <input type="text" class="form-control form-control-lg" placeholder="Your Name" name="">
       </div>
       <div class="form-group">
         <input type="email" class="form-control form-control-lg" placeholder="YourEmail@email.com" name="email">
       </div>
       <div class="form-group">
         <textarea name="message" class="form-control form-control-lg" placeholder="Message" >

         </textarea>
       </div>
       <button type="submit" name="feedback" class="btn btn-primary btn-block"> Create Account  </button>

    </div>
   </div>
  </form>
 </div>
</div>
</section> -->


<footer>
    <?php include 'footer2.php';?>
</footer>



  </body>
</html>
