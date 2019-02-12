<?php
include_once 'database.php';
class vuelos extends database{
    function obtenerVuelos(){
        $query = $this->connect()->query('SELECT * FROM vuelos');
        return $query;
    }
    function obtenerFree(){
        $query = $this->connect()->query('SELECT * FROM vuelos WHERE plazas_libres > 0');
        return $query;
    }
}
?>
