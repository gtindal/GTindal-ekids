<?php 
// obligatorio usar el include
include('../app/config.php');
include('../layout/admin/datos_usuario_sesion.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
<?php include('../layout/admin/head.php');?>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
<?php include('../layout/admin/menu.php');?>
  <!-- dentro del div estaria contenido del sistema-->
  <div class="content-wrapper">
    <br>
      <h2>Reporte general de Asistencia</h2>
      <h1>ejemplo de salida</h1>
      <img src="<?php echo $URL;?>/public/imagenes/ReportePrincipal.jpeg" class="img-responsive elevation-2" alt="User Image">
</br>

      
    </br>
  </div>
  <?php include('../layout/admin/footer.php');?>
</div>
<!-- ./wrapper -->
<?php include('../layout/admin/footer_link.php');?>
</body>
</html>