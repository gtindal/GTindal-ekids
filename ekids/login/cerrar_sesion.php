<?php
// llamada para que se pueda redireccionar mediante URL
include('../app/config.php');

//verificacion de sesion abierta para cerrarla
session_start();
if(isset($_SESSION['usuario_sesion'])){
    session_destroy();
    header("Location:".$URL."/");
}

?>
