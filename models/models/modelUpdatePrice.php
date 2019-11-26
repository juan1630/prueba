<?php

require_once 'conect.php';

class  modelUpdatePrice {

    public  $id = 0;
    public $precioCompra = 0;
    public  $precioVenta = 0;
    public  $cantidad = 0;
    public $total = 0;
    public  $totalVenta = 0;



    public function  __construct( $argId, $argPrecioCompra, $argPrecioVenta, $argCatidad,$argTotal, $argTotalVenta ) {
        $this->id = $argId;
        $this->precioCompra = $argPrecioCompra;
        $this->precioVenta = $argPrecioVenta;
        $this->cantidad = $argCatidad;
        $this->total = $argTotal;
        $this->totalVenta = $argTotalVenta;

    }

    public function updateProductPrice (){


            $conect = new Conect('jose', 'eltodasmias16');
            $conectar = $conect->conectar();
            $datos = [ $this->precioCompra, $this->precioVenta, $this->cantidad, $this->total, $this->totalVenta, $this->id ];

            $query = "update Producto set precioCompra = ? ,precioVenta = ?,  cantidad = ?, total = ?, totalVenta = ? where id = ?;";

            $sqlPrepaperedQuery = $conectar->prepare($query);

          $result =   $sqlPrepaperedQuery->execute( $datos );
            if( $result ){
                return "Datos acutalizados";
            }else {
                return "No se guardaron los datos";
            }

    }
}


?>