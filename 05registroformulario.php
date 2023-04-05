<html>
<html>
<head>
<title>Pagina 2 en PHP para la conexion
con el Codigo de MYSQL </title>
</head>
<body>
<?php

    $conexion = mysqli_connect("localhost:3307","root", "", "Telcomundo") or die("Problemas con la conexión");
    $colsulta= mysqli_query($conexion,"insert into venta(orden_trabajo,id_usuario,id_tarifa,id_cliente) 
    values($_REQUEST[orden_trabajo],'$_REQUEST[id_usuario]',$_REQUEST[id_tarifa],'$_REQUEST[id_cliente]')") 
    or die("Problemas en el select".mysqli_error($conexion));
    mysqli_close($conexion);
    echo '<script language="javascript">alert("La venta fue registrada");</script>';


?>
</body>
</html>