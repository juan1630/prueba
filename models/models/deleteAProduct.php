<?php
require_once ( dirname(__FILE__).'\conect.php' );

class deleteAProduct {

    public $id = 0;

    function  __construct($argId){
        $this->id = $argId;
    }

    function deleteAProdcut(){

        $conected = new Conect("jose", "eltodasmias16");
        $conect = $conected->conectar();

        $data = [$this->id];

        $sql ="delete from Producto where id=?";

            $resul =$conect->prepare($sql);
            $result =  $resul->execute($data);

            if($result){
                return "Producto eliminado";
            }else {
                return "Algo pasó";
            }
    }


}


?>