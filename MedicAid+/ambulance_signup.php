<?php
include 'connection.php';

if(isset($_POST['signup'])){

// $dbfname = mysqli_real_escape_string($conn, $_POST['fullname']);
// $dbcontact = mysqli_real_escape_string($conn, $_POST['contact']);
// $dbdivision = mysqli_real_escape_string($conn, $_POST['division']);
// $dbaddress = mysqli_real_escape_string($conn, $_POST['vehicle_no']);
// $dbpassword = mysqli_real_escape_string($conn, $_POST['password']);
//
// $sql = "SELECT contact_number FROM ambulance";
// $result = mysqli_query($conn,$sql);
//
// if (mysqli_num_rows($result) > 0) {
// // output data of each row
// while($row = mysqli_fetch_assoc($result)) {
// $dbbcontact= $row["contact_number"];
// // Check if the username they entered was correct
//   if($dbbcontact == $dbcontact)
//   {
//     echo "<script>
//   alert('Same Contact Number Exist! Try Another Contact Number!');
//   window.location.href='ambulance_signup.php';
//   </script>";
//     exit();
//
//   }
//
//
//
//
// }
// }
//  $sql="INSERT INTO ambulance(owner_name, contact_number, division, ambulance_number, password,status)
// VALUES ('$dbfname','$dbcontact','$dbdivision','$dbaddress','$dbpassword','Active')";
// mysqli_query($conn, $sql);
//
// $sql = "SELECT ambulance_id
// FROM ambulance
// WHERE contact_number='$dbcontact'";
// $result = mysqli_query($conn,$sql);
// $row = mysqli_fetch_assoc($result);
// $dbid= $row["ambulance_id"];
header("Location: ambulance_profile.php?id=$dbid");

}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <title>Register Ambulance</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!--script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script-->
   </head>
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
   <link rel="stylesheet" href="CSS/signup.css">
   <body>
     <header>
       <?php include 'header.php';?>

                 </header>

     <div class="card bg-dark text-white">
         <img class="card-img" src="Image/ambulancesigncover.jpg" alt="Card image">
       <div class="card-img-overlay">
     <article class="card-body mx-auto" style="max-width: 450px;">
       <br><br>


<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;">
  <div class="container-fluid">
    <h2 class="text-center text-dark text-capitalize pt-4">Ambulance Registration</h2>
      <hr class="w-100">
	<form action="ambulance_signup.php" id="signform" method="POST">
	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="fullname" class="form-control" placeholder="Owner name" type="text" required="">
    </div>
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-phone">  </i> </span>
		</div>
    	<input name="contact" class="form-control" placeholder="Phone number" type="text"  required="">
    </div>
  <div class="form-group input-group">
    <div class="input-group-prepend">
      <span class="input-group-text">  <i class="fa fa-map-marker"></i> </span>
  </div>
  <select name="division" class="form-control"  required="" >
    <option value="" disabled selected>Select Division</option>
    <option>Barishal</option>
    <option>Chittagong</option>
    <option>Dhaka</option>ss
    <option>Mymensingh</option>
    <option>Khulna</option>
    <option>Rajshahi</option>
    <option>Rangpur</option>
    <option>Sylhet</option>

  </select>
</div>
  <div class="form-group input-group">
    <div class="input-group-prepend">
      <span class="input-group-text"> <i class="fa fa-id-card"></i> </span>
  </div>
      <input name="vehicle_no" class="form-control" placeholder="Vehicle Number" type="text" required="">
  </div>
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input name="password"class="form-control" placeholder="Create password" type="password" required=" ">
    </div>

    <div class="form-group">
        <button type="submit" name="signup" form="signform" class="btn btn-primary btn-block"> Register Now  </button>
    </div>
    <p class="text-center text-primary">Have an account? <a href="">Log In</a> </p>
</form>
</article>
</div>

</div>



</article>
</nav>
</turna>
</body>
</html>
