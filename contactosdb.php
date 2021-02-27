<?php

require 'dbconfig.php';

session_start();

$query=mysqli_query($connection, "SELECT * FROM contacto");

if($query)
{
while($row=mysqli_fetch_array($query))
	{
	$flag[]=$row;
	}
print(json_encode($flag));
}
mysqli_close($connection);


?>


