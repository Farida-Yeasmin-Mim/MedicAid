<!--?php


$data = file_get_contents('https://api.covid19api.com/summary');

$coronadata= json_decode($data);

echo"<pre>";
print_r($coronadata);
?-->




<!DOCTYPE html>
<html lang="en" dir="ltr">
<html>
<head>
  <meta charset="utf-8">
    <title>Covid-19 world Statistics</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="CSS/covid19.css">


</head>

<header>

   <?php include 'header.php';?>

</header>




<body onload="fetch()">





<div class="main_header">
  <div class="row w-100 h-100">
    <div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
      <div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
        <img src="Image/corona5.png" width="550" height="400">
    </div>
  </div>

    <div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
      <div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
        <h1 style="color: #18004d"> Covid-19 World Statistics <span class="corona"> <img src="Image/corona6.png"></span> </h1>

        <p style="color: blue">-Covid-19 live updates<br>-Cumulative confirmed Covid-19 cases <br>- People Fully Vaccinated by Country </p>


    </div>
  </div>
</div>
</div>
<br>
<br>

<br>
<br>








<section class="corona_update container-fluid">
  <div class="mb-3">
    <h3 class="text-center text-uppercase text-primary"> Covid-19 live updates</h3>
  </div>
  <div class="table-responsive">
    <table class="table table-bordered table-striped text-center" id="tbval">
      <tr>
        <th>Country</th>
        <th>TotalConfirmed</th>
        <th>TotalRecovered</th>
        <th>TotalDeaths</th>
        <th>NewConfirmed</th>
        <th>NewRecovered</th>
        <th>NewDeaths</th>





      </tr>


    </table>
</div>
</section>
<br>
<br>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js" integrity="sha512-d8F1J2kyiRowBB/8/pAWsqUl0wSEOkG5KATkVV4slfblq9VRQ6MyDZVxWl2tWd+mPhuCbpTB4M7uU/x9FlgQ9Q==" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<script>


function fetch(){
    $.get("https://api.covid19api.com/summary",
        function(data){
  //console.log(data['Countires'].length);
            var tbval= document.getElementById('tbval');
            for(var i=1; i<(data['Countries'].length); i++){
                 var x= tbval.insertRow();
                 x.insertCell(0);
                 tbval.rows[i].cells[0].innerHTML=data['Countries'][i-1]['Country'];
                 tbval.rows[i].cells[0].style.background='#072a63';
                 tbval.rows[i].cells[0].style.color='#fff';

                 x.insertCell(1);
                 tbval.rows[i].cells[1].innerHTML=data['Countries'][i-1]['TotalConfirmed'];
                 tbval.rows[i].cells[1].style.background='#c9d4e8';

                 x.insertCell(2);
                 tbval.rows[i].cells[2].innerHTML=data['Countries'][i-1]['TotalRecovered'];
                 tbval.rows[i].cells[2].style.background=' #ecb3ff';

                 x.insertCell(3);
                 tbval.rows[i].cells[3].innerHTML=data['Countries'][i-1]['TotalDeaths'];
                 tbval.rows[i].cells[3].style.background='#ff8566';
                x.insertCell(4);
                tbval.rows[i].cells[4].innerHTML=data['Countries'][i-1]['NewConfirmed'];
                tbval.rows[i].cells[4].style.background='#eeccff';
                x.insertCell(5);
                tbval.rows[i].cells[5].innerHTML=data['Countries'][i-1]['NewRecovered'];
                tbval.rows[i].cells[5].style.background='#b3e6ff';
                x.insertCell(6);
                tbval.rows[i].cells[6].innerHTML=data['Countries'][i-1]['NewDeaths'];
                tbval.rows[i].cells[6].style.background=' #ff8080';
            }
        }
       );

      }




</script>
<div class="card-body text-center text-center ">

<iframe src="https://ourworldindata.org/grapher/total-cases-covid-19?tab=map" width="100%" height="600px"></iframe>
    </div>
      <div class="card-body text-center text-center ">
      <iframe src="https://public.domo.com/cards/31O7r" width="900" height="600" marginheight="0" marginwidth="0" frameborder="0" center></iframe>
    </div>







</body>
</html>
