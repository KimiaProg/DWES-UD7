<?php

function procesar(){
    include_once "./model/ciudadModel.php";
    $uri="http://localhost/DWS/DWES-UD7/eje4Servidor/controllers/";
    $server = new SoapServer(null,array('uri'=>$uri));
    $server->addFunction("getCiudades");
    $server->addFunction("setCiudades");
    $server->handle();
}

?>