<?php

//host name
$host = "localhost";
//user name
$username = "root";
//database password
$pwd = "";
//database name.
$db = "pi4";

$con=mysqli_connect($host,$username,$pwd,$db) or die("Unable to Connect");

if(mysqli_connect_error($con))
{
	echo "Failed to connect";
}

$query=mysqli_query($con, "SELECT * FROM eventos");

if($query)
{
while($row=mysqli_fetch_array($query))
	{
	$flag[]=$row;
	}
print(json_encode($flag));
}
mysqli_close($con);


?>