

<?php 
$urlStarter='../../../view/admin/';  //son desde el controlador
?>

<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>EduTech | Add Curso</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../../../view/admin/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../../view/admin/dist/css/adminlte.min.css">
  <!-- CSS CURSOS ADMIN -->
    <link rel="stylesheet" href="../../../resource/css/signUp/sign_up_admin.css">
    <link rel="icon" href="../../../resource/img/icons/logo-kepler-removebg-preview.png" />
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
    <?php include('../../../view/admin/layouts/nav.php'); ?>
  <!-- /.navbar -->

  <!-- Main Nav Asidebar Container -->
  <?php include('../../../view/admin/layouts/nav_aside.php'); ?>
  <!-- Fin del Main Nav Asidebar Container -->
  
  <!-- TODA LA PAGINA -->
  <div class="content-wrapper">
    <!-- Titulo de la vista -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Gestionar usuario</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Gestionar usuario</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.fin titulo de la vista -->

    <!-- Contenido principal vista -->
    <section class="content">
      
      
    <div class="row">
    
<div class="log-container">
    <div class="cuenta-container">
    
     <div class="formulario">
     <form action="">
        <label for='rol'>Rol</label>
        <select name="rol" id="rol">
            <?php
            if($rol=='super_admin'){
                echo "<option value='admin' > Administrador </option>";    //SOLO PUEDE CREARLO EL SUPERADMIN
            }
            ?>
            <option value="docente" > Docente </option>
            <option value="estudiante" > Estudiante </option>
        </select>
        <label for="nombres">Nombres</label>
        <input type="text" id="nombre" required>
        <label for="apellidos">Apellidos</label>
        <input type="text" id="apellidos" required>
        <label for='tipo_documento'>Tipo de documento</label>
        <select name="tipo_documento" id="tipo_documento">
            <option value="CC"  >Cedula de ciudadania</option>
            <option value="TI" >tarjeta de identidad</option>
            <option value="CE" >Cedula de extranjeria</option>
        </select>
        <label for="documento">Documento</label>
        <input type="text" id="documento" required>
        <label for="sexo">Sexo</label>
        <input type="radio" value='M' id='sexo' name='sexo' >M
        <input type="radio" value='F' id='sexo' name='sexo' >F
        <label for="fecha">Fecha de nacimiento</label>
        <input type="date" id="fecha" required>
        <label for="correo">correo electronico</label>
        <input type="email" id="correo" required>
        <label for="contrasenia">Contraseña</label>
        <input type="password" id="contrasenia" required>
        <label for="conf-contraseña">Confirmar contraseña</label>
        <input type="password" id="confContrasenia" required>
        <label for="telefono">Telefono</label>
        <input type="number" id="telefono" required>
        <label for="ciudad">Ciudad </label>
        <input type="text" id="ciudad" required>
        <label for="direccion">Dirección </label>
        <input type="text" id="direccion" required>
        
        <button type="submit"> CREAR CUENTA</button>
     </form>
    </div>
    </div>
 <div class="image">
        <img src="../../../resource/img/updatesale_login_signup/imagenlogin.png" alt="">
 </div>


    </div>
    </div>
 
    </section>
    <!-- /. Maincontent -->
  </div> 
  <!-- /.content-wrapper -->

  <!-- Controlador del nav aSidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <?php include('../../../view/admin/layouts/footer.php'); ?>
  <!--FIN   Main Footer -->

</div> <!--fin de toda la pagina wrapper -->
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="../../../view/admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../../view/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../../view/admin/dist/js/adminlte.min.js"></script>
</body>
</html>



