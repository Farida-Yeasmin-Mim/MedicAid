<!<?php
include 'connection.php';
$dbid =  $_GET['id'];
if($dbid==NULL)
{
  echo "<script>
alert('Please Login First!');
window.location.href='user_login.php';
</script>";
}
$sql = "SELECT first_name
FROM user
WHERE user_id='$dbid'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
$dbname= $row["first_name"];
?>>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>MedicAid+</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="CSS/user_profile.css">
  </head>
  <body>

    <header>
      <?php include 'header.php';?>

                </header>
                <div class="container-fluid">
                  <h1 class="text-center text-dark text-capitalize pt-5">Welcome <?php echo $dbname ?>!</h1>
                  <hr class="w-25 pt-5">

            <div class="container profile-page">
                <div class="row">
                    <div class="col-xl-6 col-lg-7 col-md-12">
                        <div class="card profile-header">
                            <div class="body">
                                <div class="row">

                                    <div class="col-lg-8 col-md-8 col-12">
                                        <h4 class="m-t-0 m-b-0"><strong>Michael</strong> Deo</h4>
                                        <span class="job_post">Ui UX Designer</span>
                                        <p>795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>
                                        <div>
                                            <button class="btn btn-primary btn-round">Follow</button>
                                            <button class="btn btn-primary btn-round btn-simple">Message</button>
                                        </div>
                                        <p class="social-icon m-t-5 m-b-0">
                                            <a title="Twitter" href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
                                            <a title="Facebook" href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
                                            <a title="Google-plus" href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
                                            <a title="Behance" href="javascript:void(0);"><i class="fa fa-behance"></i></a>
                                            <a title="Instagram" href="javascript:void(0);"><i class="fa fa-instagram "></i></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-xl-6 col-lg-7 col-md-12">
                        <div class="card profile-header">
                            <div class="body">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-12">
                                        <div class="profile-image float-md-right"> <img src="Image/nnn.jpg" alt=""> </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-12">
                                        <h4 class="m-t-0 m-b-0"><strong>Michael</strong> Deo</h4>
                                        <span class="job_post">Ui UX Designer</span>
                                        <p>795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>
                                        <div>
                                            <button class="btn btn-primary btn-round">Follow</button>
                                            <button class="btn btn-primary btn-round btn-simple">Message</button>
                                        </div>
                                        <p class="social-icon m-t-5 m-b-0">
                                            <a title="Twitter" href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
                                            <a title="Facebook" href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
                                            <a title="Google-plus" href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
                                            <a title="Behance" href="javascript:void(0);"><i class="fa fa-behance"></i></a>
                                            <a title="Instagram" href="javascript:void(0);"><i class="fa fa-instagram "></i></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-6 col-lg-7 col-md-12">
                        <div class="card profile-header">
                            <div class="body">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-12">
                                        <div class="profile-image float-md-right"> <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt=""> </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-12">
                                        <h4 class="m-t-0 m-b-0"><strong>Michael</strong> Deo</h4>
                                        <span class="job_post">Ui UX Designer</span>
                                        <p>795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>
                                        <div>
                                            <button class="btn btn-primary btn-round">Follow</button>
                                            <button class="btn btn-primary btn-round btn-simple">Message</button>
                                        </div>
                                        <p class="social-icon m-t-5 m-b-0">
                                            <a title="Twitter" href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
                                            <a title="Facebook" href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
                                            <a title="Google-plus" href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
                                            <a title="Behance" href="javascript:void(0);"><i class="fa fa-behance"></i></a>
                                            <a title="Instagram" href="javascript:void(0);"><i class="fa fa-instagram "></i></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-xl-6 col-lg-7 col-md-12">
                        <div class="card profile-header">
                            <div class="body">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-12">
                                        <div class="profile-image float-md-right"> <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt=""> </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-12">
                                        <h4 class="m-t-0 m-b-0"><strong>Michael</strong> Deo</h4>
                                        <span class="job_post">Ui UX Designer</span>
                                        <p>795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>
                                        <div>
                                            <button class="btn btn-primary btn-round">Follow</button>
                                            <button class="btn btn-primary btn-round btn-simple">Message</button>
                                        </div>
                                        <p class="social-icon m-t-5 m-b-0">
                                            <a title="Twitter" href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
                                            <a title="Facebook" href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
                                            <a title="Google-plus" href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
                                            <a title="Behance" href="javascript:void(0);"><i class="fa fa-behance"></i></a>
                                            <a title="Instagram" href="javascript:void(0);"><i class="fa fa-instagram "></i></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            	</div>
            </div>

  </body>
</html>
