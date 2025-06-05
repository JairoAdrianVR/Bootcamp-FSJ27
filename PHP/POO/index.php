<?php 

//Variables Reservadas de PHP -> Variables SUPERGLOBALES
// $_FILES -> Manejo de archivos subidos por el cliente
// $_GET -> Manejo de datos enviados por el cliente
// $_POST -> Enviar datos a traves de un formulario llenado por el cliente
// $_SESSION -> Manejar las sesiones de los usuarios
// $_COOKIE -> Manejar las cookies del navegador del cliente
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica de variables</title>
</head>
<body>
    <h1> Practica de variables superglobales</h1>

    <form action="/POO/procesamientoDatos.php" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required>
        
        <label for="edad">Edad:</label>
        <input type="number" name="edad" id="edad" required>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>

