<?php
require_once  './models/models/conect.php';

class  modelUpdatePrecie {

    public $id = 0;
    public $cantidad = 0;
    public $precioCompra = 0;
    public $precioVenta = 0;
    public  $total = 0;
    public $totalCompra = 0;

    public function __construct($argid, $argCantidad, $argPrecioCompra, $argPrecioVeta, $argTotal, $argTotalCompra ){

        $this->id = $argid;
        $this->cantidad = $argCantidad;
        $this->precioCompra = $argPrecioCompra;
        $this->precioVenta = $argPrecioVeta;
        $this->total = $argTotal;
        $this->totalCompra = $argTotalCompra;

    }

    public function updatePrecieProduct () {

        $conected = new Conect('jose', 'eltodasmias16');
        $conectar = $conected->conectar();

        $sql = "update Producto set precioCompra = ? ,precioVenta = ?,  cantidad = ?, total = ?, totalVenta = ? where id = ?;";

        $conectar->prepare( $sql );
    }

}


?>