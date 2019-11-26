<?php
 require_once  '../../models/models/modelUpdatePrice.php';
session_start();
$id = $_SESSION['id'];
$respuesta = [];


if( isset($_POST) ){


    $precioCompra = $_POST['precioCompra'];
    $precioVenta = $_POST['precioVenta'];
    $cantidad = $_POST['cantidad'];
    $total = $_POST['totalCompra'];
    $totalVenta = $_POST['totalVentas'];

    $modelPrice = new modelUpdatePrice ($id, $precioCompra, $precioVenta, $cantidad, $total, $totalVenta );
    $response = $modelPrice->updateProductPrice();

    if($response){
        $respuesta['mensaje'] = "ok";

        $resp = json_encode($respuesta);
        echo $resp;

    }else {

        $respuesta['mensaje'] = "fallo";
        $resp = json_encode($respuesta);
        echo $resp;


    }

}else {
    echo "Aca ira el redirect";
}




?>