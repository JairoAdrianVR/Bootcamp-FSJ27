<?php 

    // Algoritmos
    // Pasos para solucionar un problema, deben ser ordenados y finitos

    //Entrada -> Datos (en la vida cotidiana podria ser los materiales para hacer una receta)
    //Salida -> Resultado (en la vida cotidiana el resultado de la receta)

    //Proceso -> Algoritmo 


    //Crea un algoritmo de 10 pasos para agarrar el celular


    // 1. Tenes celular? / Agarrar el celular
    // 2. Saber donde esta / Levantarse de la cama / Detectar donde esta el celular (Buscar)
    // 3. Abrir la mano / Pensar en donde corno esta el cel / Ver si esta al alcance de la mano / Si no se encuentra el celular, pedir a alguien que me llame
    // 4. Agarrar por el celular con 4 dedos en el lado izquierdo/derecho y el pulgar en el lado derecho/izquierdo / Dirigirse a buscar el celular / Si esta al alcance agarrar el cel y sino ir hasta el telefono  / Al sonar el celular ir a buscarlo
    // 5. Cerrar la mano haciendo que quede encima de los 4 dedos y el pulgar como soporte fijo / Ya encontrado, tomar el celular / Abrir la mano para tomar el celular / Una vez encontrado tomarlo con la mano pasada en el parametro
    // 6. Posicionar el dedo indice en la parte inferior para evitar que se caiga / Utilizar el celular / Luego de abrir la mano, alinear la mano para tomar el telefono
    // 7. Separar un poco los 3 dedos para tomar el celular que deberian ser anular, corazon e indice / Colocar los 4 dedos con excepcion del pulgar para irlo sujetando
    // 8, Asegurar que la punta del dedo anular y corazon sostengan el celular por el lado en donde esta el pulgar sosteniendo y mover el indice ligeramente hacia arriba para dar soporte / Cerrar la mano suavemente colocando el pulgar en la pantalla suavemente para tenerlo listo para levantar
    // 9. liberar el pulgar y dejarlo enfrente de la pantalla para usarlo en el celular / Despues de sujetarlo levantarlo en busca de alinearlo a la cara para empezar a usarlo.
    // 10. Levantarlo a una altura correspondiente a los ojos y que no afecte el cuello / Acomodarlo a mi altura para empezarlo a utiizar


    // Algoritmo de ordenamiento tipo Burbuja -> Bubble Sort


    function BubbleSort($arr){

        if(count($arr) <= 1) return "Necesito 2 datos para ordenar con bubbleSort";

        $n = count($arr);

        for($i = 0; $i < $n; $i++){
            //print("ESTE ES EL BUCLE I \n");
            for($j = 0; $j+1 < $n; $j++){
               // print("ESTE ES EL BUCLE J Y EL ARRAY ESTA ASI: \n");
                //print_r($arr);

            if($arr[$j] >$arr[$j+1]){
                $temp = $arr[$j];
                $arr[$j] =  $arr[$j+1];
                $arr[$j+1] = $temp;
            }
            }
        }
        return $arr;
    }


    $arraycito = [8,10,7,5,6];
    print_r(BubbleSort($arraycito));



    // Algoritmo de ordenamiento tipo Insersion -> InsertionSort
    function insertionSort($arr){
        if(count($arr) <= 1 ) return "Necesito 2 datos para ordenar con InsertionSort";


        for($i = 1 ; $i < count($arr); $i++){
            $aux = $arr[$i];

            $j = $i -1;

            while( $j >= 0 && $arr[$j] > $aux ){
                $arr[$j+1] = $arr[$j];
                $j--;
            }
            $arr[$j+1] = $aux;
        }
        return $arr;
    }

    $arrayzote = [6,5,3,1,8,7,2,4];
    print_r(insertionSort($arrayzote));
?>