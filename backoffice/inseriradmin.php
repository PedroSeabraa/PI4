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


 

<?php

session_start();
if(empty($_SESSION))
{
  session_destroy();
  echo "<script> location.href='login.php'; </script>";
}

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





// Insert
    mysqli_query($connection,"INSERT INTO admins (nome, password, email, contacto)
				VALUES
				('$_POST[Nome]','$_POST[password]','$_POST[email]','$_POST[contacto]')")
 
 echo "<script> location.href='admin.php'; </script>";
?>

</body>

</html>
