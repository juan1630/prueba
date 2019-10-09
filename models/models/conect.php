<?php

class Conect {
    

    public $user;
    public $pass;

    public function __construct( $argUser, $argPass){
            
            $this->user = $argUser;
            $this->pass = $argPass;
            
    }

   public function conectar ( ){

        try{
            $pdo = new PDO('mysql:host=localhost;dbname=papelreria', $this->user, $this->pass);
            
            return $pdo;

        }catch( PDOException $e ){

           return "Echo ocurrió un Error".$e->getMessage();
           
        }


    }


}


?>