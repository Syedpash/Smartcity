<html>
<head>
<link rel="stylesheet" type="text/css" href="css.css">
	<title>city</title>	</head>
<body>
<div class="title">
 Smartcity database..</div>

<?php


$dbh = mysqli_connect('localhost','root','') or die(mysqli_error());
mysqli_select_db($dbh,'smartcity') or die(mysqli_error());

$city_code=$_REQUEST['city_code'];
$city_name=$_REQUEST['city_name'];

if(isset($_POST['hospital']))
{
$query="select * from hospital where city_code='$city_code'";
 $result = mysqli_query($dbh,$query) or die('Error: ' . mysqli_error($dbh));
$var=mysqli_query($dbh,$query);


echo"<table border size=1>";
echo"<tr><th>Hospital code</th>
<th>Hospital name</th>
<th>Hospital address</th>
<th>rating</th>
<th>City codess</th></tr><br>";

while ($arr=mysqli_fetch_row($var))
{
echo"<tr><td>$arr[0]</td><td>$arr[1]</td><td>$arr[2]</td><td>$arr[3]</td><td>$arr[4]</td></tr>";
}
echo"</table>";
}





?>
<div class="row">
    <div class="column">
      <div class="container">
      <img src="images/siddtmk.jpg" alt="Avatar" class="image">
      <div class="overlay">
          <div class="text">Siddaganga Hospital Tumakuru</div>
    </div>

  </div>
  </div>
    <div class="column">
        <div class="container">
      <img src="images/thstmk.jpg" alt="Avatar" class="image">
      <div class="overlay">
          <div class="text">THS Hospital Tumakuru</div>
    </div>
    </div>
  </div>
    <div class="column">
          <div class="container">
      <img src="images/nrrh.jpg" alt="Avatar" class="image">
      <div class="overlay">
          <div class="text">N.R.R.Hospital Banglore</div>
    </div>
    </div>
  </div>

<div class="row">
    <div class="column">
      <div class="container">
      <img src="images/appolob.jpg" alt="Avatar" class="image">
      <div class="overlay">
          <div class="text">Appolo Hospital Banglore</div>
    </div>

  </div>
  </div>
    <div class="column">
        <div class="container">
      <img src="images/re2.jpg" alt="Avatar" class="image">
      <div class="overlay">
          <div class="text">High quality residential buildings, designed with high efficiency to take care of all your needs and executed through Sleek (a subsidiary of Asian Paints).</div>
    </div>
    </div>
  </div>
    <div class="column">
          <div class="container">
      <img src="images/msramayya.jpg" alt="Avatar" class="image">
      <div class="overlay">
          <div class="text">M.S.Ramayya Hospital,Banglore</div>
    </div>
    </div>
  </div>


</body>
</html>