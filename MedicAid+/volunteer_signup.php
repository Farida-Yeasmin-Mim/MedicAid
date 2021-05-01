<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Volunteer SignUp</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="CSS/signup.css">

</head>

<body>

<div class="card bg-dark text-white">
    <img class="card-img" src="Image/vm.jpg" alt="Card image">
  <div class="card-img-overlay">
<article class="card-body mx-auto" style="max-width: 550px;">


    <h2 class="card-title text-left text-white ">Welcome to Volunteer Connection!</h2>
<h3 class="card-title mt-3 text-center text-white ">Create a MedicAid ID</h3>
<p class="text-center text-white">The first step to creating a Volunteer Connection account is to create your MedicAid ID. Please complete the form below.
</p>
    <p class="divider-text">
        <span class=""></span>
    </p>

    <form>
    <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
         </div>
        <input name="" class="form-control" placeholder="Full name" type="text" required="">
    </div>

    <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
         </div>
        <input name="" class="form-control" placeholder="Email address" type="email" required="">
    </div>

   <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"    > <i class="fas fa-genderless"></i> </i> </span>
        </div>
        <select class="form-control" required="">
            <option selected=""> Select Gender</option>
            <option> Male</option>
            <option> Female</option>
            <option> Other</option>
        </select>
    </div>

    <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-phone">  </i> </span>
        </div>
        <select class="custom-select" style="max-width: 120px;" required="" >
            <option selected="">+880</option>

        </select>
        <input name="" class="form-control" placeholder="Phone number" type="text"  required="">
    </div>

    <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"    >  <i class="fa fa-medkit"></i> </span>
        </div>
        <select class="form-control" required="">
            <option selected=""> Select Blood Group</option>
            <option> A+</option>
            <option> A-</option>
            <option> B+</option>
            <option> B-</option>
            <option> AB+</option>
            <option> AB-</option>
            <option> O+</option>
            <option> O-</option>

        </select>
    </div>

    <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text">  <i class="fa fa-flag"></i> </span>
        </div>
        <select class="form-control" required="">
            <option selected="">Select Country</option>
            <option> Bangladesh</option>
            <option> India</option>
            <option> China</option>

        </select>
    </div>


    <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
        </div>
        <input class="form-control" placeholder="Create password" type="password" required=" ">
    </div>

    <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
        </div>
        <input class="form-control" placeholder="Confirm password" type="password">
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block">CREATE MY MEDICAID ID</button>
    </div>
    <p class="text-center text-dark "><a href="" >Under age 13? </a></p>
    <p class="text-center text-white ">Already Have an account? <a href="" >Log In</a> </p>
</form>

</article>

</nav>
</body>
</html>
