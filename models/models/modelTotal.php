<?php
require_once ( dirname(__FILE__).'\conect.php' );


class GetTotal {



function  getTotales () {
    $rows = [];

    $conected = new Conect("jose", "eltodasmias16");
    $conect = $conected->conectar();

    $sql = "select   sum( total ) as total, sum( precioCompra )  as compraTotal, sum( precioVenta ) as totalVenta, sum(totalVenta) as ventaTotal from Producto; ";

   $resulset =  $conect ->prepare( $sql );
   $resulset->execute();

   while ( $result = $resulset->fetch(PDO::FETCH_ASSOC) ){
        array_push( $rows, $result );
   }

   return $rows;

}


}


?>