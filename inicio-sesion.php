<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesion</title>
    <link rel="stylesheet" href="css/estilos.css">
    <script>
/**function comprobarClave(){
    contraseña = document.f1.contraseña.value
    contraseña2 = document.f1.contraseña2.value

    if (contraseña == contraseña2)
       alert("Iniciando sesion")
    else
       alert("La contraseña no coinciden")
       header("location:inicio-sesion.php");
       
} 
</script>
</head>
<body>
    <form action="validar-dts.php" method="post" name="f1" class="form-register">
        <h1 class="form__titulo">Bienvenido</h1>
        <div class="contenedor-inputs">
            <section>
                <p>Correo Electronico<input type="email" name="correo" id="correo" placeholder="usuario@correo.com.mx" class="input-100" required></p> 
                <p>Contraseña <input type="password" name="contraseña" id="contraseña" placeholder="ingrese su contraseña" class="input-100" required></p>
               <p> ㅤㅤㅤㅤ<input type="submit" value="Iniciar sesion" class="btn-enviar"></P>
                <p class="form_link">¿No tienes cuenta? ㅤㅤㅤ <a href="registro.php">Registrarme</a></p>
            </section>
        </div>
    </form>
</body>
</html>