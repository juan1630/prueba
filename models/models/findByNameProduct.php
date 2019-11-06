<?php
require_once  'conect.php';


class findByNameProduct {

    public $name = "";
    public $rows = [];

    public function __construct($argName){

        $this->name = $argName;

    }

    public function findByName () {
        $conect = new Conect("jose", "eltodasmias16");
        $coneted  = $conect->conectar();

        $sql = "SELECT * FROM Producto WHERE nombreProducto like '%$this->name%'";

         $prepareQuery = $coneted->prepare($sql);

          $prepareQuery->execute();

        while ( $result = $prepareQuery->fetch(PDO::FETCH_ASSOC )  ){
            array_push($this->rows, $result );
        }

        return $this->rows;

    }

}

?>