<?php

require_once '../../models/models/insertData.php';

if( isset($_POST) ){

    $respuesta = array();

    $nombre = $_POST['nombre'];
    $marca = $_POST['marca'];
    $compra = $_POST['compra'];
    $venta = $_POST['venta'];
    $cantidad = $_POST['cantidad'];
    $total = $_POST['total'];


    //     echo $cantidad;
    
    $insertData = new InsertData($nombre, $marca, $venta, $compra, $cantidad, $total);
    $resp = $insertData->insertProduct();


    if( $resp === "producto insertado" ){

        $respuesta['mensaje'] = $resp;
        $response = json_encode($respuesta);
        echo $response;
        
    }else {
    
        echo "paso algo";
    
    }

}else if($_POST == null){
    
    echo "Error en la consulta";
}


?>