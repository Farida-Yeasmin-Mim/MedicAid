<?php
include 'connection.php';

if(isset($_POST['signup'])){

$dbfname = mysqli_real_escape_string($conn, $_POST['name']);
$dbemail = mysqli_real_escape_string($conn, $_POST['email']);
$dbcontact = mysqli_real_escape_string($conn, $_POST['contact']);
$dbgender = mysqli_real_escape_string($conn, $_POST['gender']);
$dbdivision = mysqli_real_escape_string($conn, $_POST['division']);
$dbpassword = mysqli_real_escape_string($conn, $_POST['password']);

$sql = "SELECT contact_number FROM volunteer";
$result = mysqli_query($conn,$sql);

if (mysqli_num_rows($result) > 0) {
// output data of each row
while($row = mysqli_fetch_assoc($result)) {
$dbbcontact= $row["contact_number"];
// Check if the username they entered was correct
  if($dbbcontact == $dbcontact)
  {
    echo "<script>
  alert('Same Contact Number Exist! Try Another Contact Number!');
  window.location.href='volunteer_signup.php';
  </script>";
    exit();

  }

}
}
 $sql="INSERT INTO volunteer(name, email, contact_number, gender,division, password)
VALUES ('$dbfname','$dbemail','$dbcontact','$dbgender','$dbdivision',$dbpassword')";
mysqli_query($conn, $sql);

$sql = "SELECT volunteer_id
FROM volunteer
WHERE contact_number='$dbcontact'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
$dbid= $row["volunteer_id"];
header("Location: volunteer_profile.php?id=$dbid");

}



?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Volunteer SignUp</title>
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
    <img class="card-img" src="Image/mmee.jpg" alt="Card image">
  <div class="card-img-overlay">
<article class="card-body mx-auto" style="max-width: 550px;">


    <h2 class="card-title text-left text-white ">Welcome to Volunteer Connection!</h2>
<h3 class="card-title mt-3 text-center text-white ">Create a MedicAid ID</h3>
<p class="text-center text-white">The first step to creating a Volunteer Connection account is to create your MedicAid ID. Please complete the form below.
</p>
    <p class="divider-text">
        <span class=""></span>
    </p>


	<form action="volunteer_signup.php" id="signform" method="POST">
    <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
         </div>
        <input name="name" class="form-control" placeholder="Full name" type="text" required="">
    </div>

    <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
         </div>
        <input name="email" class="form-control" placeholder="Email address" type="email" required="">
    </div>

    <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-phone">  </i> </span>
        </div>
        <input name="contact" class="form-control" placeholder="Phone number" type="text"  required="">
    </div>

   <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-genderless"> </i> </span>
        </div>
        <select name="gender" class="form-control" required="">
            <option selected=""> Select Gender</option>
            <option> Male</option>
            <option> Female</option>
            <option> Other</option>
        </select>
    </div>




    <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text">  <i class="fa fa-flag"></i> </span>
        </div>
        <select name="division" class="form-control" required="">
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
            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
        </div>
        <input name="password" class="form-control" placeholder="Create password" type="password" required=" ">
    </div>

    <div class="form-group">
        <button type="submit" name="signup" form="signform" class="btn btn-primary btn-block">CREATE MY MEDICAID ID</button>
    </div>
    <h5><p class="text-center danger-text "><a href="under_13.php" >Under age 13? </a></p></h5>
    <h5><p class="text-center text-white ">Already Have an account? <a href="volunteer_login.php" >Log In</a> </p></h5>
</form>

</article>

</nav>
</body>
</html>
