<?php 
include 'Conexion.php';
$where="";
if (!empty($_POST)) {
    $valor = $_POST['buscar'];
    if(!empty($valor)){
        $where = "WHERE id_usuario LIKE '%$valor%' ";
    }
}
$consulta = "SELECT * FROM liquidacion  $where";
$resultado = $conecta->query($consulta);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="08Liquidacion.css">
    <title>Liquidación</title>
</head>
<body>
    <h2>Jesus David Gomez Amortegui</h2>
    <a href="02inicio.html">Regresar</a>
    <h1>  Liquidacion </h1>

    <div class="col-sm-12 col-md-12 col-lg-12">
        <form class="" action="<?php echo $_SERVER['PHP_SELF'];     ?>" method="post">
            <input type="text" name="buscar" class="form-control"placeholder="INGRESE ID"><br>
            <input type="submit" name="buscando" value="Buscar" class="btn-block btn-sm btn-success">
        </form>
        <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="table-responsive">
                <table class="table">
                    <thead class="text_muted">
                        <th>ORDEN DE TRABAJO</th>
                        <th>ID USUARIO</th> 
                        <th>PAQUETE</th>
                        <th>SERVICIOS</th>
                        <th>COD TARIFA</th>
                        <th>COMISION</th>
                    </thead>
                    <tbody>
                        <?php while($row = $resultado->fetch_assoc()){?>
                        <tr>
                            <td><?php echo $row['orden_trabajo'];?></td>
                            <td><?php echo $row['id_usuario'];?></td>
                            <td><?php echo $row['paquete'];?></td>
                            <td><?php echo $row['servicios'];?></td>
                            <td><?php echo $row['cod_tarifa'];?></td>
                            <td><?php echo $row['comision'];?></td>

                        </tr>
                        <?php } ?>
                        <?php 
include '08liquidacionformulario1.php';
$where="";
if (!empty($_POST)) {
    $valor = $_POST['buscar'];
    if(!empty($valor)){
        $where = "WHERE id_usuario LIKE '%$valor%' ";
    }
}
$consulta = "SELECT * FROM bonos_descuentos $where";
$resultado = $conecta->query($consulta);
?>
<body>
                        <table class="table">
                    <thead class="text_muted">
                        <th>ID USUARIO</th>
                        <th>TIPO DE BONO</th> 
                        <th>TIPO DE DESCUENTO</th>
                        <th>VALOR</th>
                        <th>PAGO</th>
                    </thead>
                    <tbody>
                        <?php while($row = $resultado->fetch_assoc()){?>
                        <tr>
                            <td><?php echo $row['id_usuario'];?></td>
                            <td><?php echo $row['Tipo_bono'];?></td>
                            <td><?php echo $row['Tipo_descuento'];?></td>
                            <td><?php echo $row['valor'];?></td>
                            <td><?php echo $row['pago'];?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
</body>
</html>