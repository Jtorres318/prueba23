
<html>
<html>
<head>
<title>Pagina 2 en PHP para la conexion
con el Codigo de MYSQL </title>
</head>
<body>
<?php
if($_REQUEST['contraseña']==$_REQUEST['repetir_contraseña']){   $contraseña=$_REQUEST['contraseña'];
    $conexion = mysqli_connect("localhost:3307","root", "", "telcomundo") or die("Problemas con la conexión");
    $colsulta= mysqli_query($conexion,"insert into usuario(id_usuario,id_rol,nombre, apellido,tel,correo,direccion,contraseña) 
    values($_REQUEST[id_usuario],$_REQUEST[id_rol],'$_REQUEST[nombre]','$_REQUEST[apellido]',$_REQUEST[tel],'$_REQUEST[correo]',
     '$_REQUEST[direccion]','$_REQUEST[contraseña]')") 
    or die("Problemas en el select".mysqli_error($conexion));
    mysqli_close($conexion);
    echo "El cliente fue registrado ";

}else{
    echo "contraseña no concide";
}


?>
</body>
</html>