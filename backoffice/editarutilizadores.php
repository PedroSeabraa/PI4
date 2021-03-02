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
<h1>Editar Utilizadores</h1>
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
$idade=0;
$email="";
$contacto="";
$localidade="";
$codigo_postal="";
$federado="";
$refeicao="";
$nr_federado=0;
$pagamento=0;
$acompanhante=0;
$genero=0;
$valor_pagamento=0;
$evento_id=0;

	
	$query = "SELECT *
	from utilizadores WHERE id_utilizador = $id";



	$resultado = mysqli_query($connection, $query);
    while($row = mysqli_fetch_array($resultado)){                                                 
		$id=$row[0];
		$nome=$row[1];
		$idade=$row[2];
		$email=$row[13];
        $contacto=$row[14];
        $localidade=$row[3];
        $codigopostal=$row[12];
        $federado=$row[4];
        $refeicao=$row[5];
        $nr_federado=$row[6];
        $pagamento=$row[7];
        $acompanhantes=$row[8];
        $genero=$row[9];
        $valor_pagamento=$row[10];
        $evento_id_evento=$row[11];
    }

    

?>
 <form action="atualizarutilizador.php" method="post">
  <?php echo '<input type="hidden" name="id" value="'.$id.'"> '?>
  Nome:
  <br>
  <?php echo '<input type="text" name="nome" value="'.$nome.'"> '?>
  <br>
  Idade:<br>
  <?php echo '<input type="number" name="idade" value="'.$idade.'">'?>
  <br>
  Email:<br>
  <?php echo '<input type="text" name="email" value='.$email.'>'?>
  <br>
  Contacto:
  <br>
  <?php echo '<input type="text" name="contacto" value="'.$contacto.'">'?>
  <br>Localidade:<br>
  <?php echo '<input type="text" name="localidade" value='.$localidade.'>'?>
	<br>
  Codigo Postal
  <br>
  <?php echo '<input type="text" name="codigopostal" value="'.$codigopostal.'">'?>
  <br>Federado:<br>
  <?php echo '<input name="federado" id="federado" value='.$federado.'>'?>
  <br>refeicao:<br>
  <?php echo '<input type="text" name="refeicao" value='.$refeicao.'>'?>
  <br>nr_federado:<br>
  <?php echo '<input type="number" name="nr_federado" value='.$nr_federado.'>'?>
  <br>pagamento:<br>
  <?php echo '<input type="number" name="pagamento" value='.$pagamento.'>'?>
  <br>Acompanhante:<br>
  <?php echo '<input type="number" name="acompanhantes" value='.$acompanhantes.'>'?>
  <br>Genero:<br>
  <?php echo '<select name="genero" id="genero" value='.$genero.'>'?>
  <option value="Masculino">Masculino</option>
  <option value="Feminino">Feminino</option>
</select>
  <br>valor_pagamento:<br>
  <?php echo '<input type="number" name="valor_pagamento" value='.$valor_pagamento.'>'?>
  <br>evento_id_evento:<br>
  <?php echo '<input type="number" name="evento_id_evento" value='.$evento_id_evento.'>'?>
  <input type="submit" value="Submit">
</form> 

<a href="utilizadores.php">Voltar</a>

</div>
</body>

</html>
