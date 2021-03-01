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
<h1>Eventos</h1>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Procura um nome" title="Escreva um nome">

  <div class="row">
    <div class="col-12">
      <table class="table table-bordered" id="myTable">
        <thead>
          <tr>
		        <th scope="col">Nome</th>
            <th scope="col">Descricao</th>
            <th scope="col">Preço</th>
            <th scope="col">Preço Federado</th>
            <th scope="col">Data Inicio</th>
            <th scope="col">Tipo de Evento</th>
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

$query = "SELECT id_evento,nome,descricao,preco,preco_f,data_inicio,tipo_evento FROM evento;";

// result for method two 
$result2 = mysqli_query($connection, $query);

$dataRow = "";

while($row2 = mysqli_fetch_array($result2))
{
    $dataRow = $dataRow."<tr><td>$row2[1]</td><td>$row2[2]</td><td>$row2[3]</td><td>$row2[4]</td><td>$row2[5]</td><td>$row2[6]</td><td><a href=editarevento.php?id=".$row2[0]." >Editar</a></td></tr>";
}

 echo $dataRow;?>		
        
        </tbody>
      </table>
    </div>
  </div>
</div>

<button id="myBtn">Novo Evento</button>

<div id="myModal" class="modal">

  <div class="modal-content">
    <span class="close">&times;</span>
    
	<form action="inserirevento.php" method="post">
  Nome:<br>
  <input type="text" name="Nome" value="">
  <br>Descrição<br>
  <textarea rows="4" cols="50" name="descricao"> </textarea>
  <br>preço<br>
  <input type="number" name="preco" value="">
  <br>Preço Federado<br>
  <input type="number" name="precof" value="">
  <br>preço refeição<br>
  <input type="number" name="precor" value="">
  <br>preço acompanhante<br>
  <input type="number" name="precoa" value="">
  <br>Data de inicio<br>
  <input type="date" name="data" value="">
  <br>Tipo de Evento<br>
  <input type="text" name="tipo" value="">
  <br>Foto<br>
  <input type="text" name="foto" value="">
  <br>Longitude<br>
  <input type="number" name="longitude" value="" min="0">
  <br>latitude<br>
  <input type="number" name="latitude" value="" min="0">
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
  </div>
</div>
</body>
</html>
