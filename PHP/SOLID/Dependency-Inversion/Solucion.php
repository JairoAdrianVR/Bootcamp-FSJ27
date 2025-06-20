<?php 
    //Los modulos de alto nivel no deben depender de los de bajo nivel
    //Sino que ambos deben depender de abstracciones 

    interface IAdaptador{
        function connect();
    }

    class ConexionBD{
        //Representacion de una base de datos

        private $adaptador;

        function __construct(IAdaptador $bdParam)
        {
            $this->adaptador = $bdParam;
        }

        function conectarBD(){
            $this->adaptador->connect();
        }
    }

    class MySQL implements IAdaptador{
        //credenciales 
        function connect(){
            //Metodo para conectar a la base con las credenciales
        }
    }

    class Firebase implements IAdaptador{
        //credenciales 
         function connect(){
            //Metodo para conectar a la base con las credenciales
        }
    }
?>