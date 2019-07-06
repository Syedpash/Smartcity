<html>
<head>
<link rel="stylesheet" type="text/css" href="css.css">
<title>city</title>		</head>
<body>
<div class="title">
 City database..</div>

<?php

$dbh = mysqli_connect('localhost','root','') or die(mysqli_error());
mysqli_select_db($dbh,'smartcity') or die(mysql_error());


$city_code=$_REQUEST['city_code'];
$city_name=$_REQUEST['city_name'];


$query="INSERT INTO city VALUES('$city_code','$city_name')";
$result = mysqli_query($dbh,$query) or die('Error: ' . mysqli_error($dbh));

echo "data inserted";

?>
<form method="POST">


 <ul>
  <li><a class="active" href="collage.html">Add Collage</a></li>
  <li><a href="hospital.html">Add Hospital</a></li>
  <li><a href="area.html">Add Area</a></li>
  <li><a href="hplace.html">Add Historic Palce</a></li>

  <li><a href="theatre.html">Add Theatre</a></li>
</ul>
</form>

<div id="slider">
    <figure>
  <img src="images/ssit.jpg" height="400" >
  <img src="images/jgf.jpg" height="400">
  <img src="images/ctw4.jpg" height="400">
  <img src="images/3icit.jpg" height="400">
  <img src="images/msr.jpg" height="400">
</figure>
  </div>

</body>
</html>