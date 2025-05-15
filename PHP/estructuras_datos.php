<?php 

    //Estructuras de datos

    //Arrays

    //Declaracion 
    $array = [];

    //$arraycito = array();

    //$arrayObj = new ArrayObject('',)

    //METODOS DE ARRAYS

    //Saber el largo de un array 
    $largor = count($array);

    //Agregar un elemento al final del array
    array_push($array,10);
    array_push($array,30);

    //Agregar un elemento al principio del array
    array_unshift($array,"Holiwis");

    //Eliminar el ultimo elemento del array
    array_pop($array);

    //Eliminar el primer elemento del array
    array_shift($array);
    
    //Imprimir datos complejos
    print_r($array);

    //Arrays indexados
    $arrayIndexado = [1,2,3,4,5];

    //Arrays asociativos
    $arrayAsociativo = [
        "nombre" => 'Jairo',
        "apellido" => 'Gonzalez',
        "edad" => 23,
        "ciudad" => 'Cali',
        "pais" => 'Colombia'
    ];

    //Array multidimensional
    $arrayMultidimensional = [
        "nombre" => 'Jairo',
        "apellido" => 'Gonzalez',
        "edad" => 23,
        "ciudad" => 'Cali',
        "pais" => 'Colombia',
        "hobbies" => [
            "programar",
            "jugar",
            "leer",
            'otros' => [
                "videojuegos" => [
                    "LOL",
                    "DOTA",
                    "CSGO"
                ]
            ]
        ]
    ];

    print_r($arrayIndexado);
    print_r($arrayAsociativo);


    //Clases y Objetos

    class Persona{
        //Propiedad o atributo
        public $nombre; 

        //Constructor -> Este se ejecuta cuando se instancia la clase e inicializa la propiedad
        public function __construct($nombre)
        {
            $this->nombre = $nombre;
        }

        //Metodo
        public function respirar(){
            return "Soy $this->nombre y estoy respirando";
        }
    }


    //  Instanciar la clase
    $persona = new Persona("Jairo");
    print_r($persona);


    // Stack -> LIFO -> Last In First Out
    class Stack {
        public $stack = [];

        function add($elemento){
            array_push($this->stack, $elemento);
        }

        function remove(){
            return array_pop($this->stack);
        }

    }

    // Queue -> FIFO -> First In First Out

    class Queue {
        public $queue = [];

        function add($elemento){
            array_push($this->queue, $elemento);
        }

        function remove(){
            return array_shift($this->queue);
        }
    }
?>