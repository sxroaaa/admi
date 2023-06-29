<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="caja_registro" method="POST">
    <?php 
        if(isset($_MESSAGE['crearUsuario'])){?>
        <div class="alert alert-success" role="alert">
            <?=$_SESSION['crearUsuario'] ?>
    <?php
        unset($_SESSION['crearUsuario']);


    } ?>  
    </div>
        <form action="controllers/CrearUsuario.php">
            <p>Crear Usuario</p>
            <input type="text" name="nombre" placeholder="Nombres">
            <input type="text" name="apellido" placeholder="Apellidos" >
            <input type="text" name="doc" placeholder="Documento">
            <input type="password" name="password" placeholder="Contraseña">
            <input type="email" name="email" placeholder="Email"> 
            <input type="number" name=rol placeholder="IdRol">
            <button>Crear Usuario</button>



        </form>



    </div>
</body>
</html>