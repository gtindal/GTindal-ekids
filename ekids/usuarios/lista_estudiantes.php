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
      <h2>Lista de Estudiantes y Equipo de Apoyo</h2>
    </br>
  </div>
  <?php include('../layout/admin/footer.php');?>
</div>
<!-- ./wrapper -->
<?php include('../layout/admin/footer_link.php');?>
</body>
</html>