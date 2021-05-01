<?php
  // Create database connection
  include 'connection.php';



$result = mysqli_query($conn, "SELECT * FROM blood_donor");
?>

<!DOCTYPE html>
<html>
<head>
<title>Image Upload</title>
<link rel="stylesheet" href="CSS/blood_donor_information.css">

<!-- Bootstrap Grid System-->
<link rel="stylesheet" href="CSS/bootstrap-grid.css">


</style>
</head>
<body>
  <header>
    <?php include 'header.php';?>
    <style>
h1 {
  text-align: center;
}</style>
    <h1> Recipes </h1>
              </header>
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
      	echo "<p> </p>";


      echo "</div>";
    }

  ?>


</div>
</body>
</html>
