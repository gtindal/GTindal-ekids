<?php 
// obligatorio usar el include
include('app/config.php');
include('layout/admin/datos_usuario_sesion.php');
// aqui validaremos antes el inicio de sesion, deberia hacerse en cada pagina del sistema  
// que necesite autenticacion
session_start();
if(isset($_SESSION['usuario_sesion'])){
    // al agrgar el frame de abajo, comente el echo para que ya este solo el frame
    // echo "Sesion iniciada";
    ?>
    <!-- aqui estoy agregando el codigo starter de frame AdminLTE - se va a reducir el codigo innecesario y ajustar  -->
<!DOCTYPE html>
<html lang="es">
<head>
<?php include('layout/admin/head.php');?>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
<?php include('layout/admin/menu.php');?>
  <!-- dentro del div estaria contenido del sistema-->
  <div class="content-wrapper">
    Aqui será el contenido del sistema
  </div>
  <?php include('layout/admin/footer.php');?>
</div>
<!-- ./wrapper -->
<?php include('layout/admin/footer_link.php');?>
</body>
</html>
    <?php 
}else{
    echo "No se ha iniciado sesion, ingrese a la pagina principal con una cuenta valida";
    ?>
    <a href="<?php echo $URL;?>">Enlace a Pagina Inicio</a>
    <?php 
}

//echo "Pagina del Administrador"
// aqui hacia abajo deberia desarrollarse el contenido de la pagina principal
?>
