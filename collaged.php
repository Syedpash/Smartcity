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

if(isset($_POST['collage']))
{

$query="select * from collage where city_code='$city_code'";
 $result = mysqli_query($dbh,$query) or die('Error: ' . mysqli_error($dbh));
$var=mysqli_query($dbh,$query);


echo"<table border size=1>";
echo"<tr><th>Collage code</th>
<th>Collage name</th>
<th>Collage address</th>
<th>departments</th>
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
      <img src="images/5igpt.jpg" alt="Avatar" class="image">
      <div class="overlay">
          <div class="text">Govt. Polytechnic B.H. Road,Tumakuru</div>
    </div>

  </div>
  </div>
    <div class="column">
        <div class="container">
      <img src="images/3ihmmsit.jpg" alt="Avatar" class="image">
      <div class="overlay">
          <div class="text">HMS Institute Of Technology B.H.Road Tumakuru</div>
    </div>
    </div>
  </div>
    <div class="column">
          <div class="container">
      <img src="images/6ikit.jpg" alt="Avatar" class="image">
      <div class="overlay">
          <div class="text">Kalpatharu Institute Of Technology Tipaturu</div>
    </div>
    </div>
  </div>

<div class="row">
    <div class="column">
      <div class="container">
      <img src="images/1i.jpg" alt="Avatar" class="image">
      <div class="overlay">
          <div class="text">First Grade College Tumakuru</div>
    </div>

  </div>
  </div>
    <div class="column">
        <div class="container">
      <img src="images/3icit.jpg" alt="Avatar" class="image">
      <div class="overlay">
          <div class="text">Channabasaveshwara Institute Of Technology Gubbi</div>
    </div>
    </div>
  </div>
    <div class="column">
          <div class="container">
      <img src="images/2i.jpg" alt="Avatar" class="image">
      <div class="overlay">
          <div class="text">Sacret Heart PU College Tumakuru</div>
    </div>
    </div>
  </div>


</body>
</html>