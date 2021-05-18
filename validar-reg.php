<?php
include 'conexion-db.php';
//recepcion de datos y asignacion de variables 
$correo=$_POST["correo"];
$contrasenia=$_POST["contraseña"];
$nombre=$_POST["nombre"];
//consulta para insertar datos
$insertar = "INSERT INTO datos (nombre, correo, contrasenia) VALUES ('$nombre', '$correo', '$contrasenia')";

$verificar_correo = mysqli_query($conexion, "SELECT * FROM datos WHERE correo = '$correo'");
if (mysqli_num_rows($verificar_correo)>0){
    echo ' <script language="javascript">alert("Este correo ya esta registrado!");</script> ';
    echo "<script>location.href='registro.php'</script>";
    exit;
}

$verificar_nombre = mysqli_query($conexion, "SELECT * FROM datos WHERE nombre = '$nombre'");
if (mysqli_num_rows($verificar_nombre)>0){
    echo ' <script language="javascript">alert("Este usuario ya esta registrado!");</script> ';
    echo "<script>location.href='registro.php'</script>";
    exit;
}

//Ejecutar consulta
$resultado = mysqli_query($conexion, $insertar);

if(!$resultado){
    echo 'Erro al registrar usuario';
} else {
    echo ' <script language="javascript">alert("Usuario registrado con éxito");</script> ';
				echo "<script>location.href='inicio-sesion.php'</script>";
}
//fin conexion
mysqli_close($conexion);			
?>