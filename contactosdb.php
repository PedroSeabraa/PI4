<?php

//host name
$host = "us-cdbr-east-03.cleardb.com";
//user name
$username = "b8223fae969424";
//database password
$pwd = "f012793b";
//database name.
$db = "heroku_0a48125453dc4de";
session_start();
$con=mysqli_connect($host,$username,$pwd,$db) or die("Unable to Connect");

if(mysqli_connect_error($con))
{
	echo "Failed to connect";
}

$query=mysqli_query($con, "SELECT * FROM contacto");

if($query)
{
while($row=mysqli_fetch_array($query))
	{
	$flag[]=$row;
	}
print(json_encode($flag));
	
	
}
mysqli_close($con);
echo '{' . json_encode($flag) . '}';

?>
