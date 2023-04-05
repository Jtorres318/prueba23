<html>
<head>
  <title>Orden De Trabajo</title>
</head>
<body>
  <?php
      $conexion = mysqli_connect("localhost","root","","telcomundo") or
      die("Problemas con la conexion");
      $registros = mysqli_query($conexion, "select * from informe_ventas where orden_trabajo=$_REQUEST[codigo]") or
      die("Problemas en el select:" . mysqli_error($conexion));
      if ($reg = mysqli_fetch_array($registros)) {
        echo "orden_trabajo".$reg['orden_trabajo']."<br>";
        echo "paquete".$reg['paquete']."<br>";
        echo "servicios".$reg['servicios']."<br>";
        echo "estrato".$reg['estrato']."<br>";
        echo "ciudad".$reg['ciudad']."<br>";
        echo "localidad".$reg['localidad']."<br>";
        echo "carrusel".$reg['carrusel']."<br>";
        echo "legalizacion".$reg['legalizacion']."<br>";
        echo "fecha".$reg['fecha']."<br>";
        echo "cod_tarifa".$reg['cod_tarifa']."<br>";
        switch ($reg['orden_trabajo']) {
        }
        } else {
        echo "No existe una orden con ese codigo.";
        }
        mysqli_close($conexion);
        ?>
        </body>
        </html>