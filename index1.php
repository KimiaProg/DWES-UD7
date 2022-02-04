<?php 
// Instanciamos un nuevo servidor SOAP
$uri="http://192.168.129.91/DWS/DWES-UD7";
$server = new SoapServer(null,array('uri'=>$uri));
$server->addFunction("suma");
$server->handle();

function suma($n1,$n2) {
   return $n1+$n2;
}
?>