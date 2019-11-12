
<?php
require_once  '../../models/models/updateAProduct.php';


if( !isset( $_GET['id'] ) ){

    header('Location: ../../home.php');
}else {

    $update = new updateAProduct;
    $resp =  $update->updateAProudct();


}

?>
