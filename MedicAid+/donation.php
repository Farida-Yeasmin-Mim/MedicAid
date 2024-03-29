<?php
include 'connection.php';
if (isset($_GET['id'])){
   $dbid =  $_GET['id'];
}
else
{
  $dbid = 0;
}

if (isset($_POST['feedback'])) {
  // Set variables to represent data from database
  $dbUsname = strip_tags($_POST['fname']);
$dbEmail = strip_tags($_POST['email']);
$dbcontact = strip_tags($_POST['contact']);
$dbcause = strip_tags($_POST['cause']);
$sql = "INSERT INTO donation (name, email, contact, cause)
VALUES ('$dbUsname', '$dbEmail', '$dbcontact', '$dbcause');";
mysqli_query($conn, $sql);
echo "<script>
alert('Thank you For Your Response!');
window.location.href='donation.php';
</script>";
}
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Donation</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="CSS/index.css">
  </head>
  <body>


  <header>
      <?php include 'header.php';?>
  </header>

<section>
  <div id="demo" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
    </ul>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="Image/bg_1.jpg" alt="Los Angeles" width="1100" height="500">

        <div class="carousel-caption">
          <h1 class="text-white display-15 font-weight-bold">Lend the helping hand get involved</h1>
          <p class="text-white font-weight-bold">Help the poor in need</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="Image/footer5.jpg" alt="Chicago" width="1100" height="500">
        <div class="carousel-caption">
          <h1 class="text-white display-6 font-weight-bold">Blood and Plasma Donation</h1>
          <p class="text-white font-weight-bold">Help the people</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="Image/bg_2.jpg" alt="New York" width="1100" height="500">
        <div class="carousel-caption">
          <h1 class="text-white display-6 font-weight-bold">Discover Non-Profit Charity Platform</h1>
          <p class="text-white font-weight-bold">Raising Hope</p>
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

</section>


  	<section class="ftco-appointment ftco-section ftco-no-pt ftco-no-pb bg-light ">
  		<div class="overlay"></div>
  		<div class="container">
  			<div class="row">
  				<div class="col-md-5 order-md-last d-flex align-items-stretch">
  					<div class="donation-wrap">
<br>
<br>
<br>
  						<div class="align-items-center bg-danger p-3 p-lg-3">
  							<h4 class="text-white text-center"> Donation Campaign are running </h4>
  						</div>


              <form id="feed" class="p-2 grey-text " method="POST" action="donation.php<?php if($dbid!=0) echo "?id=$dbid" ?>">
  							<div class="row bg-secondary text-white">
  								<div class="col-md-12">
  									<div class="form-group">
  										<label for="name">Full Name</label>
  										<div class="input-wrap">
  											<div class="icon"><span class="fa fa-user"></span></div>
                          <input type="text" name="fname" id="form3" class="form-control form-control-sm" required="">
  										</div>
  									</div>
  								</div>
  								<div class="col-md-12">
  									<div class="form-group">
  										<label for="name">Email Address</label>
  										<div class="input-wrap">
  											<div class="icon"><span class="fa fa-paper-plane"></span></div>
                        <input type="email" name="email" id="form2" class="form-control form-control-sm" required="">
  										</div>
  									</div>
  								</div>
                  <div class="col-md-12">
  									<div class="form-group">
  										<label for="name">Contact Number</label>
  										<div class="input-wrap">
  											<div class="icon"><span class="fa fa-phone"></span></div>
                        <input type="contact" name="contact" id="form2" class="form-control form-control-sm" required="">
  										</div>
  									</div>
  								</div>
  								<div class="col-md-12">
  									<div class="form-group">
  										<label for="name">Donation Causes</label>
                      <div class="input-wrap">
  											<div class="icon"><span class="fa fa-pencil prefix"></span></div>
                        <textarea type="text" name="cause" id="form8" class="md-textarea form-control form-control-sm" rows="4" required=""></textarea>
  										</div>
  									</div>
  								</div>

  				
  								<div class="col-md-12">
  									<div class="form-group">
                          <button class="btn btn-danger" name="donation" form="feed">Send <i class="fa fa-paper-plane-o ml-1"></i></button>
                      </button>
  									</div>
  								</div>
  							</div>
  						</form>
  					</div>
  				</div>


  				<div class="col-md-7 wrap-about py-5">
  					<div class="heading-section pr-md-5 pt-md-5">
<br>

    					<strong><h1 class="mb-4 text-danger">We are here to help everyone in need</h1></strong>
