<title>Problema</title>
</head>
<body>
    <?php
    $conexion = mysqli_connect("localhost:3307","root","","telcomundo") or
    die("Problemas con la conexión");
    $registros = mysqli_query($conexion, "select orden_trabajo,paquete,servicios,estrato,ciudad,localidad,legalizacion,fecha,cod_tarifa,id_usuario,pago
    from Informe_ventas where orden_trabajo=$_REQUEST[orden_trabajo]") or
    die("Problemas en el select:" . mysqli_error($conexion));
    if ($reg = mysqli_fetch_array($registros)) {
    echo "orden_trabajo:". $reg['orden_trabajo']."<br>";
    echo "paquete:".$reg['paquete']."<br>";
    echo "servicios:".$reg['servicios']."<br>";
    echo "estrato:".$reg['estrato']."<br>";
    echo "ciudad:".$reg['ciudad']."<br>";
    echo "localidad:". $reg['localidad']."<br>";
    echo "legalizacion".$reg['legalizacion']."<br>";
    echo "fecha".$reg['fecha']."<br>";
    echo "cod_tarifa".$reg['cod_tarifa']."<br>";
    echo "id_usuario".$reg['id_usuario']."<br>";
    echo "pago".$reg['pago']."<br>";
    } else {
    echo "No existe un usuario con esa identificacion.";
    }
    mysqli_close($conexion);
    ?>
</body>

</html>