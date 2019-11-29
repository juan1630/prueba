<?php

require_once ( dirname(__FILE__).'\conect.php' );


class GetData {
    
    function getData(){
    
        $rows = [];
            
        $conected = new Conect("jose", "eltodasmias16");
        $conect = $conected->conectar();


        // ANOTACIÓN 

        // Senetencia para qiue solo devuelva un cierto número de registros 
        // se hace con el limit

        // Ejemplo:  

        // SELECT * FROM producto LIMIT 5;

        $sql = "SELECT * FROM producto";
    
        $statemnet = $conect->prepare($sql);
        $statemnet->execute();

        while($result = $statemnet->fetch(PDO::FETCH_ASSOC)){
            
            array_push( $rows, $result );

                // Sintaxis del array push
        }
        return $rows;
    }

}




?>