<?php
require_once '../../models/models/deleteAProduct.php';
$response['mensaje'] = "";

$id = $_GET['id'];

if(isset($id)){

    $deleteProdcut =  new deleteAProduct($id);
    $res = $deleteProdcut->deleteAProdcut();

    if($res == "Producto eliminado"){

        header('Location: ../../views/home.php');

    }else if( res == "Algo pasó") {
        header('Location: ../../views/home.php');

    }

}else {

    $response['mensaje'] = "Falta el id";

}


?>