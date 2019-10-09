<?php 
require_once '../../models/models/GetData.php';


if( isset($_GET) ){
    $products = new GetData();
    $resp=$products->getData();
    $jsonResp = json_encode($resp);
    
    var_dump($jsonResp);

    
} else {
    return "Un error";
}


?>