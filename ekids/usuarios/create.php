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

      <h2>Creación de Nuevo Usuario del Sistema</h2>
    <!-- aqui comienza formulario con boostrap card-->
    <div class="container">
      <div class="row">
        <div class="col-md-6">
        <div class="card" style="border: 1px solid #c0c0c0">
           <div class="card-header" style="background-color:#007bff; color: #ffffff;">
           Registro Nuevo Usuario
           </div>
            <div class="card-body">
              <div class="form-group">
                <label for="">Nombre</label><br>
                <input type="text" class="form.control" id="nombres">
              </div>
              <div class="form-group">
                <label for="">Email</label><br>
                <input type="email" class="form.control" id="email">
              </div>    
              <!-- debe establecerse como tipo password, solo para seg se dejo texto-->
              <div class="form-group">
                <label for="">Password</label><br>
                <input type="text" class="form.control" id="password_user">
              </div> 
              
              <div class="form-group">
                <button class="btn btn-primary" id="btn_guardar">Guardar/Registrar</button>
                <a href="" class="btn btn-default">Cancelar</a>
              </div>

                      <div id="respuesta">
                        
                      </div>
              
           </div>
            </div>

            </div>
        <div class="col-md-6"></div>
      </div>
    </div>


    </br>
  </div>
  <?php include('../layout/admin/footer.php');?>
</div>
<!-- ./wrapper -->
<?php include('../layout/admin/footer_link.php');?>
</body>
</html>

<!-- jquery ajax  -->
<script>
  $('#btn_guardar').click(function(){
    var nombres = $('#nombres').val();
    var email = $('#email').val();
    var password_user = $('#password_user').val();  
    // aqui para probar el mensaje emergente
    // alert(nombres +" - "+email);
      if(nombres==""){
        alert('Debe llenar el Nombre');
        $('#nombres')-focus();
      }
      else if(email==""){
        alert('debe llenar el correo');
        $('#email')-focus();      
       } 
      else if(password_user==""){
        alert('debe llenar el password');
        $('#password_user')-focus();    
      }
      
      else
      {
        var url='controller_create.php';    
        $.get(url,{nombres:nombres , email:email, password_user:password_user}, function(datos)
        {
            $('#respuesta').html(datos);
        });
      }






  });
</script>