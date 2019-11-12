<?php
require_once  '../../models/models/updateAProduct.php';

session_start();
$id = $_SESSION['id'];

if( !isset($_POST) ) {
    header('Location: ../../home.php');
} else {

    $nombre = $_POST['nombre'];
    $marca = $_POST['marca'];
    $desc = $_POST['desc'];

    $updateText = new updateAProduct($id, $nombre, $marca, $desc);
   echo  $updateText->updateAProudct();
}







?>