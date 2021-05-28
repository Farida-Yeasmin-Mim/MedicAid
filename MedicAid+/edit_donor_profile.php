<?php
  // Create database connection
  include 'connection.php';
$dbid =  $_GET['id'];

if (isset($_POST['name_edit']))
{
  $dbname = strip_tags($_POST['fname']);

$sql = "UPDATE donor
SET full_name='$dbname'
WHERE donor_id='$dbid' ";
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

header("Location: edit_donor_profile.php?id=$dbid ");
}

if (isset($_POST['pass_edit']))
{
  $dbpass = strip_tags($_POST['pass']);
  $sql = "UPDATE donor
  SET password='$dbpass'
  WHERE donor_id='$dbid' ";
  // execute query
  mysqli_query($conn, $sql);



  header("Location: edit_donor_profile.php?id=$dbid");
}

if (isset($_POST['add_edit']))
{
  $dbadd = strip_tags($_POST['address']);
  $sql = "UPDATE donor
  SET address='$dbadd'
  WHERE donor_id='$dbid' ";
  // execute query
  mysqli_query($conn, $sql);



  header("Location: edit_donor_profile.php?id=$dbid");
}

if (isset($_POST['div_edit']))
{
  $dbdiv = strip_tags($_POST['division']);
  $sql = "UPDATE donor
  SET division='$dbdiv'
  WHERE donor_id='$dbid' ";
  // execute query
  mysqli_query($conn, $sql);



  header("Location: edit_donor_profile.php?id=$dbid");
}

if (isset($_POST['bs_edit']))
{
  $dbs = strip_tags($_POST['bs']);
  $sql = "UPDATE donor
  SET blood_status='$dbs'
  WHERE donor_id='$dbid' ";
  // execute query
  mysqli_query($conn, $sql);



  header("Location: edit_donor_profile.php?id=$dbid");
}


if (isset($_POST['ps_edit']))
{
  $dbs = strip_tags($_POST['ps']);
  if($dbs=="Active")
  {
       $sql = "SELECT full_name, email, contact_number, gender, age, blood_group, division, address FROM donor WHERE donor_id=$dbid";
       $result = mysqli_query($conn,$sql);
       $row = mysqli_fetch_assoc($result);
       $name= $row["full_name"] ;
       $email= $row["email"] ;
       $contact= $row["contact_number"] ;
       $gender= $row["gender"] ;
       $age= $row["age"] ;
       $blood_group= $row["blood_group"] ;
       $division= $row["division"] ;
       $address= $row["address"] ;

       $sql="INSERT INTO plasma(full_name, email, contact_number, gender, age, blood_group, division, address)
      VALUES ('$name','$email','$contact','$gender','$age','$blood_group','$division','$address')";
      mysqli_query($conn, $sql);


  }
  else
  {
    $sql = "SELECT email FROM donor WHERE donor_id=$dbid";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    $email= $row["email"] ;

    $sql = "DELETE FROM plasma WHERE full_name='$email' ;";
    // execute query
    mysqli_query($conn, $sql);

  }
  $sql = "UPDATE donor
  SET plasma_status='$dbs'
  WHERE donor_id='$dbid' ";
  // execute query
  mysqli_query($conn, $sql);



  header("Location: edit_donor_profile.php?id=$dbid");
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


$result = mysqli_query($conn, "SELECT * FROM donor WHERE donor_id='$dbid'");
?>

<!DOCTYPE html>
<html>
<head>
<title>Edit Donor Profile</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="CSS/blood_donor_information.css">

<!-- Bootstrap Grid System-->
<link rel="stylesheet" href="CSS/bootstrap-grid.css">


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
    <?php include 'header2.php';?>

              </header>
              <br>
              <button class="btn bg-primary text-white" onclick="window.location ='donor_profile.php?id=<?php echo $dbid ?>'">Back To Profile</button>

              <div class="container-fluid">
                <h1 class="text-center text-dark text-capitalize pt-5">Edit Profile</h1>
                <hr class="w-25 pt-5">
<div id="content" class="row mb-5">
  <?php
    while ($row = mysqli_fetch_array($result)) {
      echo "<form method='POST' action='edit_donor_profile.php?id=$dbid' >";
        echo "<h5>Name: ".$row['full_name']."</h5>";
        echo "<input name='fname' class='form-control' placeholder='Enter New Name' type='text'>";
        echo "<br>";
        echo "<button type='submit' name='name_edit' class='btn btn-info'>Set Name</button>";
        echo "<br><br>";
        echo "<h5>Password: ".$row['password']." </h4>";
        echo "<input name='pass' class='form-control' placeholder='Enter New Password' type='password'>";
        echo "<br>";
        echo "<button type='submit' name='pass_edit' class='btn btn-info'>Set Password</button>";
        echo "<br><br>";
        echo "<h5>Address: ".$row['address']." </h5>";
        echo "<input name='address' class='form-control' placeholder='Enter New Address' type='text'>";
        echo "<br>";
        echo "<button type='submit' name='add_edit' class='btn btn-info'>Set Address</button>";
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


        echo "<h5>Blood Donation Status: ".$row['blood_status']." </h5>";
        echo "<select name='bs' class='form-control' >";
    		echo	"<option value='' disabled selected> Select Status</option>";
        echo  "<option>Active</option>";
        echo  "<option>Inactive</option>";
        echo  "</select>";
        echo "<br>";
    echo "<button type='submit' name='bs_edit' class='btn btn-info'>Set Blood Donation Status</button>";
    echo "<br><br>";

    echo "<h5>Are You A COVID19 Recoverd Patient? <br><br> If 'Yes' Then You Can Donate Your Plasma To Save Lives!  <br><br></h5>";
    echo "<h5>Plasma Donation Status: ".$row['plasma_status']." </h5>";
    echo "<select name='ps' class='form-control' >";
    echo	"<option value='' disabled selected> Select Status</option>";
    echo  "<option>Active</option>";
    echo  "<option>Inactive</option>";
    echo  "</select>";
    echo "<br>";
    echo "<button type='submit' name='ps_edit' class='btn btn-info'>Set Plasma Donation Status</button>";
    echo "<br><br>";

echo "</form>";

    }

  ?>
</div>
</body>
</html>
