<!DOCTYPE html>
<html class="noscroll">
<head>


<title>Inscricao</title>
<link rel="stylesheet" href="stylecss.css">
</head>
<body onLoad="myFunction()">
<script type="text/javascript">
 function googleTranslateElementInit() {
 new google.translate.TranslateElement({ pageLanguage: "pt" }, "google_translate_element");
 };
 
 
 
 
 (function(){var gtConstEvalStartTime = new Date();

 


function d(b){var a=document.getElementsByTagName("head")[0];a||(a=document.body.parentNode.appendChild(document.createElement("head")));a.appendChild(b)}
function _loadJs(b){var a=document.createElement("script");a.type="text/javascript";a.charset="UTF-8";a.src=b;d(a)}
function _loadCss(b){var a=document.createElement("link");a.type="text/css";a.rel="stylesheet";a.charset="UTF-8";a.href=b;d(a)}
function _isNS(b){b=b.split(".");for(var a=window,c=0;c<b.length;++c)if(!(a=a[b[c]]))return!1;return!0}
function _setupNS(b){b=b.split(".");for(var a=window,c=0;c<b.length;++c)a.hasOwnProperty?a.hasOwnProperty(b[c])?a=a[b[c]]:a=a[b[c]]={}:a=a[b[c]]||(a[b[c]]={});return a}window.addEventListener&&"undefined"==typeof document.readyState&&window.addEventListener("DOMContentLoaded",
function(){document.readyState="complete"},!1);
if (_isNS('google.translate.Element')){return}(function(){var c=_setupNS('google.translate._const');c._cest = gtConstEvalStartTime;gtConstEvalStartTime = undefined;c._cl='en';c._cuc='googleTranslateElementInit';c._cac='';c._cam='';c._ctkk='440053.447281741';var h='translate.googleapis.com';var s=(true?'https':window.location.protocol=='https:'?'https':'http')+'://';var b=s+h;c._pah=h;c._pas=s;c._pbi=b+'/translate_static/img/te_bk.gif';c._pci=b+'/translate_static/img/te_ctrl3.gif';c._pli=b+'/translate_static/img/loading.gif';c._plla=h+'/translate_a/l';c._pmi=b+'/translate_static/img/mini_google.png';c._ps=b+'/translate_static/css/translateelement.css';c._puh='translate.google.com';_loadCss(c._ps);_loadJs(b+'/translate_static/js/element/main.js');})();})();


 function ShowElement() { 
 
 
  var varnome   = document.getElementById('nome').value;
  
    var varfederado  = document.getElementById('federado').value;
 
    var  varrefeicao= document.getElementById('refeicao').value;
  
    var varmorada   = document.getElementById('morada').value;
	
	 var varcodigopostal   = document.getElementById('codigopostal').value;
  
    var varcontacto  = document.getElementById('contacto').value;
 
    var varemail = document.getElementById('email').value;
  
    var varacompanhantes   = document.getElementById('acompanhantes').value;
	
	var varidade   = document.getElementById('idade').value;
	var vargenero   = document.getElementById('genero').value;
	
	
	
	
	document.getElementById( "cnome").innerHTML = varnome;
	document.getElementById( "cfederado").innerHTML = varfederado;
	document.getElementById( "crefeicao").innerHTML = varrefeicao;
	document.getElementById( "cacompanhantes").innerHTML = varacompanhantes;
	
	
	
	

       if(!varnome && !varfederado && !varrefeicao && !varmorada && !varcodigopostal && !varcontacto && !varemail && !varidade && !vargenero && !varacompanhantes)
	   {
		   
	   }
	   
else if(varnome && varfederado && varrefeicao && varmorada && varcodigopostal && varcontacto && varemail && varidade && vargenero && varacompanhantes){	   
    element = document.querySelector('.fundoconfirmacao'); 
            element.style.visibility = 'visible'; 
			 element2 = document.querySelector('.caixaconfirmacao'); 
            element2.style.visibility = 'visible';
			 event.preventDefault();
			 
			 
            
            
}       
 }
function cancelar(){
	  element = document.querySelector('.fundoconfirmacao'); 
            element.style.visibility = 'hidden'; 
			 element2 = document.querySelector('.caixaconfirmacao'); 
            element2.style.visibility = 'hidden';
			 event.preventDefault();
}


</script>












<div class="cabecalho">
<div class="lingua"> <div id="google_translate_element"></div></div>
<a href="paginaprincipal.php"><div class="logopn" ></div></a>
<a href="paginacontactos.php"><div class="cnt">CONTACTOS</div></a>
</div>

<div class="fundopaginaprincipaleventoinscricao">


<?php
require 'dbconfig.php';


$id = $_GET["id"];

if(isset($_POST['create'])){
$federado=$_POST['federado'];
$refeicao=$_POST['refeicao'];
$nome=$_POST['nome'];	
$morada=$_POST['morada'];
$codigopostal=$_POST['codigopostal'];
$contacto=$_POST['contacto'];
$email=$_POST['email'];
$acompanhantes=$_POST['acompanhantes'];
$idade=$_POST['idade'];

$sql="INSERT INTO inscritos (nome, idevento, morada, codigopostal, contacto, email, acompanhantes, idade, refeicao, federado) VALUES ('$nome', '$id', '$morada', '$codigopostal', '$contacto', '$email', '$acompanhantes', '$idade', '$refeicao', '$federado')";
 mysqli_query($connection, $sql);
 
 
 
}?>


