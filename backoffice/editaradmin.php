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
<h1>Editar Admin</h1>
<?php
session_start();
if(empty($_SESSION))
{
  session_destroy();
  echo "<script> location.href='login.php'; </script>";
}
require 'dbconfig.php';

$id=$_REQUEST['id'];
$password="";
$nome="";
$email="";
$contacto="";

	
	$query = "SELECT *
	from admins WHERE id_admin = $id";



	$resultado = mysqli_query($connection, $query);
    while($row = mysqli_fetch_array($resultado)){                                                 
		$id=$row[0];
		$password=$row[1];
		$nome=$row[2];
		$email=$row[3];
        $contacto=$row[4];
    }

?>
 <form action="atualizaradmin.php" method="post">
  <?php echo '<input type="hidden" name="id" value="'.$id.'"> '?>
  Nome:
  <br>
  <?php echo '<input type="text" name="nome" value="'.$nome.'"> '?>
  <br>
  Password:<br>
  <?php echo '<input type="password" name="password" value="'.$password.'">'?>
  <br>
  Email:<br>
  <?php echo '<input type="text" name="email" value='.$email.'>'?>
  <br>
  contacto:
  <br>
  <?php echo '<input type="text" name="contacto" value="'.$contacto.'">'?>
  <br>
  <input type="submit" value="Submit">
</form> 

<a href="admin.php">Voltar</a>

</div>
</body>

</html>
