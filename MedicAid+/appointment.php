<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Appointment</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="CSS/appointment.css">
  </head>
<body>

    <header>
      <?php include 'header.php';?>
    </header>


    <section class="ftco-counter img ftco-section ftco-no-pt ftco-no-pb">
    	<div class="container">
    		<div class="row d-flex">
    			<div class="col-md-7 col-lg-5 d-flex">
            <div class="view overlay z-depth-1-half">
                <img src="https://www.pngitem.com/pimgs/m/515-5158817_telemedicine-doctor-hd-png-download.png" class="img-fluid" alt="">
                <div class="mask rgba-white-slight"></div>
            </div>
    			</div>
    			<div class="col-md-6 col-lg-7">
    				<div class="py-md-5"
	    				<div class="row justify-content-start pb-3">
			          <div class="col-md-15 heading-section ftco-animate p-4 p-lg-5">
			            <h2 class="mb-4">We Are <span>MedicAid</span> A Medical Clinic</h1>
			            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
			            <p><a href="appointment.php" class="btn btn-primary py-3 px-4">Make an appointment</a> <a href="feedback.php" class="btn btn-danger py-3 px-4">Contact us</a></p>
			          </div>
			        </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>



    <section class="ftco-section ftco-no-pt ftco-no-pb ftco-services-2 bg-light">
			<div class="container">
        <div class="row d-flex">
	        <div class="col-md-7 py-5">
	        	<div class="py-lg-5">

		        	<div class="row justify-content-center pb-5">
			          <div class="col-md-5 heading-section ftco-animate">
			            <h2 class="mb-4"><strong>Our Services</strong></h2>
			          </div>
			        </div>

			        <div class="row">
			        	<div class="col-md-6 d-flex align-self-stretch ftco-animate">
			            <div class="media block-6 services d-flex">
                   <i class="fa fa-ambulance fa-3x" style="color:orange"></i>
                    <div class="media-body pl-md-4">
			                <h3 class="heading mb-3">Emergency Services</h3>
			                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
			              </div>
			            </div>
			          </div>

			          <div class="col-md-6 d-flex align-self-stretch ftco-animate">
			            <div class="media block-6 services d-flex">
                    <i class="fa fa-user-md fa-3x" style="color:orange"></i>
                    <div class="media-body pl-md-4">
			                <h3 class="heading mb-3">Qualified Doctors</h3>
			                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
			              </div>
			            </div>
			          </div>

			          <div class="col-md-6 d-flex align-self-stretch ftco-animate">
			            <div class="media block-6 services d-flex">
                    <i class="fa fa-stethoscope fa-3x" style="color:orange"></i>
			              <div class="media-body pl-md-4">
			                <h3 class="heading mb-3">Outdoors Checkup</h3>
			                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
			              </div>
			            </div>
			          </div>

			          <div class="col-md-6 d-flex align-self-stretch ftco-animate">
			            <div class="media block-6 services d-flex">
			              <i class="fa fa-history fa-3x" style="color:orange"></i>
			              <div class="media-body pl-md-4">
			                <h3 class="heading mb-3">24 Hours Service</h3>
			                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
			              </div>
			            </div>
			          </div>

			        </div>
			      </div>
		      </div>

		      <div class="col-md-5 d-flex">
	        	<div class="appointment-wrap bg-info p-5 d-flex align-items-center">
		        	<form action="#" class="appointment-form ftco-animate">
		        		<h3>Free Consultation</h3>
		    				<div class="">
			    				<div class="form-group">
			    					<input type="text" class="form-control" placeholder="First Name">
			    				</div>
			    				<div class="form-group">
			    					<input type="text" class="form-control" placeholder="Last Name">
			    				</div>
		    				</div>
		    				<div class="">
		    					<div class="form-group">
			    					<div class="form-field">
	          					<div class="select-wrap">
	                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
	                      <select name="" id="" class="form-control">
	                      	<option value="">Select Your Services</option>
	                        <option value="">Neurology</option>
	                        <option value="">Cardiology</option>
	                        <option value="">Dental</option>
	                        <option value="">Ophthalmology</option>
	                        <option value="">Other Services</option>
	                      </select>
	                    </div>
			              </div>
			    				</div>
		    					<div class="form-group">
			    					<input type="text" class="form-control" placeholder="Phone">
			    				</div>
		    				</div>

		    				<div class="">
			    				<div class="form-group">
			    					<div class="input-wrap">
			            		<input type="text" class="form-control appointment_date" placeholder="Date">
		            		</div>
			    				</div>
			    				<div class="form-group">
			    					<div class="input-wrap">
			            		<input type="text" class="form-control appointment_time" placeholder="Time">
		            		</div>
			    				</div>
		    				</div>

		    				<div class="">
		    					<div class="form-group">
			              <textarea name="" id="" cols="30" rows="4" class="form-control" placeholder="Message"></textarea>
			            </div>
			            <div class="form-group">
			              <input type="submit" value="My Appointment" class="btn btn-danger py-3 px-4">
			            </div>
		    				</div>
		    			</form>
		    		</div>
	        </div>
		    </div>
			</div>
		</section>




    <section class="ftco-section bg-secondary">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-10 col-lg-9 pl-lg-5 py-md-5">
          <div class="col-md-10 heading-section text-center ftco-animate text-white">
            <h2 class="mb-4"><strong>Gets Every Single Updates Here</strong></h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          </div>
          </div>
        </div>

        <div class="row d-flex">

          <div class="col-md-4 ftco-animate">
            <div class="blog-entry">
              <div class="view overlay z-depth-1-half">
                  <img src="https://mb.com.ph/wp-content/uploads/2020/07/07072020_EU-DONATES-BLOOD_02_BALMORES-scaled.jpg" class="img-fluid" alt="">
                  <div class="mask rgba-white-slight"></div>
              </div>
              <div class="text d-block text-center bg-light">
              	<div class="meta mb-3 ">
                  <div><a href="#">November 1, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div>
                    <a href="review.php"><span class="fa fa-comment"></span> 3</a>
                  </div>
                </div>
                <h3 class="heading"><a href="#">Lifesaving Blood</a></h3>
                <p>Learn about our blood donation processes, requirements, hosting opportunities and more..</p>
                <p><a href="blog-single.html" class="btn btn-danger py-2 px-3">Read more</a></p>
              </div>
            </div>
        	</div>

        	<div class="col-md-4 ftco-animate">
            <div class="blog-entry">
              <div class="view overlay z-depth-1-half">
                  <img src="https://www.asianhospital.com/assets/images/gallery/6uPT5FbECz_20200114075536.jpg" class="img-fluid" alt="">
                  <div class="mask rgba-white-slight"></div>
              </div>
              <div class="text d-block text-center bg-light">
              	<div class="meta mb-3">
                  <div><a href="#">August 21, 2019</a></div>
                  <div><a href="#">Admin</a></div>
                  <div>
                    <a href="https://www.facebook.com/yeasminmim"><span class="fa fa-comment"></span> 3</a>
                  </div>
                </div>
                <h3 class="heading"><a href="#">International Services</a></h3>
                <p>Learn how we deliver aid and support programs around the world.</p>
                <p><a href="blog-single.html" class="btn btn-danger py-2 px-3">Read more</a></p>
              </div>
            </div>
        	</div>

        	<div class="col-md-4 ftco-animate">
            <div class="blog-entry">
              <div class="view overlay z-depth-1-half">
                  <img src="https://exclusive.multibriefs.com/images/exclusive/0428nurse2.jpg" class="img-fluid" alt="">
                  <div class="mask rgba-white-slight"></div>
              </div>
              <div class="text d-block text-center bg-light">
              	<div class="meta mb-3">
                  <div><a href="#">June 3, 2021</a></div>
                  <div><a href="#">Admin</a></div>
                  <div>
                    <a href="https://www.facebook.com/yeasminmim"><span class="fa fa-comment"></span> 3</a>
                  </div>
                </div>
                <h3 class="heading"><a href="#">Nursing & Health</a></h3>
                <p>Learn how nurses and other health professionals are vital to the work of the MedicAid</p>
                <p><a href="blog-single.html" class="btn btn-danger py-2 px-3">Read more</a></p>
              </div>
            </div>
        	</div>

        </div>
      </div>
    </section>

<hr class="my-2">
    <Footer>
      <?php include 'footer2.php';?>
    </Footer>


  </body>
</html>