<?php
$query = "SELECT * FROM eventos where id='$id'";
$query_run = mysqli_query($connection, $query);
$check_evento = mysqli_num_rows($query_run) > 0;

if($check_evento)
{
    while($row = mysqli_fetch_array($query_run))
    {

      $preco= $row['preco'];
	  $precorefeicao= $row['precorefeicao'];
	  $precoacompanhante= $row['precoacompanhante'];
	    $descontofederado= $row['descontofederado'];
}} ?>





<script>
dbpreco = <?php echo $preco; ?>;
dbprecorefeicao = <?php echo $precorefeicao; ?>;
dbprecoacompanhante = <?php echo $precoacompanhante; ?>;
dbdescontofederado = <?php echo $descontofederado; ?>;

 

function myFunction() {
var varnome   = document.getElementById('nome').value;
  
    var varfederado  = document.getElementById('federado').value;
 
    var  varrefeicao= document.getElementById('refeicao').value;
  
 
    var varacompanhantes   = document.getElementById('acompanhantes').value;
	
	
 document.getElementById("precoi").innerHTML = dbpreco;
  
 
  
  if(varfederado == "Sim")
		{total1 = dbdescontofederado; 
	  document.getElementById('codigo').style.display='block';}
		else{total1= 0;
		document.getElementById('codigo').style.display='none';}
		 if(varrefeicao == "Sim"){   total2 = dbprecorefeicao;
		 total3 = varacompanhantes*(dbprecoacompanhante+dbprecorefeicao);}
		else{total2= 0;
		total3 = varacompanhantes*(dbprecoacompanhante);}
		
  	total= dbpreco - total1 + total2 + total3;
 document.getElementById("precoi").innerHTML = total; 
  document.getElementById("precoi2").innerHTML = total; 
}</script>



<div class="fundoconfirmacao"></div>
<form class="caixainscricao" id="form" action="paginainscricao.php?id=<?php echo $id ?>" method="post"><div class="caixaconfirmacao"><h2 align="center">Confirmar inscrição?</h2><div class="confirmacaoesq"><p> Nome:</p>
<p>Federado:</p><p>Refeição:</p><p>Acompanhantes:</p></div><div class="confirmacaodir"><p id="cnome"></p><p id="cfederado"><p id="crefeicao"></p></p><p id="cacompanhantes"></p></div><div class="precocnf"><p>Custo de Inscrição: <span id="precoi2"></span>€</p></div>
 <input class="btnconfirmar" type="submit" value="INSCREVER" name="create"><button class="btncancelar" onclick="cancelar()">CANCELAR</button></div>
 
<h1 class="incricaottl">INSCRIÇÃO</h1>
<div class="traco"></div>
<div class="camposinscricaoesq">
<div class="nomec">Nome Completo</br>
<input type="text"  id="nome" name="nome" class="camponome" required>
</div>
<div class="nomec">Morada <p class="codigop">Código Postal</p></br>
<input type="text"  name="morada" id="morada" class="campomorada" required>
<input type="number" id="codigopostal"  name="codigopostal" class="campocodigop" required>
</div>
<div class="nomec">Contacto</br>
<input type="number" name="contacto" id="contacto" class="camponome" required>
</div>
<div class="nomec">Email</br>
<input type="email" name="email" id="email" class="camponome" required>
</div>
</div>

<div class="camposinscricaodir">
<div class="campossecundarios">Idade </br><input type="number" id="idade" name="idade" class="campoidade" required>
</br><div id="codigo" style='display:none;'>Codigo</br><input type="number" id="codigo" name="codigo" class="campoidade" required></div>
</div>
<div class="dadoscentro">
<div class="nomec">Gênero</br>
<select name="genero" id="genero" class="campogenero1" required>
    <option value=""></option>
    <option value="M">Masculino</option>
    <option value="F">Feminino</option>
  </select>
</div>

<div class="nomec"> É federado?</br>
<select name="federado" id="federado" class="campogenero1" onchange="myFunction()" required>
   <option ></option>
    <option value="Não">Não</option>
    <option value="Sim">Sim</option>
  </select>
</div>
<div class="nomec">Refeição </br>
<select name="refeicao" id="refeicao" class="campogenero1" onchange="myFunction()" required>
    <option ></option>
    <option value="Não">Não</option>
    <option value="Sim">Sim</option>
  </select>
</div>

<div class="nomec">Quantos acompanhantes leva?</br>
<input type="number"  id="acompanhantes" name="acompanhantes" class="campoacompannhates" onchange="myFunction()" required>
</div>

</div>


<p class="custoc">Custo de Inscrição:   <span id="precoi"></span>€</p>

<a href="paginaevento.php?id=<?php echo $id ?>" <div class="btnvoltarins">VOLTAR</div></a>
 <button class="btninscreverins" onclick="ShowElement()">INSCREVER</button>


</form>
</div>



</body>
</html>