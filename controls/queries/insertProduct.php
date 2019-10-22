<?php

require_once '../../models/models/insertData.php';

if( isset($_POST) ){

    $respuesta = array();

    $nombre = $_POST['nombre'];
    $marca = $_POST['marca'];
    $compra = $_POST['compra'];
    $venta = $_POST['venta'];
   $cantidad = $_POST['cantidad'];
    $totalVenta = $_POST['totalesVenta'];
    $descripcion = $_POST['descripcion'];
    $totalesCompras = $_POST['compraTotales'];


    
    $insertData = new InsertData($nombre, $marca  , $compra, $venta, $cantidad, $totalesCompras,$descripcion ,$totalVenta );
    $resp = $insertData->insertProduct();


    if( $resp === "producto insertado" ){

        $respuesta['mensaje'] = $resp;
        $response = json_encode($respuesta);
        echo $response;
        
    }else {
    
        echo "Pasó algo";
    
    }

}else if($_POST == null){
    
    echo "Error en la consulta";
}


?>