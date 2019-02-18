<?php
//clase donde se encuentran las querys de peticion a la bbdd
include_once 'database.php';
class vuelos extends database{
  //obtiene todos los vuelos
    function obtenerVuelos(){
        $query = $this->connect()->query('SELECT * FROM vuelos');
        return $query;
    }
    //obtiene los vuelos con plazas libres
    function obtenerFree(){
        $query = $this->connect()->query('SELECT * FROM vuelos WHERE plazas_libres > 0');
        return $query;
    }
}
?>
