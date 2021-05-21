<?php
  // Create database connection
  include 'connection.php';
$dbid =  $_GET['id'];

if (isset($_POST['name_edit']))
{
  $dbname = strip_tags($_POST['fname']);

$sql = "UPDATE ambulance
SET owner_name='$dbname'
WHERE ambulance_id='$dbid' ";
// execute query
mysqli_query($conn, $sql);

/*$sql= "DELIMITER $$
       CREATE TRIGGER after_update
       after update on user for each row
       begin
       if old.User_Name <> new.User_Name then
       UPDATE contestant
       SET User_Name=new.User_Name
       WHERE User_Name=old.User_Name;
       end if;
       end $$
DEMIMITER;";
    mysqli_query($conn, $sql);*/

header("Location: edit_ambulance_profile.php?id=$dbid ");
}

if (isset($_POST['pass_edit']))
{
  $dbpass = strip_tags($_POST['pass']);
  $sql = "UPDATE ambulance
  SET password='$dbpass'
  WHERE ambulance_id='$dbid' ";
  // execute query
  mysqli_query($conn, $sql);

  header("Location: edit_ambulance_profile.php?id=$dbid");
}

if (isset($_POST['add_edit']))
{
  $dbadd = strip_tags($_POST['address']);
  $sql = "UPDATE ambulance
  SET ambulance_number='$dbadd'
  WHERE ambulance_id='$dbid' ";
  // execute query
  mysqli_query($conn, $sql);



  header("Location: edit_ambulance_profile.php?id=$dbid");
}

if (isset($_POST['div_edit']))
{
  $dbdiv = strip_tags($_POST['division']);
  $sql = "UPDATE ambulance
  SET division='$dbdiv'
  WHERE ambulance_id='$dbid' ";
  // execute query
  mysqli_query($conn, $sql);



  header("Location: edit_ambulance_profile.php?id=$dbid");
}

if (isset($_POST['bs_edit']))
{
  $dbs = strip_tags($_POST['bs']);
  $sql = "UPDATE ambulance
  SET status='$dbs'
  WHERE ambulance_id='$dbid' ";
  // execute query
  mysqli_query($conn, $sql);



  header("Location: edit_ambulance_profile.php?id=$dbid");
}



if (isset($_POST['delete_user']))
{
  $sql = "DELETE
  FROM user
  WHERE User_Name='$username' ";
  // execute query
  mysqli_query($conn, $sql);
  /*DELIMITER $$
         CREATE TRIGGER after_delete
         after delete on user for each row
         begin
         DELETE FROM contestant
         WHERE User_Name=old.User_Name;
         end $$
  DEMIMITER;*/



  header("Location: user_login.php");
}


$result = mysqli_query($conn, "SELECT * FROM ambulance WHERE ambulance_id='$dbid'");
?>

<!DOCTYPE html>
<html>
<head>
<title>Edit Profile</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="CSS/blood_donor_information.css">

<!-- Bootstrap Grid System-->
<link rel="stylesheet" href="CSS/bootstrap-grid.css">


</style>
</head>
<body>
  <header>
    <?php include 'header2.php';?>

              </header>

              <div class="container-fluid">
                <h1 class="text-center text-dark text-capitalize pt-5">Edit Profile</h1>
                <hr class="w-25 pt-5">
<div id="content" class="row mb-5">
  <?php
    while ($row = mysqli_fetch_array($result)) {
      echo "<form method='POST' action='edit_ambulance_profile.php?id=$dbid' >";
        echo "<h5>Name: ".$row['owner_name']."</h5>";
        echo "<input name='fname' class='form-control' placeholder='Enter New Name' type='text'>";
        echo "<br>";
        echo "<button type='submit' name='name_edit' class='btn btn-info'>Set Name</button>";
        echo "<br><br>";
        echo "<h5>Password: ".$row['password']." </h4>";
        echo "<input name='pass' class='form-control' placeholder='Enter New Password' type='password'>";
        echo "<br>";
        echo "<button type='submit' name='pass_edit' class='btn btn-info'>Set Password</button>";
        echo "<br><br>";
        echo "<h5>Vehicle Number: ".$row['ambulance_number']." </h5>";
        echo "<input name='address' class='form-control' placeholder='Enter New Vehicle Number' type='text'>";
        echo "<br>";
        echo "<button type='submit' name='add_edit' class='btn btn-info'>Set Number</button>";
        echo "<br><br>";


        echo "<h5>Division: ".$row['division']." </h5>";
        echo "<select name='division' class='form-control' >";
    		echo	"<option value='' disabled selected> Select Division</option>";
        echo  "<option>Barishal</option>";
        echo  "<option>Chittagong</option>";
        echo  "<option>Dhaka</option>";
        echo  "<option>Mymensingh</option>";
        echo  "<option>Khulna</option>";
        echo  "<option>Rajshahi</option>";
        echo  "<option>Rangpur</option>";
        echo  "<option>Sylhet</option>";
        echo  "</select>";
            echo "<br>";
        echo "<button type='submit' name='div_edit' class='btn btn-info'>Set Division</button>";
        echo "<br><br>";


        echo "<h5>Status: ".$row['status']." </h5>";
        echo "<select name='bs' class='form-control' >";
    		echo	"<option value='' disabled selected> Select Status</option>";
        echo  "<option>Active</option>";
        echo  "<option>Inactive</option>";
        echo  "</select>";
        echo "<br>";
    echo "<button type='submit' name='bs_edit' class='btn btn-info'>Set Status</button>";
    echo "<br><br>";

echo "</form>";

    }

  ?>
</div>
</body>
</html>
