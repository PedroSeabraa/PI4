ppp
<?php

require 'dbconfig.php';

session_start();

$query=mysqli_query($connection, "SELECT * FROM heroku_0a48125453dc4de.evento");

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
