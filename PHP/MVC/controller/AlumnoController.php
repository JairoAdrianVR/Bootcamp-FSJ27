<?php 
    require_once './config/database.php';
    require_once './models/Alumno.php';

    class AlumnoController{
        public $alumno;
        public $db;

        public function __construct()
        {
            $database = new Database();
            $this->db = $database->getConnection();
            $this->alumno = new Alumno($this->db);
        }

        public function read(){
            // Logica para Leer alumnos
            $sentence = $this->alumno->read();
            $alumnos = $sentence->fetchAll(PDO::FETCH_ASSOC);
            include './views/home.php';
        }

        public function create(){
            //Logica para crear alumnos
            print("Holiwis");
            
            if($_SERVER['REQUEST_METHOD'] == "POST"){
                print_r($_POST);
            }


            include './views/create.php';
        }

        public function update($id){
                //Logica para actualizar alumno

        }

        public function delete($id){
                //Logica para eliminar alumno

        }

    }

?>