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
<h1>Utilizadores</h1>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Procura um nome" title="Escreva um nome">
  <div class="row">
    <div class="col-12">
      <table class="table table-bordered" id="myTable">
        <thead>
          <tr>
		    <th scope="col">Nome</th>
            <th scope="col">Idade</th>
            <th scope="col">Morada</th>
            <th scope="col">Federado</th>
            <th scope="col">Refeição</th>
            <th scope="col">Codigo Postal</th>
            <th scope="col">Acompanhantes</th>
            <th scope="col">Valor de pagamento</th>
            <th scope="col">Email </th>
            <th scope="col">Contacto</th>
            <th scope="col">Evento</th>
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

$query = "SELECT * FROM utilizadores;";

// result for method two 
$result2 = mysqli_query($connection, $query);

$dataRow = "";

while($row2 = mysqli_fetch_array($result2))
{
    $dataRow = $dataRow."<tr><td>$row2[1]</td><td>$row2[2]</td><td>$row2[3]</td><td>$row2[4]</td>
    <td>$row2[5]</td><td>$row2[12]</td><td>$row2[8]</td><td>$row2[10]</td>
    <td>$row2[13]</td><td>$row2[14]</td><td>$row2[11]</td><td><a href=editarutilizadores.php?id=".$row2[0]." >Editar</a><br><a href=apagarutilizador.php?id=".$row2[0]." >Apagar</a></td></tr>";
}

 echo $dataRow;?>		
        
        </tbody>
      </table>
    </div>
  </div>
</div>
</div>
<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
</body>
</html>
