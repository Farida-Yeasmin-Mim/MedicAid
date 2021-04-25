<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>User Log In</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://apis.google.com/js/platform.js" async defer></script>
  <style>
body {
  background-image: url('Image/logg.jpg');
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

    <div class="container-fluid ">
      <div class="row mb-5">
        <div class="col-lg-6 col-md-6 col-12">



      <h1 class="text-center text-dark text-capitalize pt-5">Varification</h1>
      <hr class="w-25 pt-4">

        <form action="/action_page.php">

  <div class="form-group">
    <label for="email">Enter you phone number: </label>
    <input type="text" id="number" class="form-control" placeholder="+880**********" autocomplete="off">
    <p>A code will send to this number</P>
  </div>
<div id="recaptcha-container"></div>

<br>
  <div class="col-md-12 text-center">
  <button type="button" onclick="phoneAuth();" class="btn btn-primary w-50">Send Varification Code</button>
</div>

</form>
</div>

<div class="col-lg-6 col-md-6 col-12">
<h1 class="text-center text-dark text-capitalize pt-5">Enter Varification Code</h1>
<hr class="w-25 pt-4">
<form action="/action_page.php">

<div class="form-group">
<label for="email">Enter your code: </label>
<input type="text" id="verificationCode" class="form-control" placeholder="******" autocomplete="off">

</div>

<br>
<div class="col-md-12 text-center">
<button type="button" onclick="codeverify();" class="btn btn-primary w-50">Send Varification Code</button>
</div>

</form>
</div>
</div>





    </div>

    <!-- The core Firebase JS SDK is always required and must be listed first -->
    <script src="https://www.gstatic.com/firebasejs/6.0.2/firebase.js"></script>

    <!-- TODO: Add SDKs for Firebase products that you want to use
         https://firebase.google.com/docs/web/setup#config-web-app -->

    <script>
        // Your web app's Firebase configuration
        var firebaseConfig = {
            apiKey: "AIzaSyBK-juZ6krPJCHHELQgOW9sFUXsS9h3wHI",
            authDomain: "fir-web-b823f.firebaseapp.com",
            databaseURL: "https://fir-web-b823f.firebaseio.com",
            projectId: "fir-web-b823f",
            storageBucket: "fir-web-b823f.appspot.com",
            messagingSenderId: "463332404757",
            appId: "1:463332404757:web:68d04d3fdeeb333f"
        };
        // Initialize Firebase
        firebase.initializeApp(firebaseConfig);
    </script>
    <script src="NumberAuthentication.js" type="text/javascript"></script>

  </body>
</html>
