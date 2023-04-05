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
      <h1>REGISTRAR DESCUENTOS</h1>
      <div class="Login">
    <form action="Registrarbonos.php" method="post">
            
        <div class='field'>
            <input type="number" name="cedula" size="40" placeholder="cedula">
        </div>
        <div class='field'>
            <input type="text" name="Observacion" size="40" placeholder="Observacion">
        </div>
        <div class='field'>
            <input type="number" name="valor" size="20" placeholder="valor">
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