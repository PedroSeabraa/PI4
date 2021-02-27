<?php 

require 'dbconfig.php';

session_start();

$jsonObject = array();

if (isset($_GET['nome'])) {
    $nome = $_GET['nome'];
}
else
{
    $nome = "";
}

if (isset($_GET['contacto'])) {
    $contacto = $_GET['contacto'];
}
else{
    $contacto = "";
}

if (isset($_GET['email'])) {
    $email = $_GET['email'];
}
else{
    $email = "";
}

if (isset($_GET['morada'])) {
    $morada = $_GET['morada'];
}
else{
    $morada = "";
}

if (isset($_GET['codigopostal'])) {
    $codigopostal = $_GET['codigopostal'];
}
else{
    $codigopostal = "";
}

if (isset($_GET['Holderid'])) {
    $Holderid = $_GET['Holderid'];
}
else{
    $Holderid = "";
}
if (isset($_GET['federado'])) {
    $federado = $_GET['federado'];
}
else
{
    $nome = "";
}
if (isset($_GET['refeicao'])) {
    $refeicao = $_GET['refeicao'];
}
else
{
    $refeicao = "";
}
if (isset($_GET['acompanhantes'])) {
    $acompanhantes = $_GET['acompanhantes'];
}
else
{
    $acompanhantes = "";
}
if (isset($_GET['genero'])) {
    $genero = $_GET['genero'];
}
else
{
    $genero = "";
}
if (isset($_GET['idade'])) {
    $idade = $_GET['idade'];
}
else
{
    $idade = "";
}
if (isset($_GET['codigo'])) {
    $codigo = $_GET['codigo'];
}
else
{
    $codigo = "";
}
if(!empty($nome) && !empty($contacto))
{
	
    $queryResult = mysqli_query($connection, "INSERT INTO utilizadores (nome, evento_id_evento, email, localidade, contacto, codigo_postal, federado, refeicao, acompanhante, genero, idade, nr_federado) VALUES('$nome', '$Holderid', '$email', '$morada', '$contacto', '$codigopostal', '$federado', '$refeicao', '$acompanhantes', '$genero', '$idade', '$codigo')");


    mysqli_close($connection);
}

 echo '{ "result" : ' . json_encode($jsonObject) . '}';
?>
