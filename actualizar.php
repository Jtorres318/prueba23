
<?php
if(isset($_POST['actualizar'])){
    $conexion = mysqli_connect("localhost:3307","root", "", "telcomundo") or die("Problemas con la conexión");

    $registros = mysqli_query($conexion, "UPDATE usuario 
    SET id_usuario =$_REQUEST[Id],nombre ='$_REQUEST[nombres]',
    apellido='$_REQUEST[apellidos]',correo='$_REQUEST[correo]',tel =$_REQUEST[Telefono]
    Where id_usuario=$_REQUEST[Id] ") 
    or die("Problemas en el select:" . mysqli_error($conexion));

    if($registros ==TRUE){
        echo"la actualizacion fue correcta";
    }else{
        echo"no fue actualizada ";   
    }


}

?>