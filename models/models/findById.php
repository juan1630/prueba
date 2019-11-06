<?php
require_once ( dirname(__FILE__).'\conect.php' );

class findById{

    public $id = 0;


    public function __construct( $argId ){

        $this->id =$argId;

    }

    public function getById() {

        $rows = [];
        $sql = "SELECT * FROM Producto WHERE id = $this->id";

        $conect = new Conect ("jose", "eltodasmias16" );
        $conected = $conect->conectar();

        $resulset = $conected->prepare( $sql );
        $resulset->execute();

        while ($resul = $resulset->fetch(PDO::FETCH_ASSOC ) ){

            array_push( $rows , $resul );

        }

        return $rows;


    } // fin de la funcion

} //  fin de la clase




?>