<?php
$correo=$_POST['correo'];
$contraseña=$_POST['contraseña'];
//$contraseña2=$_POST["contraseña2"];

/**if($contraseña!==$contraseña){
    echo '<script language="javascript">alert("las contraseñas no coinciden");</script> ';
    echo "<script>location.href='inicio-sesion.php'</script>";
}else { **/

session_start();
$_SESSION['correo']=$correo;

$conexion=mysqli_connect("localhost","root","perez12345","bwl-prueba");

$consulta="SELECT*FROM datos where correo='$correo' and contrasenia='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);                                                                 

if ($filas){
    header("location:home.php");

} else {
    ?>
    <?php
    include("inicio-sesion.php");
    ?>
    <h1 class="bad">Los datos son incorrectos</h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
