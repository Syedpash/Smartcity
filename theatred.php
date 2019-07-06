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

if(isset($_POST['theatre']))
{
$query="select * from theatre where city_code='$city_code'";
 $result = mysqli_query($dbh,$query) or die('Error: ' . mysqli_error($dbh));
$var=mysqli_query($dbh,$query);


echo"<table border size=1>";
echo"<tr><th>Theatre id</th>
<th>Theatre name</th>
<th>Theatre address</th>
<th>Review</th>
<th>City codes</th></tr><br>";

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
      <img src="images/gytr.jpg" alt="Avatar" class="image">
      <div class="overlay">
          <div class="text">Gayathri Theatre Tumakuru</div>
    </div>

  </div>
  </div>
    <div class="column">
        <div class="container">
      <img src="images/bhrtcin.jpg" alt="Avatar" class="image">
      <div class="overlay">
          <div class="text">bharath Cinema Hall Banglore</div>
    </div>
    </div>
  </div>
    <div class="column">
          <div class="container">
      <img src="images/ttr.jpg" alt="Avatar" class="image">
      <div class="overlay">
          <div class="text">prashanth Theatre Banglore</div>
    </div>
    </div>
  </div>

<div class="row">
    <div class="column">
      <div class="container">
      <img src="images/jbt.jpg" alt="Avatar" class="image">
      <div class="overlay">
          <div class="text">Jai Bharath Theatre mandipete Tumakuru</div>
    </div>

  </div>
  </div>
    
</body>
</html>