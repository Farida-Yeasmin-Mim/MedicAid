<?php

require_once "config.php";
$loginURL = $gClient->createAuthUrl();
include 'connection.php';

if(isset($_POST['signup'])){

$dbfname = mysqli_real_escape_string($conn, $_POST['fname']);
$dblname = mysqli_real_escape_string($conn, $_POST['lname']);
$dbemail = mysqli_real_escape_string($conn, $_POST['email']);
$dbpassword = mysqli_real_escape_string($conn, $_POST['password']);

$sql = "SELECT email FROM user";
$result = mysqli_query($conn,$sql);

if (mysqli_num_rows($result) > 0) {
// output data of each row
while($row = mysqli_fetch_assoc($result)) {
$dbbemail= $row["email"];

// Check if the username they entered was correct
if ($dbbemail == $dbemail) {
  echo "<script>
alert('Same User Name Exist! Try Another User Name!');
window.location.href='user_signup.php';
</script>";
  exit();

  }




}
}
 $sql="INSERT INTO user(first_name, last_name, email, password)
VALUES ('$dbfname','$dblname','$dbemail','$dbpassword')";
mysqli_query($conn, $sql);

$sql = "SELECT user_id
FROM user
WHERE email='$dbemail'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
$dbid= $row["user_id"];
header("Location: user_profile.php?id=$dbid");

}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <title>Signup || User</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!--script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script-->
   </head>
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="CSS/signup.css">
   <body>
     <header>
       <?php include 'header.php';?>
       </header>
     <div class="card bg-dark text-white">
         <img class="card-img" src="Image/up_bg.jpg" alt="Card image">
       <div class="card-img-overlay">
     <article class="card-body mx-auto" style="max-width: 450px;">


<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;">
  <div class="container-fluid">
    <h2 class="text-center text-dark text-capitalize pt-4">Sign Up</h2>
	<p class="text-center text-dark">Get started with your free account</p>
	<p>
    <div class="text-center">
	<button type="button" onclick="window.location = '<?php echo $loginURL ?>';" class="btn btn-danger"><i class="fa fa-google"></i> Login With Google</button>
</div>
	</p>
	<p class="divider-text text-dark">
        <span class="bg-light">OR</span>
    </p>
	<form action="user_signup.php" id="signform" method="POST">
	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="fname" class="form-control" placeholder="First name" type="text" required="">
    </div>
    <div class="form-group input-group">
  		<div class="input-group-prepend">
  		    <span class="input-group-text"> <i class="fa fa-user-o"></i> </span>
  		 </div>
          <input name="lname" class="form-control" placeholder="Last name" type="text" required="">
      </div>
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		 </div>
        <input name="email" class="form-control" placeholder="Email address" type="email" required="">
    </div>


    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input name="password"class="form-control" placeholder="Create password" type="password" required=" ">
    </div>

    <div class="form-group">
        <button type="submit" name="signup" form="signform" class="btn btn-primary btn-block"> Create Account  </button>
    </div>
    <p class="text-center text-primary"><a href="user_login.php">Have an account? Log In</a> </p>
</form>
</article>
</div>

</div>



</article>
</nav>
</turna>
</body>
</html>
