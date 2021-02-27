

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

if (isset($_GET['Holderid'])) {
    $id = $_GET['Holderid'];
}
else
{
    $id = "0";
}

$query=mysqli_query($con, "SELECT * FROM utilizadores WHERE evento_id_evento ='$id'");

if($query)
{
while($row=mysqli_fetch_array($query))
	{
	$flag[]=$row;
	}
print(json_encode($flag));
}
mysqli_close($con);



