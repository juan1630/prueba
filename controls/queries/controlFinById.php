<?php  require_once  '../../models/models/findById.php'; ?>


<?php

session_start();
if( !$_SESSION['id'] ){
    header('Location: ../../vews/home.php');
}else {

    $id = $_SESSION['id'];

    $findbyid = new findById($id );
    $productId = $findbyid->getById();

    $json_send =  json_encode ( $productId );

   echo $json_send;

}

?>