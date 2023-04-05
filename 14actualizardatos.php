<?php

if(isset($_REQUEST['codigo'])){

  $id = $_REQUEST['codigo'];
    /*error_reporting(0);*/

    $conexion = mysqli_connect("localhost:3307","root", "", "telcomundo") or die("Problemas con la conexión");

    $registros = mysqli_query($conexion, "select * from usuario where id_usuario=$id")
    or die("Problemas en el select:" . mysqli_error($conexion));

    if ($reg = mysqli_fetch_array($registros)) { 

    }
    else{
        echo "
        <script>alert('Usuario no encontrado');
                    window.location = 'buscar.php';    
                </script>
            ";
    }
 
$conexion -> close();


}


?>
<!DOCTYPE html>
<html lang="en">
<head> <link href='formulario1.css' rel='stylesheet' type='text/css' />
	<link href='formulario2.css' rel='stylesheet' type='text/css' />
	<link href='formulario3.css' rel='stylesheet' type='text/css' />
    <title>Actualizar datos</title>
  </head>
  <body>
    <header>
      <nav>
        <a class='ultimos' href='02inicio.html'>Regresar</a>
      </nav>
    </header>
    <main>
    <h1>BIENVENIDO A TELCOMUNDO</h1>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<div class='Login'>
      <form action='actualizar.php' onclick='actualizar.php' method='post'>
        <div class='field'>
          <label>Id</label>
          <input name='Id' type='number' value='<?php echo $reg['id_usuario']; ?>' required autocomplete />
        </div>
        <div class='field'>
          <label>Nombres</label>
          <input name='nombres' type='name'value='<?php echo $reg['nombre']; ?>'  required autocomplete />
        </div>
        <div class='field'>
          <label>Apellidos</label>
          <input name='apellidos' type='name'value='<?php echo $reg['apellido']; ?>'  autocomplete />
        </div>
        <div class='field'>
          <label>Email</label>
          <input name='correo' type='email'value='<?php echo $reg['correo']; ?>'  autocomplete />
        </div>
        <div class='field'>
          <label>Teléfono</label>
          <input name='Telefono' type='number'value='<?php echo $reg['tel']; ?>'  autocomplete />
        </div>
        
        <input name ='actualizar' type='submit' value ='actualizar' >
      </form>
      </div>
    </main>
      </div>
</body>
</html>