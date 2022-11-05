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
      <h2>Listado de Usuarios</h2>
    
    <br>
    <table class="table table-bordered table-sm table-striped">
      <th><center>Nro</center></th>
      <th>Usuario</th>
      <th>Cuenta/Email</th>
      <th><center>Acción</center></th>

<?php 
// agregamos un contador para la tabla
$contador=0;
// traemos el query que estaba en control login
      $query_usuario=$pdo->prepare
(
"       SELECT * FROM tb_usuarios 
        WHERE estado='1'
"
);

//agregamos el query_login con execute
$query_usuario->execute();
//agregar variable para AJAX
$usuarios=$query_usuario->fetchAll(PDO::FETCH_ASSOC);
foreach($usuarios as $usuario)
{
        $id=$usuario['id'];
        $nombre=$usuario['nombre'];
        $email=$usuario['email'];
        $contador=$contador+1;
?>  
        <tr>


        <td><center><?php echo $contador;?></center></td>
        <td><?php echo $nombre;?></td>
        <td><?php echo $email;?></td>
        <td><center>
          <a href="" class="btn btn-success">Editar</a>
          <a href="" class="btn btn-danger">Eliminar</a>
            </center>
        </td>
      </tr>
<?php
}

?>

    </table>

  </div>
  <?php include('../layout/admin/footer.php');?>
</div>
<!-- ./wrapper -->
<?php include('../layout/admin/footer_link.php');?>
</body>
</html>