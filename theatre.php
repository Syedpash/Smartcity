<html>
<head>
<link rel="stylesheet" type="text/css" href="css.css">
		<title>city</title></head>
<body background="images/bhrtcin.jpg">
<div class="title">
 Theatre database..</div>

<?php

$dbh = mysqli_connect('localhost','root','') or die(mysqli_error());
mysqli_select_db($dbh,'smartcity') or die(mysqli_error());

$t_id=$_REQUEST['t_id'];
$t_name=$_REQUEST['t_name'];
$t_address=$_REQUEST['t_address'];
$review=$_REQUEST['review'];
$city_code=$_REQUEST['city_code'];


$query="INSERT INTO theatre VALUES('$t_id','$t_name','$t_address','$review','$city_code')";
$result = mysqli_query($dbh,$query) or die('Error: ' . mysqli_error($dbh));

echo "data inserted successfully";

?>
<div class="insert"><form action="theatre.php">


enter Theatre_id:
<input type ="text" placeholder="Theatre_id" name="t_id"><br>

enter Theatre name:
<input type ="text" placeholder="Theatre name" name="t_name"><br>

enter Theatre address:
<input type ="text" placeholder="Theatre address" name="t_address"><br>

enter Review:
<input type ="text" placeholder="Review "name="review"><br>

enter City code:
<input type ="text" placeholder="City Code" name="city_code"><br>


<input type="submit" value="submit">
<input type="submit" formaction="city.html" value="Back">

<input type="submit" formaction="index.html" value="Home">





</form></div>
</body>
</html>