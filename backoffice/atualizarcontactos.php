<html>

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
<body>
<?php
session_start();
if(empty($_SESSION))
{
  session_destroy();
  echo "<script> location.href='login.php'; </script>";
}
require 'dbconfig.php';

    mysqli_query($connection,"UPDATE contacto SET 
	morada='$_POST[morada]',telefone='$_POST[telefone]',
	email='$_POST[email]',facebook='$_POST[facebook]',instagram='$_POST[instagram]',informacao='$_POST[info]' WHERE id_contacto=$_POST[id]");
 
 echo "<script> location.href='contactos.php'; </script>";
?>

</body>

</html>
