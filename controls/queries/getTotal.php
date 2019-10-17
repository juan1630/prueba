<?php

require_once '../../models/models/modelTotal.php';



    $getToales = new GetTotal;
   $totales = $getToales->getTotales();


    $respJson =  json_encode( $totales );
    echo $respJson;


?>