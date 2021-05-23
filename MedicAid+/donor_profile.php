<!<?php
include 'connection.php';
$dbid =  $_GET['id'];
$sql = "SELECT full_name,email,contact_number,gender,age,blood_group,division,address,blood_status,plasma_status
FROM donor
WHERE donor_id='$dbid'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
$dbname= $row["full_name"];
$dbemail= $row["email"];
$dbcontact= $row["contact_number"];
$dbgender= $row["gender"];
$dbage= $row["age"];
$dbbg= $row["blood_group"];
$dbdivision= $row["division"];
$dbaddress= $row["address"];
$dbbs= $row["blood_status"];
$dbps= $row["plasma_status"];

?>>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Profile</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

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

    <div class="container emp-profile">
            <form method="post">
                <div class="row">

                    <div class="col-md-6 mx-auto">
                        <div class="profile-head">
                          <br> <br>
                                    <h2>
                                        <?php echo $dbname ?>
                                    </h2>
                                    <h5>
                                        Blood Group: <?php echo $dbbg ?>
                                    </h5>
                                    <br>

                            <ul class="nav nav-tabs " id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Timeline</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                      <br><br>
                        <a class="btn btn-primary" href="edit_donor_profile.php?id=<?php echo $dbid ?>" role="button">Edit Profile</a>

                    </div>
                </div>
                <div class="row mb-5">

                    <div class=" col-md-6  mx-auto">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                              <br>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $dbname ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $dbemail ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Phone</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $dbcontact ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Gender</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $dbgender ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Age</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $dbage ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Blood Group</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $dbbg ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Division</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $dbdivision ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Address</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $dbaddress ?></p>
                                            </div>
                                        </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                              <br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Blood Donor Status</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $dbbs ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Plasma Donor Status</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $dbps ?></p>
                                            </div>
                                        </div>



                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <?php

        $sql = "SELECT plasma_status
        FROM donor
        WHERE donor_id='$dbid'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
        $plasma= $row["plasma_status"];
        if($plasma=='Active')
        {
            ?>
        <section>
          <div class="container">
          <div class="container-fluid">

            <div class="row mb-5">
              <div class="col-lg-6 col-md-6 col-12">
                <br>
                <br>

                <h1 class="text-dark">Are you a corona recovery patient?</h1>
                  <p class="text-dark">Donation is a practice when people donate to others to help them with their critical conditions. To ensure safety, these are some of the requirements donors must meet to be eligible.To see a list of eligibility information,search donating requirements. </p>

                  <button class="btn bg-primary text-white" onclick="window.location ='plasma_form.php?id=<?php echo $dbid ?>'">Register To Become A Plasma Donor</button>

            </div>
              <div class="col-lg-6 col-md-6 col-12">
                <img src="Image/plasmaindex.jpg" class="img-fluid">
            </div>


          </div>
          <hr>
        </section>
        <?php } ?>

  </body>
</html>
