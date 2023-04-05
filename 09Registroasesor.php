<html>
<html>
<head>
<title>Pagina 2 en PHP para la conexion
con el Codigo de MYSQL </title>
</head>
<body>
<?php
if($_REQUEST['contraseña']==$_REQUEST['repetir_contraseña']){
    $contraseña=$_REQUEST['contraseña'];
    $conexion = mysqli_connect("localhost:3307","root", "", "Telco") or die("Problemas con la conexión");
    $colsulta= mysqli_query($conexion,"insert into usuario(identificacion,nombres,
    apellidos,correo,celular,contraseña) 
    values($_REQUEST[identificacion],'$_REQUEST[nombres]',
    '$_REQUEST[apellidos]','$_REQUEST[correo]', $_REQUEST[celular],'$contraseña')") 
    or die("Problemas en el select".mysqli_error($conexion));
    mysqli_close($conexion);
    echo "El cliente fue registrado ";

}else{
    echo "contraseña no concide";
}


?>
</body>
</html>