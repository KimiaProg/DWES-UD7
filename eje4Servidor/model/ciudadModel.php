<?php

function getConnection()
{
   $user = 'root';
   $password = 'root';
   return new PDO('mysql:host=localhost;dbname=ciudades', $user, $password);
}

function getCiudades($poblacion)
{
   $con = getConnection();
   $sql = $con->prepare('SELECT * FROM ciudades where poblacion >= :poblacion');
   $sql->bindParam(":poblacion", intval($poblacion));
   $sql->execute();
   $filas = [];
   while ($fila = $sql->fetch()) {
      $filas[] = $fila;
   }
   $con = null;
   return $filas;
}

function setCiudades($nombre,$poblacion){
   $con = getConnection();
   $sql = $con->prepare('INSERT into ciudades values(null,:nombre,:poblacion)');
   $sql->bindParam(":nombre", $nombre);
   $sql->bindParam(":poblacion", $poblacion);
   $sql->execute();
   $con = null;
}
?>