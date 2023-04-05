<title>Problema</title>
</head>
<body>
    <?php
    $conexion = mysqli_connect("localhost:3307","root","","telcomundo") or
    die("Problemas con la conexión");
    $registros = mysqli_query($conexion, "select id_usuario,nombre,apellido,tel,contraseña,correo,direccion
    from Usuario where id_usuario=$_REQUEST[id_usuario]") or
    die("Problemas en el select:" . mysqli_error($conexion));
    if ($reg = mysqli_fetch_array($registros)) {
    echo "id_usuario:". $reg['id_usuario']."<br>";
    echo "nombre:".$reg['nombre']."<br>";
    echo "apellido:".$reg['apellido']."<br>";
    echo "contraseña:".$reg['contraseña']."<br>";
    echo "correo:".$reg['correo']."<br>";
    echo "direccion:". $reg['direccion']."<br>";
    } else {
    echo "No existe un usuario con esa identificacion.";
    }
    mysqli_close($conexion);
    ?>
</body>

</html>