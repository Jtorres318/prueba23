<html>
<head>
<title>Problema</title>
</head>
<body>
<?php

$conexion = mysqli_connect("localhost:3307", "root", "", "telcomundo") or die("Problemas con la conexión");
$consulta = mysqli_query($conexion, "INSERT INTO descuentos (cedula, Observacion, valor) VALUES ('" . $_REQUEST['cedula'] . "', '" . $_REQUEST['Observacion'] . "', '" . $_REQUEST['valor'] . "')") or die("Problemas en el select: " . mysqli_error($conexion));
mysqli_close($conexion);
echo '<script language="javascript">alert("El registro fue exitoso");</script>';
?>
</body>
</html>