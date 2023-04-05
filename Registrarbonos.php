<head>
    <title>Problema</title>
</head>
<body>
    <?php
   // Establecer la conexión con la base de datos
   $conexion = mysqli_connect("localhost:3307", "root", "", "telcomundo") or die("Problemas con la conexión");

// Verificar si la conexión se ha establecido correctamente
if (mysqli_connect_errno()) {
    die("Falló la conexión: " . mysqli_connect_error());
}
$id_usuario = $_POST['id_usuario'];
$orden_trabajo = $_POST['id_comision'];
// Ejecutar la consulta SELECT
$consulta = "SELECT id_usuario, id_comision, valor FROM liquidacion WHERE id_usuario = 'id_usuario'
 AND id_comision = 'id_comision'";

if ($resultado = mysqli_query($conexion, $consulta)) {
    // Imprimir los resultados
    while ($fila = mysqli_fetch_assoc($resultado)) {
        echo $fila["id_usuario"] . " | " . $fila["id_comision"] . " | " . $fila["valor"] . "<br>";
    }

    // Liberar el conjunto de resultados
    mysqli_free_result($resultado);
} else {
    echo "Error al ejecutar la consulta: " . mysqli_error($conexion);
}

// Cerrar la conexión
mysqli_close($conexion);
    ?>
</body>


