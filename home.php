<?php
session_start();
$varsesion = $_SESSION ['correo'];

if ($varsesion == null || $varsesion = ''){
    echo 'usted no tiene autorizacion';
    die();
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilo_home.css">

</head>
<body>
    
    <h1>Prueba de conocimientos Full-Stack (Busqueda Meteorologica)</h1>
    <header>

        <nav class="menu">
            
            <ul>
                <li><a href="home.php">Dashboard</a></li>
                <li><a href="usuarios.php">Usuarios</a></li>
                <li><a href="">Bienvenido usuario: <?php echo $_SESSION['correo']?></a></li>
                <li><a class="f" href="cerrar_sesion.php">Cerrar Sesión</a></li>
            </ul>
        </nav>
        
    </header>
   <section id = "contenedor">

       <div class="app-wrap">
           <header>
               <input type="text" autocomplete="off" class="search-box" placeholder="Buscar Ciudad..." />
            </header>
            <main>
                <section class="location">
                    <div class="city">London, GB</div>
                    <div class="date">Martes  18 Mayo del 2021</div>
                </section>
                <div class="current">
                    <div class="temp">10<span>°c</span></div>
                    <div class="weather">Clouds</div>
                    <div class="hi-low">13°c / 16°c</div>
                </div>
            </main>
        </div>

  <script src="css/home.js"></script>

  <div id="main-container">

            <table>
                <thead>
                    <tr>
                        <th>Tareas Pendientes</th>
                        <th>Tareas Completadas</th>
                        <th>Zonas Horarias Disponibles</th>
                    </tr>
                </thead>
           
            <tr>
            <td>
            - Ir al banco <br> - Revisar balance general <br> - Ajustar métricas de diseño
            </td>
            <td>
            <p> - Terminar la prueba <br> - Debuggear codigo <br> - Realizar pruebas unitarias</p>
            </td>
            <td>
            <p> - Terminar la prueba <br> - Debuggear codigo <br> - Realizar pruebas unitarias</p>
            </td>
            </tr>

            </table>
    </div>
</body>
</html>