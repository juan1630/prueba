<?php
require_once  'conect.php';


class updateAProduct {

    public  $rows = [];
    public  $id = 0;
    public  $nombre = "";
    public $marca = "";
    public $desc = "";


    public function __construct( $argId, $argNombre, $argMarca, $argDes  ) {

        $this->id = $argId;
        $this->nombre = $argNombre;
        $this->marca = $argMarca;
        $this->desc = $argDes;

    }


    public function updateAProudct (){

        $conect = new Conect();
        $conectar = $conect->conectar();
        $data = [$this->nombre, $this->marca, $this->desc];


        $sql = "UPDATE Producto SET nombreProducto = ?, marcaProducto = ? , descripcion = ? where id = ?; ";

       $sqlPrepared = $conectar->prepare( $sql );
       $result = $sqlPrepared->execute($data );

       if($result){
           return "Consulta hecha";
       }else {
           return "No se ejecuto";
       }

    }

}

?>