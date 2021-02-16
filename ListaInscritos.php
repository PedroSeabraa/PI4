<?php

//host name
$host = "localhost";
//user name
$username = "root";
//database password
$pwd = "";
//database name.
$db = "pi4";

session_start();

$con=mysqli_connect($host,$username,$pwd,$db) or die("Unable to Connect");

if(mysqli_connect_error($con))
{
	echo "Failed to connect";
}

if (isset($_GET['Holderid'])) {
    $id = $_GET['Holderid'];
}
else
{
    $id = "0";
}

$query=mysqli_query($con, "SELECT * FROM inscritos WHERE idevento ='$id'");

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