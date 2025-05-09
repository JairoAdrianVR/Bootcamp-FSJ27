<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indice de PHP</title>
</head>
<body>
    <h1>HOLIWIS</h1>
    <h1>HOLIWIS</h1>

    <?php 
    // PHP ES UN LENGUAJE DE PROGRAMACION QUE ES COMPILADO POR APACHE QUE ES SU INTERPRETE O TRADUCTOR
    // ESTA ORIENTADO A OBJETOS OSEA QUE FUNCIONA POR POO o OOP
 /*
    COMENTARIO
    MULTILINEA
 */
    // Salto de linea en el navegador
    echo "<h2>Holiwis con echo</h2> <br>";
    
    //Salto de linea en la terminal
    echo "Como andis?"."\n"; 

    echo "Re bien"."\n";

    //Variables en PHP
   $variablesita = "Holiwis";
   print($variablesita."\n");

   //Template String de PHP
    $templateString = "{$variablesita} como andis? \n";
    print($templateString);


    //Operadores matematicos
    $suma = 5+5;
    $resta = 3-1;
    $multiplicacion = 3*3;
    $division = 10/2;
    $modulo = 10%3;


    //Operadores de comparacion
    // Compara valor
    $igualdad = 5 == "5"; //true
    // Compara valor y tipo de dato
    $igualdadEstricta = 5 === "5"; //false

    //Compara si los valores son diferentes
    $diferente = 5 != "5"; //false

    //Compara si los valores y el tipo de dato son diferentes 
    $desigualdadEstricta = 5 !== "5"; //true

    //Operadores Logicos
    // AND &&
    // OR ||
    // NOT !

    //Funciones
    //Funcion expresada
    function Saludar($nombre){
        return "Hola $nombre";
    }

    echo Saludar("Jairo");

    //Funciones anonimas
    $despedir = function($nombre){
        return "Chauchis $nombre";
    };

    //Funciones flecha

    $flechita = fn() => "Soy una funcion flecha";
    
    //Ejecutar funciones
    echo Saludar("Jairo");
    echo $despedir("Jairo");
    ?>

</body>
</html>