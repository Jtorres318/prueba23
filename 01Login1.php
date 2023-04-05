<?php
include("conexion.php");

if (!empty($_post)) {
  $usuario = mysqli_real_escape_string($conexion, $_POST['id_usuario']);
  $contraseña = mysqli_real_escape_string($conexion, $_POST['contraseña']);
  $sql = "SELECT idusuario FROM usuario WHERE id_usuario = '' AND contraseña ''";
  $resultado = $conexion->query($sql);
  $rows = $resultado->num_rows;
  if ($rows > 0) {
    $row = $resultado->fetch_assoc();
    $_SESSION['id_usuario'] = $row["idusuario"];
    header("02inicio.html"); 
  }else {
    echo "<script>
      alert('usuario o contraseña incorrecta');
      window.location = '01Login1.php';
    </script>";
  }
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login Form Design One | Fazt</title>
    <link rel="stylesheet" href="01Login.css">
  </head>
  <body>

    <div class="Login">
      <img src="t.png" class="avatar" alt="Avatar Image">
      <h1>TELCOMUNDO</h1>
      <form>
        <label for="username">Usuario</label>
        <input type="text" placeholder="Ingresa tu Usuario">
        <label for="password">Contraseña</label>
        <input type="password" placeholder="Ingresa tu contraseña">
        <a href="02inicio.html">Ingresar</a><br>
        <a href="03Olvideclave.html">Olvidaste la contraseña?</a><br>
        <a href="04Registro.html">Registrate</a>
      </form>
    </div>
  </body>

  <footer>
    <div class="container">
     <p>
         Linea:3126262602<br>
         fijo:(601)7850571 <br>
         Direccion:Kr 51 b sur 13 d <br>
         Correo:serviciotc@telcomundo.com.co <br>
         Url:www.telcomundo.com.co 
     </p>   
    </div>

  </footer>
</html>