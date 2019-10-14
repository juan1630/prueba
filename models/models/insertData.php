<?php 

require_once 'conect.php';

class InsertData {

    public $nombre = "";
    public $marca = "";
    public $venta;
    public $compra;
    public $cantidad = 0;
    public $total;
    
    
    function __construct($arNombre, $arMarca, $arVenta, $arCompra, $arCantidad, $total) {

        $this->nombre = $arNombre;
        $this->marca = $arMarca;
        $this->venta = $arVenta;
        $this->compra = $arCompra;
        $this->cantidad = $arCantidad;
        $this->total = $total;

    }

    public function insertProduct (){


        
        $conected = new Conect("jose", "eltodasmias16");
        $conect = $conected->conectar();
        $data = [ $this->nombre, $this->marca, $this->compra, $this->venta, $this->cantidad, $this->total ];

        $error = false;
        $ok = false;

        try {

        
        $consulta = "INSERT INTO Producto VALUES (null,?, ?, ?, ?, ?, ? )";
        $consultaPreparada = $conect->prepare($consulta);
        $result = $consultaPreparada->execute($data);
        
    
        if($result){

            return  "producto insertado";


        }else {

          $error['errorInsert'] = "Algo pasó al insertar el producto";
          return $error;
       
        }


    } catch (PDOException $e){
            return $e->getMessage();
    }

       

    }
    
}



?>