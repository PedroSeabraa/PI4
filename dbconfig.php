<?php
$server_name = "us-cdbr-east-03.cleardb.com";
$db_username = "b8223fae969424";
$db_password = "f012793b";
$db_name = "heroku_0a48125453dc4de";

$connection = mysqli_connect($server_name,$db_username,$db_password);
$dbconfig = mysqli_select_db($connection,$db_name);


if($dbconfig)
{
    //echo "database connected";
    
}
else{
    echo '
   
    ';
}
?>
