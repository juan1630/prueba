<?php

require_once ( dirname(__FILE__).'\conect.php' );


class GetData {
    
    function getData(){
    
        $rows[] = null;
            
        $conected = new Conect("jose", "eltodasmias16");
        $conect = $conected->conectar();
        
        
        $sql = "SELECT * FROM producto";
    
        $statemnet = $conect->prepare($sql);
        $statemnet->execute();
    
        while($result = $statemnet->fetch(PDO::FETCH_ASSOC)){
            $rows = $result;
        }
    
        // $json_send = json_encode($rows);
        // return $json_send;
        
        return $rows;
    
    }

}

?>