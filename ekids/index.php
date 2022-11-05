<?php include('app/config.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- estoy agregando la libreria para generar menus -->
    <!-- Bootstrap CSS original pero comentado porque ya no se usara desde web -->
    <!--
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    -->
    <!-- Bootstrap CSS ya instalado en servidor carpeta public -->
    <link rel="stylesheet" href="public/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
 
    <title>Sistema de Ekids</title>
</head>
<body style="background-image: url('public/imagenes/fondo01.png');
background-repeat:no-repeat;
z-index: -3;
background-size: 100vw 100vh">

<!-- cambiando los terminos light y warning se modifican los colores de boostrap nav -->
<nav class="navbar navbar-expand-lg navbar-light bg-warning">
  
<a class="navbar-brand" href="#">
    <img src="public/logos/logo01.jpg" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
    SISTEMA
  </a>

  <!-- esta parte lo deshbilite ya que tengo un logo y texto incial -->
<!-- <a class="navbar-brand" href="#">Navbar</a> -->
  
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">INICIO <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Acerca de Ekids</a>
      </li>
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Areas
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Pedagogia</a>
          <a class="dropdown-item" href="#">Seguridad</a>
          <!-- <div class="dropdown-divider"></div> -->
          <a class="dropdown-item" href="#">Eventos</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
     <!-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Busqueda</button>-->
    </form>

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Login
</button>

  </div>
</nav>

<!-- Desde aqui se comenzaria a hacer el codigo general de la pagina -->

<br>
<h1> Pagina con conexion a BD </h1>
   <!-- aqui habia el codigo echo $URL lo cambie ya para las páginas de prueba con una mensaje de bienvenida --> 

    <?php echo 'Bienvenidos a Ekids';?>
    <br>



    <!-- Aqui se agregando la parte de formateo de boostrap - las urls originales de los src eran
https://code.jquery.com/jquery-3.5.1.slim.min.js     y
https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js  fueron direccionados hacia js
-->
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) se cambio el JQuery slim por el de produccion 
oficial de jquery.com  -->

    <!-- <script src="public/js/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    -->
    <script src="public/js/jquery-3.5.1.min.js" ></script>
    <script src="public/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS estos son solo alternativas de librerias en la nube
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
 
</body>
</html>

    <!-- aqui se desarrolla el MODAL para inicio sesion -->
    <!-- Button trigger modal , el boton Login lo ubique arriba al lado derecho del menu-->
<!-- 
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Login
</button> 
-->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Inicio de Sesion</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body">
    <!-- aqui para solicitud de usuario y pass, aplicando form de boostrap -->
            <div class="row">
                <div class="col-md-12">
                    <label for="">Usuario/Email</label>
                    <!-- se aumenta id usuario para el jquery de abajo --> 
                    <input type="email" id="usuario" class="form-control">
                </div>
            
                <div class="col-md-12">
                    <label for="">Contraseña</label>
                    <input type="password" id="password" class="form-control">
                </div>
            </div>
                <div Id="respuesta">
                
                </div>

        </div>
    <!-- final solicitud de usuario y pass, aplicando form de boostrap -->  

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <!-- asignando id como btn_ingresar para JQuery --> 
        <button type="button" class="btn btn-primary" id="btn_ingresar">INGRESAR</button>
      </div>
    </div>
  </div>
</div>

<!-- aplicando ajax con JQuery para conectar BD, se define variable usuario y var pass_usuario para capturar los datos 
para login--> 
<script>
    $('#btn_ingresar').click(function()
    {
        login();
    });
// aqui se agrega funcion de keypress para reconocer que se esta presionando tecla enter (codigo ascii 13)
$('#password').keypress(function(e){
  if(e.which == 13){
    login();
  }
});

function login()
    { 
        var usuario=$('#usuario').val();
        var pass_usuario=$('#password').val();
// aqui validacion de campos vacios del ajax login
      if(usuario==""){
        alert('Introduzca usuario.');
        $('#usuario').focus();
      }else if(pass_usuario==""){
        alert('Introduzca contraseña.');
        $('#password').focus();
      }else{
        var url='login/control_login.php'    
        $.post(url,{usuario:usuario , pass_usuario:pass_usuario}, function(datos)
        {
            $('#respuesta').html(datos);
        });
      }
    }
</script>