<html>

<body>

 
<head>
	<link rel="stylesheet" href="css/cssinicial.css">
	<link rel="stylesheet" href="css/tabela.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body>
<div class="sidebar-container">
  <div class="sidebar-logo">
  Eventos Desportivos Penacova
  </div>
  <ul class="sidebar-navigation">
    <li class="header">Backoffice</li>
    <li>
      <a href="#">
        <i class="fa fa-home" aria-hidden="true" ></i> <a href="home.php">Home</a>
      </a>
    </li>
    <li>
      <a href="#">
        <i class="fa fa-tachometer" aria-hidden="true" ></i> <a href="admin.php">Admin</a>

      </a>
    </li>
			<li>
      <a href="#">
        <i class="fa fa-tachometer" aria-hidden="true" ></i> <a href="eventos.php">Eventos</a>

      </a>
    </li>
	<li>
      <a href="#">
        <i class="fa fa-tachometer" aria-hidden="true" ></i> <a href="utilizadores.php">Utilizadores</a>

      </a>
    </li>
    <li>
      <a href="#">
        <i class="fa fa-tachometer" aria-hidden="true" ></i> <a href="contactos.php">Contactos</a>

      </a>
    </li>
    <li>
      <a href="#">
        <i class="fa fa-tachometer" aria-hidden="true" ></i> <a href="logout.php">Logout</a>

      </a>
    </li>
  </ul>
</div>
<div class="content-container">
 
<div class="container">
<h1>Editar Evento</h1>
<?php
session_start();
if(empty($_SESSION))
{
  session_destroy();
  echo "<script> location.href='login.php'; </script>";
}
require 'dbconfig.php';

$id=$_REQUEST['id'];
$nome="";
$descricao="";
$preco=0;
$precof=0;
$precor=0;
$precoa=0;
$data=2020-01-01;
$tipoevento="";
$foto="";
$longitude=0;
$latitude=0;

	
	$query = "SELECT id_evento,nome,descricao,preco,preco_f,preco_refeicao,preco_acomp,data_inicio,tipo_evento,foto,longitude,latitude
	from evento WHERE id_evento = $id";



	$resultado = mysqli_query($connection, $query);
    while($row = mysqli_fetch_array($resultado)){                                                 
		$id=$row[0];
		$nome=$row[1];
		$descricao=$row[2];
    $preco=$row[3];
    $precof=$row[4];
    $precor=$row[5];
    $precoa=$row[6];
    $data=$row[7];
    $tipo=$row[8];
    $foto=$row[9];
    $longitude=$row[10];
    $latitude=$row[11];
    }

?>
 <form action="atualizarevento.php" method="post">
  <?php echo '<input type="hidden" name="id" value="'.$id.'"> '?>
  Nome:
  <br>
  <?php echo '<input type="text" name="nome" value="'.$nome.'"> '?>
  <br>
  Descricao:<br>
  <?php echo '<textarea rows="4" cols="50" name="descricao" > '.$descricao.' </textarea>'?>
  <br>
  preço:<br>
  <?php echo '<input type="number" name="preco" value='.$preco.'>'?>
  <br>
  Preço Federrado:
  <br>
  <?php echo '<input type="number" name="precof" value="'.$precof.'">'?>
  <br>
  preço refeição:<br>
  <?php echo '<input type="number" name="precor" value='.$precor.'>'?>
  <br>
  preço Acompanhantes:<br>
  <?php echo '<input type="number" name="precoa" value='.$precoa.'>'?>
  <br>
  data:<br>
  <?php echo '<input type="date" name="data" value='.$data.'>'?>
  <br>
  Tipo:<br>
  <?php echo '<input type="text" name="tipo" value='.$tipo.'>'?>
  <br>
  Foto:<br>
  <?php echo '<input type="text" name="foto" value='.$foto.'>'?>
  <br>
  Longitude:<br>
  <?php echo '<input type="number" name="longitude" value='.$longitude.'>'?>
  <br>
  Latitude:<br>
  <?php echo '<input type="number" name="latitude" value='.$latitude.'>'?>
  <br>
  <input type="submit" value="Submit">
</form> 

<a href="eventos.php">Voltar</a>

</div>
</body>

</html>
