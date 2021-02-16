<!DOCTYPE html>
<html class="noscroll">
<head>


<title>Evento</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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



<script>$(function($) {
	
$('[data-numeric]').payment('restrictNumeric');
$('.cc-number').payment('formatCardNumber');
$('.cc-exp').payment('formatCardExpiry');
$('.cc-cvc').payment('formatCardCVC');
$.fn.toggleInputError = function(erred) {
this.parent('.form-group').toggleClass('has-error', erred);
return this;
};
$('form').submit(function(e) {
e.preventDefault();
var cardType = $.payment.cardType($('.cc-number').val());
$('.cc-number').toggleInputError(!$.payment.validateCardNumber($('.cc-number').val()));
$('.cc-exp').toggleInputError(!$.payment.validateCardExpiry($('.cc-exp').payment('cardExpiryVal')));
$('.cc-cvc').toggleInputError(!$.payment.validateCardCVC($('.cc-cvc').val(), cardType));
$('.cc-brand').text(cardType);
$('.validation').removeClass('text-danger text-success');
$('.validation').addClass($('.has-error').length ? 'text-danger' : 'text-success');
});
});</script>
<div class="padding">
    <div class="row">
        <div class="container-fluid d-flex justify-content-center">
            <div class="col-sm-8 col-md-6">
                <div class="card caixapagamento" >
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6 " > <span>CREDIT/DEBIT CARD PAYMENT</span> </div>
                            <div class="col-md-6 text-right" style="margin-top: -5px;"> <img src="https://img.icons8.com/color/36/000000/visa.png"> <img src="https://img.icons8.com/color/36/000000/mastercard.png"> <img src="https://img.icons8.com/color/36/000000/amex.png"> </div>
                        </div>
                    </div>
                    <div class="card-body" style="height: 350px">
                        <div class="form-group"> <label for="cc-number" class="control-label">CARD NUMBER</label> <input id="cc-number" type="tel" class="input-lg form-control cc-number campopagamento" autocomplete="cc-number" placeholder="•••• •••• •••• ••••" required> </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group"> <label for="cc-exp" class="control-label">CARD EXPIRY</label> <input id="cc-exp" type="tel" class="input-lg form-control cc-exp campopagamento" autocomplete="cc-exp" placeholder="•• / ••" required> </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group"> <label for="cc-cvc" class="control-label">CARD CVC</label> <input id="cc-cvc" type="tel" class="input-lg form-control cc-cvc campopagamento" autocomplete="off" placeholder="••••" required> </div>
                            </div>
                        </div>
                        <div class="form-group"> <label for="numeric" class="control-label">CARD HOLDER NAME</label> <input type="text" class="input-lg form-control campopagamento"> </div>
                        <div class="form-group"> <input value="MAKE PAYMENT" type="button" class="btn btn-success btn-lg form-control butaopagar" style="font-size: .8rem;"> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




</div>
</body>
</html>




































































