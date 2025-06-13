<?php

// Diferencias para incluir archivos en PHP
// include -> Incluye el archivo y si no existe, muestra un error pero sigue ejecutando el codigo
// require -> Incluye el archivo y si no existe, muestra un error y detiene la ejecucion del codigo

//require_once -> Incluye el archivo una sola vez, si se vuelve a llamar no lo incluye de nuevo
//include_once -> Incluye el archivo una sola vez, si se vuelve a llamar no lo incluye de nuevo
require_once './Aerolinea.php';
session_start();

//Array auxiliar para guardar aerolineas
if(!isset($_SESSION['aerolineas'])){
    $_SESSION['aerolineas'] = []; 
}

$aerolineas = $_SESSION['aerolineas'];
//Crear una aerolinea 
if(isset($_POST['createForm'])){
    if(isset($_POST['nombre_aerolinea'],$_POST['cantidad_aviones'],$_POST['tipo_aerolinea']) ){
    //print_r($_POST);
    
    $id = rand(0,1000);
    $nombre = $_POST['nombre_aerolinea'];
    $cantidad = $_POST['cantidad_aviones'];
    $tipo = $_POST['tipo_aerolinea'];

    $aerolinea = new Aerolinea($id,$nombre,$cantidad,$tipo);

    array_push($aerolineas,$aerolinea);

    $_SESSION['aerolineas'] = $aerolineas;
    
    header('Location: /PHP/POO/proyecto_aerolinea/index.php');
    }
}



//print_r($aerolineas);

print_r($_GET);

if(isset($_GET['delete'])){
    $id = $_GET['delete']; //Guardamos el valor del id como referencia

    foreach($aerolineas as $key => $aero){ //recorremos el array sacando tanto el indice como el valor

        if($aero->getIdAerolinea() == $id){ //Buscamos si el ID de algun objeto aerolinea es igual al ID del GET
            unset($aerolineas[$key]);  //QUITAMOS ESE VALOR DEL ARRAY
            break; //frenamos el foreach
        }
    }

    $_SESSION['aerolineas'] = $aerolineas; //Actualizamos la sesion con el array sin el dato 

    header('Location: /PHP/POO/proyecto_aerolinea/index.php'); //Redirigimos al index de nuevo
}

function obtenerAerolineaPorID($aerolineasArray, $id){
    foreach($aerolineasArray as $aerolinea){
        if($aerolinea->getIdAerolinea() == $id){
            return $aerolinea;
        }
    }
}
//Editar una aerolinea

if(isset($_POST['updateForm'])){
    foreach($aerolineas as $aerolinea){
        if($aerolinea->getIdAerolinea() == $_POST['id']){
            $aerolinea->setNombreAerolinea($_POST['nombre_aerolinea']);
            $aerolinea->setCantidadAviones($_POST['cantidad_aviones']);
            $aerolinea->setTipoAerolinea($_POST['tipo_aerolinea']);
        }
    }
    header('Location: /PHP/POO/proyecto_aerolinea/index.php');

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

    <?php
        if(isset($_GET['editar'])){
            $aerolineaEditable = obtenerAerolineaPorID($aerolineas,$_GET['editar']);
            print_r($aerolineaEditable);

        ?>
            <!-- FORMULARIO DE EDITAR UNA AEROLINEA -->
             <h2>Editar Aerolinea</h2>
    <form action="" method="POST">
        <input type="hidden" name="updateForm" value="Soy el update">
        <input type="hidden" name="id" value="<?php echo $aerolineaEditable->getIdAerolinea()?>">

        <label>Nombre Aerolinea: </label>
        <input type="text" name="nombre_aerolinea" id="nombre_aerolinea" value="<?php echo $aerolineaEditable->getNombreAerolinea()?>" required>

        <label>Cantidad de Aviones: </label>
        <input type="number" name="cantidad_aviones" id="cantidad_aviones" value="<?php echo $aerolineaEditable->getCantidadAviones()?>"required>

        <label>Tipo de Aerolinea: </label>
        <input name="tipo_aerolinea" id="tipo_aerolinea" value="<?php echo $aerolineaEditable->getTipoAerolinea()?>" required>
            <button type="submit">Enviar</button>
        </form>
<?php
            
    }else{
    ?>

        <!-- FORMULARIO DE CREACION DE AEROLINEA -->
             <h2>Crear una Aerolinea</h2>

    <form action="" method="POST">
        <input type="hidden" name="createFrom" value="Soy el create">

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
<?php 
}
?>

    <!-- TABLA PARA REPRESENTAR LAS AEROLINEAS -->

    <main>
        <table>
            <thead>
                <th>ID</th>
                <th>Nombre</th>
                <th>Cantidad Aviones</th>
                <th>Tipo Aerolinea</th>
                <th>Acciones</th>
            </thead>
            <tbody>
            <?php foreach($aerolineas as $aero) { 
               echo" <tr>
                    <td>{$aero->getIdAerolinea()}</td>
                    <td>{$aero->getNombreAerolinea()}</td>
                    <td>{$aero->getCantidadAviones()}</td>
                    <td>{$aero->getTipoAerolinea()}</td>
                    <td>
                        <a href='?editar={$aero->getIdAerolinea()}'>Editar</a>
                        <a href='?delete={$aero->getIdAerolinea()}'>Eliminar</a>
                    </td>
                </tr>";
                } ?>
                <?php /* for($i = 0; $i< count($aerolineas); $i++){
                    echo" <tr>
                    <td>{$aerolineas[$i]->getNombreAerolinea()}</td>
                    <td>li</td>
                    <td>wi</td>
                    <td>sss</td>
                </tr>";
                };
                */
                ?>

            </tbody>
        </table>

    </main>

</body>
</html>