<?php 

    class Alumno{ 
        public $id;
        public $name;
        public $age;
        public $email;
        public $connection;
        public $table_name = "alumnos";

        public function __construct($db)
        {
            $this->connection = $db;
        }

        public function read(){
            //Logica para leer los alumnos
            $query = "SELECT * FROM {$this->table_name}";
            $sentence = $this->connection->prepare($query);
            $sentence->execute();
            return $sentence;
        }

        public function create(){
           //Logica para crear un alumno
            $query = "INSERT INTO {$this->table_name} (nombre, edad, correo,curso_id) VALUES (?,?,?,?)";
            $sentence = $this->connection->prepare($query);
            $sentence->execute([$this->name,$this->age,$this->email,1]);
            return $sentence;
        }

        public function update(){
            //Logica para actualizar un alumno

        }

        public function findOne($id){
            //Logica para buscar un alumno

        }


        public function delete($id){
            //Logica para eliminar un alumno

        }
    }

?>