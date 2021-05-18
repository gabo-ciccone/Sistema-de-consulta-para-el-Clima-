<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="css/estilos2.css">
    <script src="validar.js"></script>
    
</head>
<body>
    <form action="validar-reg.php" method="post" class="form-register" onsubmit="return validar();">
        <h1 class="form__titulo">Crear una cuenta</h1>
        <div class="contenedor-inputs">
            
                <p>Correo Electronico
                    <input type="email" name="correo" id="correo" placeholder="usuario@correo.com.mx" class="input-100" required ></p> 
                <p class="mitad-50">Contraseña 
                    <input type="password" name="contraseña" id="contraseña" placeholder="ingrese su contraseña" class="input-50" required></p>
                <p class="mitad-50">Confirmar Contraseña 
                    <input type="password" name="contraseña2" id="contraseña2" placeholder="confirme su contraseña" class="input-50" required></p>
                <p>Nombre Completo
                    <input type="text" name="nombre" id="nombre" placeholder="Angel Damian Martinez Delfin" class="input-100" required></p> 
                    <input type="submit" value="Registrarme" class="btn-enviar">
                <p class="form_link">¿Ya tienes cuenta? ㅤㅤㅤㅤㅤ <a href="inicio-sesion.php">Iniciar sesion</a></p>
            
        </div>
    </form>
</body>
</html>