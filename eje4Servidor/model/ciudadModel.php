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
   $sql->bindParam(":poblacion", $poblacion);
   $sql->execute();
   $filas = [];
   while ($fila = $sql->fetch()) {
      $filas[] = $fila;
   }
   $con = null;
   return $filas;
}

?>