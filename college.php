<html>
<head>
<link rel="stylesheet" type="text/css" href="css.css">
	<title>city</title>	</head>
<body background="images/3icit.jpg">
<div class="title">
 Collage database..</div>

<?php


$dbh = mysqli_connect('localhost','root','') or die(mysqli_error());
mysqli_select_db($dbh,'smartcity') or die(mysqli_error());

$c_code=$_REQUEST['c_code'];
$c_name=$_REQUEST['c_name'];
$c_address=$_REQUEST['c_address'];
$no_of_dept=$_REQUEST['no_of_dept'];
$city_code=$_REQUEST['city_code'];


$query="INSERT INTO collage VALUES('$c_code','$c_name','$c_address','$no_of_dept','$city_code')";
 $result = mysqli_query($dbh,$query) or die('Error: ' . mysqli_error($dbh));

echo "data inserted successfully";

?>
<div class="insert"><form action="college.php">


enter college_code:
<input type ="text" placeholder="College Code" name="c_code"><br>

enter College name:
<input type ="text" placeholder="College Name" name="c_name"><br>

enter college address:
<input type ="text" placeholder="College Address" name="c_address"><br>

enter no.of departments:
<input type ="text" placeholder="No. of departmentd "name="no_of_dept"><br>

enter City code:
<input type ="text" placeholder="City Code" name="city_code"><br>

<input type="submit" value="Submit">

<input type="submit" formaction="city.html" value="Back">

<input type="submit" formaction="index.html" value="Home">
</form>
</div>
</body>
</html>