<?php
//incluimos el archivo mbUsuario
require_once (__DIR__."/../mdb/mdbUsuario.php");

//Con el motodo $_POST recibimos los datos

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$password = $_POST['password'];
$telefono = $_POST['telefono'];
$fechaNac = $_POST['fechaNac'];
$sexo = $_POST['sexo'];
$peso = $_POST['peso'];

$usuario = new Usuario(null ,$nombre, $correo, $password, $telefono, $fechaNac, $sexo, $peso, 0);
//Se registra

$user = registrarUsuario($usuario);
if($user != null){
    echo '<script type="text/javascript">
    alert("Registro Exitoso");
    window.location.href = "../../vista/login.php";
    </scrip>';
}else{
    echo '<script type="text/javascript">
    alert("No se pudo registrar");
    </scrip>';
}
?>
