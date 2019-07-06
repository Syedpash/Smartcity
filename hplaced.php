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

if(isset($_POST['hplace']))
{
$query="select * from h_place where city_code='$city_code'";
 $result = mysqli_query($dbh,$query) or die('Error: ' . mysqli_error($dbh));
$var=mysqli_query($dbh,$query);


echo"<table border size=1>";
echo"<tr><th>pin code</th>
<th>Place name</th>
<th>Place address</th>
<th>Famous for</th>
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
      <img src="images/siddaganga.jpg" alt="Avatar" class="image">
      <div class="overlay">
          <div class="text">Shri Siddaganga Matt Kyathasandra,Tumakuru</div>
    </div>

  </div>
  </div>
    <div class="column">
        <div class="container">
      <img src="images/jgf.jpg" alt="Avatar" class="image">
      <div class="overlay">
          <div class="text">Jogg Falls Shivamogga</div>
    </div>
    </div>
  </div>
    <div class="column">
          <div class="container">
      <img src="images/vdnsd.jpg" alt="Avatar" class="image">
      <div class="overlay">
          <div class="text">Vidhansowda Banglore</div>
    </div>
    </div>
  </div>

<div class="row">
    <div class="column">
      <div class="container">
      <img src="images/Gol-Gumbaz.jpg" alt="Avatar" class="image">
      <div class="overlay">
          <div class="text">Goll Gumbazz Bijapur</div>
    </div>

  </div>
  </div>
    <div class="column">
        <div class="container">
      <img src="images/msr.jpg" alt="Avatar" class="image">
      <div class="overlay">
          <div class="text">Mysore Palace Mysore</div>
    </div>
    </div>
  </div>
    <div class="column">
          <div class="container">
      <img src="images/ssit.jpg" alt="Avatar" class="image">
      <div class="overlay">
          <div class="text">Shri Siddartha Institute Of Technology Tumakuru</div>
    </div>
    </div>
  </div>


</body>
</html>