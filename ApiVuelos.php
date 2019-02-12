<?php
include_once 'vuelos.php';
class ApiVuelos{
    function getAll(){
        $vuelo = new vuelos();
        $vuelos = array();
        $vuelos["items"] = array();
        $res = $vuelo->obtenerVuelos();
        if($res->rowCount()){
            while ($row = $res->fetch(PDO::FETCH_ASSOC)){

                $item=array(
                    "IdVuelos" => $row['idVuelo'],
                    "Fecha" => $row['diayhora'],
                    "Origen" => $row['origen'],
                    "Destino" => $row['destino'],
                    "Precio" => $row['precio'],
                    "PlazasTotales" => $row['plazas_totales'],
                    "PlazasLibres" => $row['plazas_libres'],
                );
                array_push($vuelos["items"], $item);
            }

            echo json_encode($vuelos);
        }else{
            echo json_encode(array('mensaje' => 'No hay elementos'));
        }
    }
}
?>
