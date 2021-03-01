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
<h1>Editar Contactos</h1>
<?php
session_start();
if(empty($_SESSION))
{
  session_destroy();
  echo "<script> location.href='login.php'; </script>";
}
require 'dbconfig.php';

$id=$_REQUEST['id'];
$morada="";
$telefone=0;
$email="";
$facebook="";
$instagram="";

	
	$query = "SELECT *
	from contacto WHERE id_contacto = 1";



	$resultado = mysqli_query($connection, $query);
    while($row = mysqli_fetch_array($resultado)){                                                 
		$id=$row[0];
		$morada=$row[1];
		$telefone=$row[2];
		$email=$row[3];
    $facebook=$row[4];
    $instagram=$row[5];
    $info=$row[6];
    }

?>
 <form action="atualizarcontactos.php" method="post">
  <?php echo '<input type="hidden" name="id" value="'.$id.'"> '?>
  Morada:
  <br>
  <?php echo '<input type="text" name="morada" value="'.$morada.'"> '?>
  <br>
  Telefone:<br>
  <?php echo '<input type="number" name="telefone" value="'.$telefone.'">'?>
  <br>
  Email:<br>
  <?php echo '<input type="text" name="email" value='.$email.'>'?>
  <br>
  Facebook:
  <br>
  <?php echo '<input type="text" name="facebook" value="'.$facebook.'">'?>
  <br>Instagram:<br>
  <?php echo '<input type="text" name="instagram" value='.$instagram.'>'?>
	<br>
  Informações
  <br>
  <?php echo '<input type="text" name="info" value="'.$info.'">'?><br>
  <input type="submit" value="Submit">
</form> 

<a href="contactos.php">Voltar</a>

</div>
</body>

</html>
