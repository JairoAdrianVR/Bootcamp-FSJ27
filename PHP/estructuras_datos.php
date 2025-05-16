<?php 
/*
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
    } */

    //Lista Enlazada -> SIMPLE
/*
    class Node{ 
        public $value;
        public $next;

        public function __construct($data){
            $this->value = $data;
            $this->next = null;
        }
    }

    class LinkedList{
         public $head; // Cabeza de la lista

        function __construct(){
            $this->head = null;
         }

        function insert($data){
        $newNode = new Node($data); //Creamos un nuevo nodo 
        
        if($this->head === null){ //Si la cabeza de la lista esta vacio, significa que no hay nodo
            $this->head = $newNode; //Asignamos el nuevo nodo a la cabeza de la lista
        }else{
            $current = $this->head;

            //Recorremos la lista hasta llegar al final
            while( $current->next !== null){
                //Si el siguiente no es null, significa que hay un nodo y nos movemos al siguiente
               $current =  $current->next;

            }
            //Cuando el siguiente es null, significa que llegamos al final de la lista y agregamos el nuevo nodo
            $current->next = $newNode;
        }

        }

    }
*/
    // Arboles Binarios

    class Node{
        public $value;
        public $left;
        public $right;

        function __construct($data){
            $this->value = $data;
            $this->left = null;
            $this->right = null;
        }
    }

    class BinaryTree{
        public $root; 

        function __construct(){
            $this->root = null;
        }

        function insert($data){
            $newNode = new Node($data);


            if($this->root === null){
                $this->root = $newNode;
                return $this->root;
            }

            $current = $this->root;

            while(true){

            
            if($newNode->value > $current->value){
                if($current->right === null){
                   $current->right = $newNode;
                    return $newNode;
                } else{
                    $current = $current->right;
                }
            }else{ 
                if($current->left === null){
                    $current->left = $newNode;
                    return $newNode;
                }else{
                    $current = $current->left;
                }
            }
            
            }
        }
    }

    $arbolito = new BinaryTree();
    $arbolito->insert(5);
    $arbolito->insert(3);
    $arbolito->insert(2);
    $arbolito->insert(8);
    $arbolito->insert(7);
    $arbolito->insert(4);
    print_r($arbolito);
?>