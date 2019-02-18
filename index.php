<?php
//interfaz
    include_once 'apivuelos.php';
    $api = new ApiVuelos();
    $api->getAll();
    $api->getFree();

?>
