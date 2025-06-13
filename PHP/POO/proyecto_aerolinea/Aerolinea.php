<?php 

    class Aerolinea {
      //Encapsulacion o encapsulamiento -> Limita el acceso a los atributos de la clase
    private $id_aerolinea;
    private  $nombre_aerolinea;
    private  $cantidad_aviones;
    private  $tipo_aerolinea;

    //Constructor -> Metodo especial que se ejecuta al crear un objeto de la clase
     public function __construct($id_aerolinea ,$nombre_aerolinea, $cantidad_aviones, $tipo_aerolinea) {
         $this->id_aerolinea = $id_aerolinea;
         $this->nombre_aerolinea = $nombre_aerolinea;
         $this->cantidad_aviones = $cantidad_aviones;
         $this->tipo_aerolinea = $tipo_aerolinea;
     }

     // Getters
     public function getIdAerolinea(){
        return $this->id_aerolinea;
     }

     public function getNombreAerolinea() {
         return $this->nombre_aerolinea;
     }

     public function getCantidadAviones() {
         return $this->cantidad_aviones;
     }

     public function getTipoAerolinea() {
         return $this->tipo_aerolinea;
     }

     // Setters
     public function setNombreAerolinea($nombre_aerolinea) {
         $this->nombre_aerolinea = $nombre_aerolinea;
     }

     public function setCantidadAviones($cantidad_aviones) {
         $this->cantidad_aviones = $cantidad_aviones;
     }

     public function setTipoAerolinea($tipo_aerolinea) {
         $this->tipo_aerolinea = $tipo_aerolinea;
     }

    }

?>