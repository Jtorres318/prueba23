<?php 
$servidor = "localhost:3307";
$usuario = "root";
$password = "";
$bd = "Telcomundo";
$conecta = mysqli_connect($servidor,$usuario,$password,$bd);
if($conecta->connect_error){
    die("Error al conectar base de datos".$conecta->error);
}


?>