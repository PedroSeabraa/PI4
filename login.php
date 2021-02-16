<?php

include 'dbconfig.php';

session_start();


$jsonObject = array();

if(isset($_GET['nome'])){
$username= $_GET['nome'];
}
else
{
$username="";
}


if(isset($_GET['contacto'])){
$contacto= $_GET['contacto'];
}
else
{
$contacto="";
}


if(!empty($contacto) && !empty($nome)){
	$queryResult = mysqli_query($dbconfig, "SELECT id, nome FROM inscritos WHERE nome = '$nome' AND contacto = '$contacto'")
	
	while($row = mysqli_fetch_assoc($queryResult)){
		$jsonObject[]=$row;
		
	} 
}


echo '{ "result" : ' . json_encode($jsonObject) . '}';





?>