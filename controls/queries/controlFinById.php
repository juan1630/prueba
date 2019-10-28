<?php
require_once  '../../models/models/findById.php';


if( isset( $_GET['id'] ) ){

    $findbyid = new findById($_GET['id']);

      $json_send =  json_encode( $findbyid );
        echo $json_send;
}else {
    header('Location: ../../home.php');
}