<?php
session_start();
require ("../db/Conexion.php");

$connection = new Conexion($host, $username, $password, $database);
$db=$connection->getConexion();
$sql= 'INSERT INTO usuario (documento_usuario, nombre_usuario, apellido_usuario, password_usuario, email_usuario, idRol) VALUES (:documento_usuario, :nombre_usuario, :apellido_usuario, :password_usuario, :email_usuario, :idRol)';

$con->bindParam(':documento_usuario', $_POST['doc']);
$con->bindParam(':nombre_usuario', $_POST['nombre']);
$con->bindParam(':apellido_usuario', $_POST['apellido']);
$con->bindParam(':email_usuario', $_POST['email']);
$con->bindParam(':idRol', $_POST['rol']);

$password=password_hash($_post['password'], PASSWORD_BCRYPT);
$con->bindParam(':password_usuario', $password);

if($con->execute()){
    $message= "Usuario creado con exito";
    $_MESSAGE['crearUsuario'] =$message;
    header("location: ../Registrar.php");
}else{
    $message= "No ha sido posible crear el usuario";
    $_MESSAGE['crearUsuario'] =$message;
    header("location: ../Registrar.php");
}

?>