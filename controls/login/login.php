<?php 
require_once '../../models/login/login.php';

$email = $_POST['email'];
$password = $_POST['pass'];

if( !empty($email) && !empty($password) ){
        
    $ModelLogin = new Login($email, $password);
    $ModelLogin->login();

}else {
    echo "Completa los campos";
}

?>