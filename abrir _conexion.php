<?php

$host = "localhost:3307";
$basededatos = "telcomundo";
$usuario = "root";
$clavedb = "";

$tabla1 = "Liquidacion";

error_reporting(0);

$conexion = new mysqli($host,$usuario,$clavedb,$basededatos);

if ($conexion->connect_errno) {
    echo "Nuestro sitio experimenta fallos...";
    exit ();
}
?>