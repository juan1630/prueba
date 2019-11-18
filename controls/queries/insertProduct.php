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
    $imageName  = $_FILES['imagen']['name'];
    $typeImage = $_FILES['imagen']['type'];
    $tempImage = $_FILES['imagen']['tmp_name'];
    $sizeImage = $_FILES['imagen']['size'];

    $route = "../assets/images/".basename( $imageName );


    if( $typeImage == "jpg" || $typeImage = "jpeg" || $typeImage == "png" ) {

        if($sizeImage <= 50000) {
            if( move_uploaded_file( $tempImage, $route ) ) {


                $insertData = new InsertData($nombre, $marca, $compra, $venta, $cantidad, $totalesCompras,$descripcion ,$totalVenta, $route );
                $resp = $insertData->insertProduct();

                if( $resp === "producto insertado" ){

                    $respuesta['mensaje'] = $resp;
                    $response = json_encode($respuesta);
                    echo $response;

                }else {

                    echo "Pasó algo";
                }

            }
        }else {
            echo "El tamaño de la imagen es muy grande";
        }

    }else {
        echo "El tipo de archivo no es permitido";
    }



  }else if($_POST == null){
    echo "Error en la consulta";
}


?>