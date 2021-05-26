<?php
include 'connection.php';
if (isset($_POST['search'])) {
$dbsearch = strip_tags($_POST['srch']);
if($dbsearch == NULL)
{
  echo "<script>
alert('Invalid Search!');
window.location.href='index.php';
</script>";
}
$sql = "SELECT page_name FROM page WHERE page_name LIKE '%$dbsearch%'";
$result = mysqli_query($conn,$sql);

if($result == NULL)
{
  echo "<script>
alert('Invalid Search!');
window.location.href='index.php';
</script>";
}
else
{
  $row = mysqli_fetch_assoc($result);
  $page = $row["page_name"];
  header("Location: $page");
}


if (isset($_POST['feedback'])) {
  header("Location: donor_login.php");


}


}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Header</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="CSS/header.css">
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">
    <img src="Image/Main Logo.jpg" alt="Logo" style="width:153px"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">

    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" style="font-size:23px; font-weight:bold" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" style="font-size:23px; font-weight:bold" href="donation.php">Donation</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" style="font-size:23px; font-weight:bold" href="volunteer.php">Volunteer</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" style="font-size:23px; font-weight:bold" href="ambulance.php">Ambulance</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" style="font-size:23px; font-weight:bold" href="appointment.php">Appointment</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" style="font-size:23px; font-weight:bold" href="feedback.php">Feedback</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" style="font-size:23px; font-weight:bold" href="feedback.php">Login</a>
      </li>

    </ul>

    <form id="searchform" method="POST" action="header.php" class="form-inline my-2 my-lg-0">
      <input name="srch" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button name="search" class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
    </form>

  </div>
</nav>
  </body>
</html>
