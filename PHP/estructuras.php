<?php 

 // Estructuras condicionales o de control

 $condicion = true;
//IF else
 if($condicion){
        echo "La condicion es verdadera";
 } else{
        echo "La condicion es falsa";
 }

//SWITCH
 $opcion = 1;

    switch($opcion){
            case 1:
                echo "La opcion es 1";
                break;
            case 2:
                echo "La opcion es 2";
                break;
            default:
                echo "La opcion no es valida";
                break;
    }

    //Ternario
    $ternario = $opcion === 1 ? "La opcion es 1" : "La opcion no es 1";


    //Estructuras repetitivas bucles
    //Do While
    do{
        echo "Holiwis";
        $opcion = 2;
    } while($opcion === 1);

    //While
    while($opcion === 1 ){
        echo "Holiwis";
        $opcion = 2;
    }

    //For
    for($i = 0; $i < 10; $i++){
        echo "Holiwis";
    }

    

?>