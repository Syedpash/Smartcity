<html>
<head>
<link rel="stylesheet" type="text/css" href="css.css">
	<title>city</title>	</head>
<body background="images/jgf.jpg">
<div class="title">
 Historic place database..</div>

<?php


$dbh = mysqli_connect('localhost','root','') or die(mysqli_error());
mysqli_select_db($dbh,'smartcity') or die(mysqli_error());

$pin_code=$_REQUEST['pin_code'];
$p_name=$_REQUEST['p_name'];
$p_address=$_REQUEST['p_address'];
$f_for=$_REQUEST['f_for'];

$city_code=$_REQUEST['city_code'];


$query="INSERT INTO h_place VALUES('$pin_code','$p_name','$p_address','$f_for','$city_code')";
$result = mysqli_query($dbh,$query) or die('Error: ' . mysqli_error($dbh));

echo "data inserted successfully";

?>
<div class="insert"><form action="hplace.php">

enter pin code:
<input type ="text" placeholder="pin code" name="pin_code"><br>

enter place name:
<input type ="text" placeholder="place name" name="p_name"><br>

enter Place address:
<input type ="text" placeholder="Address" name="p_address"><br>

enter Famous For:
<input type ="text" placeholder="Famous For" name="f_for"><br>


enter City code:
<input type ="text" placeholder="City Code" name="city_code"><br>


<input type="submit" value="submit">
<input type="submit" formaction="city.html" value="Back">

<input type="submit" formaction="index.html" value="Home">



</form></div>
</body>
</html>