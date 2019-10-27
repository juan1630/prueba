<?php
require_once  '../../models/models/findById.php';


if( isset( $_GET['id'] ) ){

    $findbyid = new findById($_GET['id']);

   var_dump($findbyid->getById());

}