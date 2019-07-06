<html>
<head>
<link rel="stylesheet" type="text/css" href="css.css">
	<title>city</title>	</head>
<body background="images/siddtmk.jpg">
<div class="title">
 Hospital database..</div>

<?php


$dbh = mysqli_connect('localhost','root','') or die(mysqli_error());
mysqli_select_db($dbh,'smartcity') or die(mysqli_error());

$h_code=$_REQUEST['h_code'];
$h_name=$_REQUEST['h_name'];
$h_address=$_REQUEST['h_address'];
$ratings=$_REQUEST['ratings'];
$city_code=$_REQUEST['city_code'];


$query="INSERT INTO hospital VALUES('$h_code','$h_name','$h_address','$ratings','$city_code')";
$result = mysqli_query($dbh,$query) or die('Error: ' . mysqli_error($dbh));

echo "data inserted successfully";

?>
<div class="insert"><form action="hospital.php">


enter hospital_code:
<input type ="text" placeholder="Hospital Code" name="h_code"><br>

enter Hospital name:
<input type ="text" placeholder="Hospital Name" name="h_name"><br>

enter hospital address:
<input type ="text" placeholder="Hospital Address" name="h_address"><br>

enter Ratings:
<input type ="text" placeholder="ratings "name="ratings"><br>

enter City code:
<input type ="text" placeholder="City Code" name="city_code"><br>

<input type="submit" value="submit">
<input type="submit" formaction="city.html" value="Back">

<input type="submit" formaction="index.html" value="Home">






</form></div>
</body>
</html>