<br>
              <p>The best way to not feel hopeless is to get up and do something. Don’t wait for good things to happen to you. If you go out and make some good things happen, you will fill the world with hope, you will fill yourself with hope. On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>
  					</div>
  					<div class="row my-md-5">
              	<p><a href="volunteer.php" class="btn btn-danger btn-outline-light">Become A Volunteer</a></p>
  					</div>
  				</div>
  			</div>
  		</div>
  	</section>

    <section class=" bg-light ">
      <div class="blog">
        <div class="container">
          <div class="row mb-5">

            <div class="col-md-4 col-lg-4 col-sm-12">
              <div class="card">
                <div class="card-img">
                  <img src="Image/services-2.jpg" class="img-fluid">
                </div>
                <div class="card-body bg-primary">
                  <h4 class="card-title text-white">Blood Donation</h4>
                  <p class="card-text text-white">
                    Blood is an essential flood that moves oxygen to other indispensable body parts.
                  </p>
                </div>
                <div class="card-footer bg-primary">
                  <p><a href="blood.php" class="btn btn-warning py-2 px-3">Read more</a></p>
                </div>
              </div>
            </div>

            <div class="col-md-4 col-lg-4 col-sm-12">
              <div class="card">
                <div class="card-img">
                  <img src="Image/services-3.jpg" class="img-fluid">
                </div>
                <div class="card-body bg-success">
                  <h4 class="card-title text-white">Start donating</h4>
                  <p class="card-text text-white">
                    Donate to save life  as much as you can. Save the one who need.
                  </p>
                </div>
                <div class="card-footer bg-success">
                <p><a href="donation_form.php" class="btn btn-warning py-2 px-3">Read more</a></p>
                </div>
              </div>
            </div>

            <div class="col-md-4 col-lg-4 col-sm-12">
              <div class="card">
                <div class="card-img">
                  <img src="Image/services-1.jpg" class="img-fluid">
                </div>
                <div class="card-body bg-info">
                  <h4 class="card-title text-white">Get involved</h4>
                  <p class="card-text text-white">
                    We need volunteers to help us with this life-saving mission.
                  </p>
                </div>
                <div class="card-footer bg-info ">
                  <p><a href="volunteer.php" class="btn btn-warning py-2 px-3">Read more</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>



  	<section class="ftco-section ftco-no-pb">
  		<div class="container">
  			<div class="row justify-content-center pb-5 mb-3">
  				<div class="col-md-7 heading-section text-center ftco-animate">
  					<span class="subheading">Our Causes</span>
  					<strong><h1 class="text-danger">Donate to charity causes around the world</h1></strong>
  				</div>
  			</div>

        <div class="row">

  				<div class="col-md-6 col-lg-3">
  					<div class="causes causes-2 text-center ftco-animate">
              <div class="card-img bg-light">
                <img src="Image/footer2.jpg" class="img-fluid">
              </div>
  						<div class="text p-3">
  							<h3 class="text-white"><a href="#">Save the poor people by donate blood</a></h3>
  							<p>  Donate to save life  as much as you can. Save the one who need.</p>

              	<div class="goal mb-4">
  								<p><strong class="text-danger">$5,800</strong> to go</p>
  								<div class="progress" style="height:20px">
  									<div class="progress-bar progress-bar-striped bg-success" style="width:50%; height:20px">50%</div>
  								</div>
  							</div>
  							<p><a href="donation_form.php" class="btn btn-primary">Donate Now</a></p>
  						</div>
  					</div>
  				</div>


  				<div class="col-md-6 col-lg-3">
  					<div class="causes causes-2 text-center ftco-animate">
              <div class="card-img bg-light">
                <img src="https://static.standard.co.uk/2021/04/28/15/urnpublicidap.org12158a1f4f314157a56ea296360f19e7.jpg?width=968&auto=webp&quality=75&crop=968%3A645%2Csmart" class="img-fluid">
              </div>
  						<div class="text p-3">
  							<h3 class="text-black"><a href="#">Save the poor covid-19 patients from death</a></h3>
  							<p> Donate to save life  as much as you can. Save the one who need.</p>
                <div class="goal mb-4">
  								<p><strong class="text-danger">$4,500</strong> to go</p>
  								<div class="progress" style="height:20px">
  									<div class="progress-bar progress-bar-striped bg-success" style="width:82%; height:20px">82%</div>
  								</div>
  							</div>
  							<p><a href="donation_form.php" class="btn btn-primary">Donate Now</a></p>
  						</div>
  					</div>
  				</div>

  				<div class="col-md-6 col-lg-3">
  					<div class="causes causes-2 text-center ftco-animate">
              <div class="card-img bg-light">
                <img src="Image/causes-3.jpg" class="img-fluid">
              </div>
  						<div class="text p-3">
  							<h3><a href="#">Save the people affected by natural disasters</a></h3>
  							<p>  Donate to save life  as much as you can. Save the one who need.</p>
                <div class="goal mb-4">
  								<p><strong class="text-danger">$3,800</strong> to go</p>
  								<div class="progress" style="height:20px">
  									<div class="progress-bar progress-bar-striped bg-success" style="width:95%; height:20px">95%</div>
  								</div>
  							</div>
  							<p><a href="donation_form.php" class="btn btn-primary">Donate Now</a></p>
  						</div>
  					</div>
  				</div>

  				<div class="col-md-6 col-lg-3">
  					<div class="causes causes-2 text-center ftco-animate">
              <div class="card-img bg-light">
                <img src="https://images.outlookindia.com/public/uploads/articles/2019/3/8/Global_Hunger_Index.jpg" class="img-fluid">
              </div>
  						<div class="text p-3">
  							<h3><a href="#">Save the poor children from hunger</a></h3>
  							<p>  Donate to save life  as much as you can. Save the one who need.</p>
                <div class="goal mb-4">
                  <p><strong class="text-danger">$4,000</strong> to go</p>
                  <div class="progress" style="height:20px">
                    <div class="progress-bar progress-bar-striped bg-success" style="width:75%; height:20px">75%</div>
                  </div>
                </div>
                <p><a href="donation_form.php" class="btn btn-primary">Donate Now</a></p>
  						</div>
  					</div>
  				</div>

  			</div>
  		</div>
  	</section>


    <section class="ftco-hireme bg-danger">
  		<div class="container">
  				<div class="col-lg-8 col-md-12 mx-auto text-center">
  					<h2 class="text-center font-weight-bold text-white pt-4 mt-4">90% of the MedicAid workforce are volunteers.</h2>
  				</div>
          <div class="col-lg-5 col-md-12 pl-lg-4 py-md-4 mx-auto text-center">
            <p class="mb-0"><a href="volunteer.php" class="btn btn-warning py-3 px-4">Become A Volunteer</a></p>
          </div>
  		</div>
  	</section>


    <footer>
        <?php include 'footer2.php';?>
    </footer>


  	</body>
  	</html>
