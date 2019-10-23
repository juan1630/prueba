<?php
require_once ( dirname(__FILE__).'\conect.php' );


class GetAProudcto{

    public $id = 0;
    public $product = [];

    function __construct( $arId ){
        $this->id = $arId;
    }


    function GetOneProduct (){

        $conected = new Conect("jose", "eltodasmias16");
        $conect = $conected->conectar();


        $sql = " SELECT * FROM Producto WHERE id = $this->id;";
        $resulset = $conect->prepare( $sql );
        $resulset->execute();

        while ( $result = $resulset->fetch(PDO::FETCH_ASSOC) ){
            array_push( $this->product, $result );
        }

        return $this->product;

        # return $this->product;

    }


}



?>