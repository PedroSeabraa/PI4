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

<?php
session_start();
if(empty($_SESSION))
{
  session_destroy();
  echo "<script> location.href='login.php'; </script>";
}
require 'dbconfig.php';

    mysqli_query($connection,"UPDATE utilizador SET 
	nome='$_POST[nome]',idade='$_POST[idade]',
	email='$_POST[email]',contacto='$_POST[contacto]' WHERE id_admin=$_POST[id]");
 
 echo "<script> location.href='utilizador.php'; </script>";
?>

</body>

</html>
