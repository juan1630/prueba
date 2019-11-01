<?php
require_once  'conect.php';


class updateAProduct {

    public  $rows = [];

    public function __construct( $argId  ) {

        $this->rows = $argId;

    }


    public function updateAProudct (){

        $conect = new Conect();
        $conectar = $conect->conectar();


        $sql = "update";

        $conectar->prepare( $sql );

    }


}


?>