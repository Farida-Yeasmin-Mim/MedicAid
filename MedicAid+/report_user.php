<?php

  // Create database connection
  include 'connection.php';

  $dbid =  $_GET['id'];

  if (isset($_POST['search'])) {
    $dbsearch = strip_tags($_POST['srch']);
    $sql = "SELECT * FROM donor WHERE full_name LIKE '%$dbsearch%'";
  }
    else
    {
      $sql = "SELECT * FROM donor";
    }

    if (isset($_POST['block'])) {
      $dbp = $_GET['p'];
      $dbid =  $_GET['id'];
      $sql = "DELETE FROM donor
      WHERE donor_id = $dbp";
      mysqli_query($conn, $sql);
      header("location:report_user.php?id=$dbid");
    }

$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
<title>Admin | User</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



<link rel="stylesheet" href="CSS/blood_donor_information.css">


<!-- Bootstrap Grid System-->
<link rel="stylesheet" href="CSS/bootstrap-grid.css">


<style>
body {
background-image: url('Image/blood_donor_information_bg.jpg');
background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;
}
</style>
</head>
<body>
  <header>
    <?php include 'header2.php';?>

              </header>
              <br>
              <button class="btn bg-primary text-white" onclick="window.location ='admin_profile.php?id=<?php echo $dbid ?>'">Back To Profile</button>

                <div class="container-fluid">
                  <h1 class="text-center text-dark text-capitalize pt-5">Donor Information</h1>
                  <hr class="w-25 pt-5">
              <form class="example" method="POST" action="blood_donor_information.php">
  <input name="srch" type="text" placeholder="Search By Name.." name="search">
  <button name="search" type="submit"><i class="fa fa-search"></i></button>
</form>

<div id="content">
  <?php
    while ($row = mysqli_fetch_array($result)) {
      echo "<div id='img_div'>";
        echo "<h6>Name: ".$row['full_name']." </h6>";
        echo "<h6>Email: ".$row['email']." </h6>";
        echo "<h6>Contact No: ".$row['contact_number']." </h6>";
        echo "<h6>Gender: ".$row['gender']." </h6>";
        echo "<h6>Age: ".$row['age']." </h6>";
        echo "<h6>Blood Group: ".$row['blood_group']." </h6>";
        echo "<h6>Division: ".$row['division']." </h6>";
        echo "<h6>Address: ".$row['address']." </h6>";
        echo "<form method='POST' action='report_user.php?id=$dbid&p=".$row['donor_id']."' >";
        echo "<button type='submit' class='btn btn-danger btn-block' name='block'>Block This User</button>";
        echo "</form>";


      echo "</div>";
    }

  ?>


</div>
</body>
</html>
