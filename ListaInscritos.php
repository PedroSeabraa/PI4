<?php

require 'dbconfig.php';

session_start();

if (isset($_GET['Holderid'])) {
    $id = $_GET['Holderid'];
}
else
{
    $id = "0";
}

$query=mysqli_query($connection, "SELECT * FROM utilizadores WHERE evento_id_evento ='$id'");

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


