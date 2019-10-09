<?php

class Login {

    public $email="";
    public $password="";

    public function __construct ($email, $pass){

        $this->$email = $email;
        $this->password = $pass;
        
     }


     public function login (){

      header('Location:../../views/home.php');

     }


}



?>