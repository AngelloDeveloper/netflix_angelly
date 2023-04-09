<?php
$server = 'localhost';
$user = 'root';
$password = '';
$db = 'netflix';

$conexion = new mysqli($server, $user, $password, $db);

if ($conexion->connect_errno) {
    die("error de conexion". $conexion->connect_errno);
}
else{
    //echo 'todo bien';
}
?>