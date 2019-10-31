<?php 
require_once '../../models/login/login.php';

$email = $_POST['email'];
$password = $_POST['pass'];

if( !empty($email) && !empty($password) ){

    session_start();


}else {
    echo "Completa los campos";
}

?>