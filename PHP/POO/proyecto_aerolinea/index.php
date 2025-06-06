<?php

// Diferencias para incluir archivos en PHP
// include -> Incluye el archivo y si no existe, muestra un error pero sigue ejecutando el codigo
// require -> Incluye el archivo y si no existe, muestra un error y detiene la ejecucion del codigo

//require_once -> Incluye el archivo una sola vez, si se vuelve a llamar no lo incluye de nuevo
//include_once -> Incluye el archivo una sola vez, si se vuelve a llamar no lo incluye de nuevo

require_once './Aerolinea.php';


//Crear una aerolinea 

if(isset($_POST['nombre_aerolinea'],$_POST['cantidad_aviones'],$_POST['tipo_aerolinea']) ){
     print_r($_POST);
    
    $nombre = $_POST['nombre_aerolinea'];
    $cantidad = $_POST['cantidad_aviones'];
    $tipo = $_POST['tipo_aerolinea'];

    $aerolinea = new Aerolinea($nombre,$cantidad,$tipo);
    print_r($aerolinea);

 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aerolinea Jairito</title>
</head>
<body style="background-color: gray;"> 
    <h1>Bienvenido a Aerolineas Jairito, HOLIWIS</h1>


        <!-- FORMULARIO DE CREACION DE AEROLINEA -->
    <form action="" method="POST">
        <label>Nombre Aerolinea: </label>
        <input type="text" name="nombre_aerolinea" id="nombre_aerolinea" required>

        <label>Cantidad de Aviones: </label>
        <input type="number" name="cantidad_aviones" id="cantidad_aviones" required>

        <label>Tipo de Aerolinea: </label>
        <select name="tipo_aerolinea" id="tipo_aerolinea" required>
            <option value="Comercial">Comercial</option>
            <option value="Privado">Privado</option>
            <option value="Carga">Carga</option>
        </select>
            <button type="submit">Enviar</button>
        </form>
</body>
</html>