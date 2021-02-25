<!DOCTYPE html>
<html class="noscroll">
<head>


<title>Evento</title>
<link rel="stylesheet" href="stylecss.css">
</head>
<body class="fundopaginaprincipalinscritos">
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
</script>

<?php
require 'dbconfig.php';

$id_evento = $_GET["id"];?>

<div class="cabecalho">
<a href="paginaevento.php?id=<?php echo $id_evento ?>"><div class="voltarins">↖ VOLTAR</div></a>
<div class="lingua"> <div id="google_translate_element"></div></div>
<a href="paginaprincipal.php"><div class="logopn"></div></a>
<a href="paginacontactos.php"><div class="cnt">CONTACTOS</div></a>
</div>

<div>

<div class="infoevento">
 <table class="infinscritos">
  <tr>
    <th class="tblt">Nome</th>
    <th class="tblt">Federado</th>
    <th class="tblt">Refeição</th>
	
  </tr>
  
  
<?php



$query = "SELECT * FROM utilizadores where evento_id_evento='$id_evento'";
$query_run = mysqli_query($connection, $query);
$check_evento = mysqli_num_rows($query_run) > 0;

if($check_evento)
{
    while($row = mysqli_fetch_array($query_run))
    {
       
        
        
        ?>
      
<tr>
            <td class="ctbl"> <?php echo $row['nome']?></td>
    
            
            <td class="ctbl"><?php echo $row['federado']?></td>
    
            
           <td class="ctbl">  <?php echo $row['refeicao']?></td>
    </tr>
   

<?php
    }
}
else
{
    
}
?>
</table>

</div>
 

</body>
</html>
