<?php
require_once  '../../models/models/findById.php';


if( isset( $_GET['id'] ) ){

    $findbyid = new findById($_GET['id']);
    $productId = $findbyid->getById();

      $json_send =  json_encode( $productId );

        echo $json_send;
}

