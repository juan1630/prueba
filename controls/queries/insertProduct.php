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
    $route = "../../assets/images/".basename( $imageName );
    $roureDB = "../assets/images/".basename( $imageName );


    if( $typeImage == "jpg" || $typeImage = "jpeg" || $typeImage == "png" ) {

        if($sizeImage <= 5000000) {
            if( move_uploaded_file( $tempImage, $route ) ) {

                $insertData = new InsertData( $nombre, $marca, $compra, $venta, $cantidad, $totalesCompras, $descripcion ,$totalVenta, $roureDB );
                $resp = $insertData->insertProduct();

                if( $resp === "Producto insertado" ){
                    $respuesta['mensaje'] = $resp;
                    $response = json_encode($respuesta);
                    echo $response;
                }else {

                        $respuesta['mensaje'] = "Proudcto no  insertado";
                        $response = json_encode( $respuesta );

                }
            }
        }else {
            $respuesta['mensaje'] = "Imagen  grande";
            echo json_encode( $respuesta );
        }

    }else {
        $respuesta['mensaje'] = "Archivo no valido";

        echo  json_encode( $respuesta );
    }



  }else if($_POST == null){

      $respuesta['mensaje'] = "Algo paso";
      echo json_encode( $respuesta );

  }


?>