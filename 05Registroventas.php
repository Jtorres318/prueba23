
<?php
$conexion = mysqli_connect("localhost:3307","root", "", "Telcomundo") or die("Problemas con la conexión");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
	<link href="formulario1.css" rel="stylesheet" type="text/css" />
	<link href="formulario2.css" rel="stylesheet" type="text/css" />
	<link href="formulario3.css" rel="stylesheet" type="text/css" />
    <title>REGISTRAR VENTAS</title>
</head>
<body>
<header>
      <nav>
        <a class="ultimos" href="02inicio.html">Regresar</a>
      </nav>
    </header>
    <main>
      <h1>REGISTRAR VENTAS</h1>
      <div class="Login">
    <form action="05registroformulario.php" method="post">
            
        <div class='field'>
            <input type="number" name="orden_trabajo" size="40" placeholder="orden_trabajo">
        </div>
        <div class='field'>
            <input type="text" name="id_usuario" size="40" placeholder="usuario">
        </div>
        <div class='field'>
            <input type="number" name="id_tarifa" size="20" placeholder="codigo tarifa">
        </div>
        <div class='field'>
            <input type="text" name="id_cliente" size="20" placeholder="cedula cliente">
        </div>
         
        <div class='submit'>
          <button>
            REGISTRAR
          </button>

      </form>
      </div>
    
    
                
                
       
      
 </table>
</body>
</html>