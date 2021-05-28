<?php
  // Create database connection
  include 'connection.php';
$dbid =  $_GET['id'];
      $sql = "SELECT feedback_id,name,message FROM feedback";

$result = mysqli_query($conn, $sql);

if (isset($_POST['block'])) {
  $dbp = $_GET['p'];
  $dbid =  $_GET['id'];
  $sql = "DELETE FROM feedback
  WHERE feedback_id = $dbp";
  mysqli_query($conn, $sql);
  header("location:report_review.php?id=$dbid");
}


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin || Reviews</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://apis.google.com/js/platform.js" async defer></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
  body {
  background-image: url('Image/review.jpg');
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
                <br>
                <button class="btn bg-primary text-white" onclick="window.location ='admin_profile.php?id=<?php echo $dbid ?>'">Back To Profile</button>



    <div class="container-fluid">
      <h1 class="text-center text-dark text-capitalize pt-5">Reviews</h1>
      <hr class="w-25 pt-5">
      <!--Grid row-->
      <div class="row" >

          <!--Grid column-->
          <div class="col-lg-5 col-md-12 mx-auto">


      <div id="content">
        <?php
          while ($row = mysqli_fetch_array($result)) { ?>
        <div id='img_div'>

    <div class="media">

  <img src="Image/avatar.jpg" class="align-self-start mr-3" style="width:60px">
  <div class="media-body">
    <h4><?php echo $row['name'] ?></h4>
    <p><?php echo $row['message'] ?></p>
    <form method="POST" action="report_review.php?id=<?php echo $dbid?>&p=<?php echo $row['feedback_id'] ?>" >
    <button type="submit" class="btn btn-info btn-block" name="block">Delete This Review</button>
    </form>
    <hr class="w-100">
  </div>
</div>
</div>
<?php } ?>
</div>
</div>
</div>

  </body>
</html>
