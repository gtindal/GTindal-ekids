<?php
//aqui agregamos el config que tiene los parametros de conexion a la base de datos
include('../app/config.php');

// aqui se va usar comando php de iniciar sesion
session_start();

//declaro variables del controller, pero en AJax seran distintos
$usuario_user = $_POST['usuario'];
$pass_usuario =$_POST['pass_usuario'];
// echo $usuario." - ".$pass_usuario; esto era salida para ver los resultados, no es necesario ahora

$email_tabla= ''; $password_tabla='';
// se validara con alert de boostrap

$query_login=$pdo->prepare
(
"       SELECT * FROM tb_usuarios 
        WHERE email='$usuario_user' AND pass_usuario='$pass_usuario' AND estado='1'
"
);

//agregamos el query_login con execute
$query_login->execute();
//agregar variable para AJAX
$usuarios=$query_login->fetchAll(PDO::FETCH_ASSOC);
foreach($usuarios as $usuario)
{
        $email_tabla=$usuario['email'];
        $password_tabla=$usuario['pass_usuario'];
}

// la prueba seria con, sera comentada para que ya no salga en el login
// print_r($query_login, false);

//para validarr ya incrustando boostrap de navbar alerts, estos valores de variables de lado izquierdo
// estan debajo del include, IMPORTANTE (usuario_user y el pass_usuario)
if(($usuario_user==$email_tabla) && ($pass_usuario==$password_tabla))
{
        ?>
        <div class="alert alert-success" role="alert"> 
                Usuario ingreso correctamente
        </div>
        <script> location.href="principal.php";</script>
        <?php
        // aqui se declara variable usuario_sesion en base email que sera la cuenta del que incia sesion
        $_SESSION['usuario_sesion'] = $email_tabla;
}
else
{
        ?>
        <div class="alert alert-danger" role="alert"> 
                Datos de ingreso incorrectos 
        </div>
        <script> $('#password').val("");$('#password').focus();</script>
        <?php      
}

//if($usuario=="g4277@gmail.com"){
  //      ?>
    <!--    <div class="alert alert-success" role="alert">
        Usuario correcto
        </div> -->
        <?php
//}
//else{
    ?>
 <!--           <div class="alert alert-danger" role="alert">
        Usuario incorrecto
        </div> -->
        <?php

//}

?>

