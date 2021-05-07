<!<?php
include 'connection.php';
$dbid =  $_GET['id'];
if($dbid==NULL)
{
  echo "<script>
alert('Please Login First!');
window.location.href='admin_login.php';
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
    <title>Admin Profile</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="CSS/user_profile.css">

<style>
body {
background-image: url('Image/up_bg.jpg');
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
                <div class="container-fluid">
                  <h1 class="text-center text-dark text-capitalize pt-5">Welcome <?php echo $dbname ?>!</h1>
                  <hr class="w-25 pt-5">

            <div class="container profile-page">
                <div class="row">
                    <div class="col-xl-6 col-lg-7 col-md-12">
                        <div class="card profile-header">
                            <div class="body">
                                <div class="row">
                                  <div class="col-lg-4 col-md-4 col-12">
                                      <div class="profile-image float-md-right"> <img src="Image/up_blood.jpg" alt=""> </div>
                                  </div>
                                    <div class="col-lg-8 col-md-8 col-12">
                                        <h4 ><strong>Blood</strong></h4>

                                        <p>Searching for blood?</p>
                                        <div>
                                            <button class="btn btn-danger btn-round">Get Blood Donor</button>

                                        </div>

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
                                        <div class="profile-image float-md-right"> <img src="Image/up_plasma.jpg" alt=""> </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-12">
                                        <h4><strong>Plasma</strong></h4>
                                        <p>Not getting plasma donor?</p>
                                        <div>
                                            <button class="btn btn-warning btn-round">Get Plasma Donor</button>


                                        </div>

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
                                        <div class="profile-image float-md-right"> <img src="Image/up_platelet.jpg" alt=""> </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-12">
                                        <h4 ><strong>Platelet</strong></h4>

                                        <p>Seeking for platelet donor?</p>
                                        <div>
                                            <button class="btn btn-info btn-round">Get Platelet Donor</button>

                                        </div>

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
                                        <div class="profile-image float-md-right"> <img src="Image/up_ambulance.jpg" alt=""> </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-12">
                                        <h4><strong>Ambulance</strong></h4>

                                        <p>Call your ambulance now!</p>
                                        <div>
                                            <button class="btn btn-primary btn-round">Get Ambulance </button>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            	</div>




            </div>

  </body>
</html>
