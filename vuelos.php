<?php
include_once 'database.php';
class vuelos extends database{

    function obtenerVuelos(){
        $query = $this->connect()->query('SELECT * FROM vuelos');
        return $query;
    }
}
?>
