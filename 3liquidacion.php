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
    <title>VALIDAR LIQUIDACION</title>
</head>
<body>
<header>
      <nav>
        <a class="ultimos" href="02inicio.html">Regresar</a>
      </nav>
    </header>
    <main>
      <h1>VALIDADOR DE LIQUIDACION</h1>
      <div class="Login">
    <form action="Registrarbonos.php" method="post">
            
        <div class='field'>
            <input type="number" name="id_usuario" size="40" placeholder="Asesor">
        </div>
        <div class='field'>
            <input type="text" name="id_comision" size="40" placeholder="id_comision">
        </div>
        
        
        <div class='submit'>
          <button>
            CONSULTAR 
          </button>

      </form>
      </div>
    
    
                
                
       
      
 </table>
</body>
</html>