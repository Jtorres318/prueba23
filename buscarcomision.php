<?php 
include 'Conexion.php';
$where="";
if (!empty($_POST)) {
    $valor = $_POST['buscar'];
    if(!empty($valor)){
        $where = "WHERE orden_trabajo LIKE '%$valor%' ";
    }
}
$consulta = "SELECT * FROM comision $where";
$resultado = $conecta->query($consulta);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="08Liquidacion.css">
    <title>buscar comision</title>
</head>
<body>
    <h2>Jesus David Gomez Amortegui</h2>
    <a href="02inicio.html">Regresar</a>
    <h1>  BUSCAR COMISION</h1>

    <div class="col-sm-12 col-md-12 col-lg-12">
        <form class="" action="<?php echo $_SERVER['PHP_SELF'];     ?>" method="post">
            <input type="text" name="buscar" class="form-control"placeholder="INGRESE orden_trabajo"><br>
            <input type="submit" name="buscando" value="Buscar" class="btn-block btn-sm btn-success">
        </form>
        <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="table-responsive">
                <table class="table">
                    <thead class="text_muted">
                        <th>comison</th> 
                        <th>usuario</th>
                        <th>bono</th>
                        <th>orden de trabajo</th>
                        <th>valor</th>
                    </thead>
                    <tbody>
                        <?php while($row = $resultado->fetch_assoc()){?>
                        <tr>
                            <td><?php echo $row['id_comision'];?></td>
                            <td><?php echo $row['id_usuario'];?></td>
                            <td><?php echo $row['id_bono'];?></td>
                            <td><?php echo $row['orden_trabajo'];?></td>
                            <td><?php echo $row['valor'];?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>
</html>