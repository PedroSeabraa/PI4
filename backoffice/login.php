<html>

<body>

 
<head>
	<link rel="stylesheet" href="css/cssinicial.css">
	<link rel="stylesheet" href="css/tabela.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <style>  
	  
	  #btn{ 
		  width:34%;
		  color:#2F5D3F;
		   border: 2px solid #2F5D3F;
		font-weight: bold;
	  }	  
  * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
	

h1 {
    font-size: 1.2rem;
    text-transform: uppercase;
	margin-bottom:5%;
}
label {
    width: 150px;
    display: inline-block;
    text-align: left;
    font-size: 1.5rem;
    
}
input {
    border: 2px solid #ccc;
    font-size: 1.2rem;
    font-weight: 100;
    padding: 10px;
	margin-top:4%;
}
form {
    margin: 10% auto;
    padding: 20px;
    border: 5px solid #ccc;
    width: 500px;
    background: #eee;
	opacity:0,4;
	text-align:center;
	
}
div.form-element {
    margin: 20px 0;
}
button {
    padding: 10px;
    font-size: 1.3rem;
	width:10%;
    font-weight: 100;
    background: yellowgreen;
    color: white;
    border: none;
}
p.success,
p.error {
    color: white;
    background: yellowgreen;
    display: inline-block;
    padding: 2px 10px;
}
p.error {
    background: orangered;
}
  </style>
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
  </ul>
</div>
<div class="content-container">

<div id = "frm">  
      
        <form name="f1" action = "authentication.php" onsubmit = "return validation()" method = "POST">  
              <h1>Iniciar sessão</h1> 
		<p>  
                <label> Username: </label>  
                <input type = "text" id ="user" name  = "user" />  
            </p>  
            <p>  
                <label> Password: </label>  
                <input type = "password" id ="pass" name  = "pass" />  
            </p>  
            <p>     
                <input type =  "submit" id = "btn" value = "Login" />  
            </p>  
        </form>  
    </div>  
       
    <script>  
            function validation()  
            {  
                var id=document.f1.user.value;  
                var ps=document.f1.pass.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
        </script>  
