<?php

include('../app/config.php');

$nombres=$_GET['nombres'];
$email=$_GET['email'];
$password_user=$_GET['password_user'];

// esta variable se ha llevado a config.php, ya que estara presente en todas las paginas internas
// $estado_del_registro="1";

// para colocar variable (creacion_fyh) fecha y hora creacion usamos

// date_default_timezone_set("America/Caracas");

$fechahora=date("Y-m-d h:i:s");
// para probar si se esta capturando correctamente los datos desde el formulario
// echo $nombres ,"-", $email, "-", $password_user;

$sentencia= $pdo->prepare("INSERT INTO tb_usuarios(nombre,  email, pass_usuario, creacion_fyh, estado) 
                                            VALUES (:nombre,:email,:pass_usuario,:creacion_fyh, :estado)"); 
// los nombres referenciados de la izquierda son los campos de la Base de datos
//'nombre' 'email' 'pass_usuario' 'estado'
// aqui la referencia dice usar Statement, pero entiendo en la version php7.4 ya no es necesario
// genero error al dejarla, y mejor lo quite para que no genere error

$sentencia->bindParam('nombre',$nombres);
$sentencia->bindParam('email',$email);
$sentencia->bindParam('pass_usuario',$password_user);
$sentencia->bindParam('creacion_fyh',$fechahora);
$sentencia->bindParam('estado',$estado_del_registro);

if($sentencia->execute())
{
    echo "Se ha registrado alnuevo usuario";
    // header('index.php');

    ?>
            <script> location.href="index.php";</script>
    <?php 
}
else{
    echo "No se ha creado usuario en BDatos";
};
