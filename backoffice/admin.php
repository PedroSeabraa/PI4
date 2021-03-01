<html>

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
<h1>Admins</h1>
  <div class="row">
    <div class="col-12">
      <table class="table table-bordered">
        <thead>
          <tr>
		    <th scope="col">Nome</th>
            <th scope="col">Email</th>
            <th scope="col">Contacto</th>
            <th scope="col">Acções</th>
          </tr>
        </thead>
        <tbody>
		
		<?php
session_start();
if(empty($_SESSION))
{
  session_destroy();
  echo "<script> location.href='login.php'; </script>";
}
// php populate html table from mysql database

require 'dbconfig.php';

// mysql select query

$query = "SELECT * FROM admins;";

// result for method two 
$result2 = mysqli_query($connection, $query);

$dataRow = "";

while($row2 = mysqli_fetch_array($result2))
{
    $dataRow = $dataRow."<tr><td>$row2[2]</td><td>$row2[3]</td><td>$row2[4]</td><td><a href=editaradmin.php?id=".$row2[0]." >Editar</a><br><a href=apagaradmin.php?id=".$row2[0]." >Apagar</a></td></tr>";
}

 echo $dataRow;?>		
        
        </tbody>
      </table>
    </div>
  </div>
</div>

<button id="myBtn">Novo Admin</button>

<div id="myModal" class="modal">

  <div class="modal-content">
    <span class="close">&times;</span>
    
    <form action="inseriradmin.php" method="post">
  Nome:<br>
  <input type="text" name="Nome" value="">
  <br>email<br>
  <input type="text" name="email" value="">
  <br>Password<br>
  <input type="password" name="password" value="">
  <br>Contacto<br>
  <input type="text" name="contacto" value="">
  <br><input type="submit" value="Submit">
</form> 
	
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

  </div>
</div>
</body>
</html>
