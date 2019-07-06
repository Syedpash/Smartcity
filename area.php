<html>
<head>
<link rel="stylesheet" type="text/css" href="css.css">
<title>area</title>		</head>
<body background="images/ctw2.jpg">
<div class="title">
 Area database..</div>

<?php


$dbh = mysqli_connect('localhost','root','') or die(mysqli_error());
mysqli_select_db($dbh,'smartcity') or die(mysqli_error());


$pin_code=$_REQUEST['pin_code'];
$a_name=$_REQUEST['a_name'];
$population=$_REQUEST['population'];

$city_code=$_REQUEST['city_code'];


$query="INSERT INTO area VALUES('$pin_code','$a_name','$population','$city_code')";
 $result = mysqli_query($dbh,$query) or die('Error: ' . mysqli_error($dbh));
echo "data inserted successfully";

?>
<div class="insert"><form action="area.php">


enter pin_code:
<input type ="text" placeholder="Pin Code" name="pin_code"><br>

enter Area name:
<input type ="text" placeholder="Area Name" name="a_name"><br>


enter population:
<input type ="text" placeholder="population "name="population"><br>

enter City code:
<input type ="text" placeholder="City Code" name="city_code"><br>


<input type="submit" value="submit">
<input type="submit" formaction="city.html" value="Back">

<input type="submit" formaction="index.html" value="Home">



</form></div>
</body>
</html>