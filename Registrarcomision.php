
<html>
<head>
<title>Problema</title>
</head>
<body>
<?php

$conexion = mysqli_connect("localhost:3307","root", "", "Telcomundo") or die("Problemas con la conexión");
$colsulta= mysqli_query($conexion,"insert into comision(id_comision,id_usuario,
id_bono,orden_trabajo,valor) 
values('$_REQUEST[id_comision]','$_REQUEST[id_usuario]',$_REQUEST[id_bono],'$_REQUEST[orden_trabajo]',
 '$_REQUEST[valor]')") 
or die("Problemas en el select".mysqli_error($conexion));
mysqli_close($conexion);
echo '<script language="javascript">alert("La comision fue registrada");</script>';
?>
</body>
</html>
