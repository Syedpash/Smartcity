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

if(isset($_POST['area']))
{
$query="select * from area where city_code='$city_code'";
 $result = mysqli_query($dbh,$query) or die('Error: ' . mysqli_error($dbh));
$var=mysqli_query($dbh,$query);


echo"<table border size=1>";
echo"<tr><th>pin code</th>
<th>Area name</th>

<th>population</th>
<th>City codess</th></tr><br>";

while ($arr=mysqli_fetch_row($var))
{
echo"<tr><td>$arr[0]</td><td>$arr[1]</td><td>$arr[2]</td><td>$arr[3]</td></tr>";
}
echo"</table>";



}

?>


</body>
</html>