<?php

define('SERVIDOR','localhost');
define('USUARIO','root');
define('PASSWORD','');
define('BD','esp8266');

$servidor = "mysql:dbname=".BD."; host=".SERVIDOR;

try{
    $pdo = new PDO($servidor,USUARIO,PASSWORD,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
    // echo "la conexion a la Base de datos esta correcta";
    // se desactivo porque solo es con fines de control

}

catch(PDOException $e)
{
    // echo "hay error en la conexion a la Base de Datos";
    // se cambio para que salga con una ventana emergente de alerta en caso de falla a la BD
    echo "<script>alert('Error en conexion a la Base de Datos');</script>";
}
// importante, se puede usar esta variable $URL añadiendo el include config.php 
// para redireccionar a la pagina de inicio
$URL = "http://localhost/ekids";

$estado_del_registro="1";
?>