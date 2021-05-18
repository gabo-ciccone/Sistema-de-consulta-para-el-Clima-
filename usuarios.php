<?php
session_start();
$varsesion = $_SESSION ['correo'];

if ($varsesion == null || $varsesion = ''){
    echo 'usted no tiene autorizacion';
    die();
}
include 'conexion-db.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/usuarios.css">

</head>
<body>
    
    <h1>Lista de usuarios en el sistema</h1>
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
    <div id="main-container">

            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Correo electronico</th>
                    </tr>
                </thead>
            <?php
            $sql="SELECT * FROM datos";
            $result = mysqli_query($conexion, $sql);
            while($mostrar=mysqli_fetch_array($result)){
                ?>
            <tr>
            <td><?php echo $mostrar ['id'] ?></td>
            <td><?php echo $mostrar ['nombre'] ?></td>
            <td><?php echo $mostrar ['correo'] ?></td>
            </tr>
            <?php
            }
            ?>
            </table>
    </div>
</body>
</html>