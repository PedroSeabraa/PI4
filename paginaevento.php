<!DOCTYPE html>
<html class="noscroll">
<head>


<title>Evento</title>
<link rel="stylesheet" href="stylecss.css">
</head>
<body>
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



<div class="cabecalho">
<div class="lingua"> <div id="google_translate_element"></div></div>
<a href="paginaprincipal.php"><div class="logopn"></div></a>
<a href="paginacontactos.php"><div class="cnt">CONTACTOS</div></a>
</div>

<div class="fundopaginaprincipalevento">

<div class="infoevento">

<?php

require 'dbconfig.php';

$id_evento = $_GET["id_evento"];

$query = "SELECT * FROM evento where id_evento='$id_evento'";
$query_run = mysqli_query($connection, $query);
$check_evento = mysqli_num_rows($query_run) > 0;

if($check_evento)
{
    while($row = mysqli_fetch_array($query_run))
    {
       
        
        
        ?><img src="<?php echo $row['foto']?>"  class="card-img-top infimgeve" alt="">
<div class="textoevento2">
<div class="inftitulo"><?php echo $row['nome']?></div>
<div  class="infdata"><?php echo $row['data_inicio']?></div></br>
<div class="infdetalhes"><?php echo $row['descricao']?></div>
</div>
<?php
    }
}

?><a href="paginamapa.php"><div class="bntmapa">LOCALIZAÇÃO</div></a>
<a href="paginaprincipal.php"><div class="btnvoltar">VOLTAR</div></a>
<a href="paginainscricao.php?id=<?php echo $id ?>"><div class="btninscrever">INSCREVER</div></a>
<a href="paginainscritos.php?id=<?php echo $id ?>"><div class="btninscritos">INSCRITOS</div></a>
</div>
</div>
</body>
</html>
