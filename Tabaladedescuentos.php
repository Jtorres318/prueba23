<html>
<head>
<title>Problema</title>
</head>
<body>
<?php

$conexion = mysqli_connect("localhost:3307","root", "", "Telcomundo") or die("Problemas con la conexión");
$colsulta= mysqli_query($conexion,"insert into Descuentos(Cedula,Nombre,Observacion,,valor) 
values('$_REQUEST[Cedula]','$_REQUEST[Nombre]',$_REQUEST[Observacion],'$_REQUEST[valor]',')") 
or die("Problemas en el select".mysqli_error($conexion));
mysqli_close($conexion);
echo '<script language="javascript">alert("El bono fue registrado");</script>';
?>
</body>
</html>