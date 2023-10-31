<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDUTECH</title>
    <link rel="stylesheet" href="../resource/css/signUp/sign_up_admin.css">
</head>
<body>
    <div class="log-container">
    <div class="cuenta-container">
     <h1> <a href="../index.php"> <img src="../resource/img/updatesale_login_signup/LOGOLOGIN.png" alt=""></a> Crea tu cuenta</h1>
     <div class="registro-container">
      <a href="login.php" >iniciar sesion</a>
      <a href="">Registrate</a>
     </div>
     
     <div class="formulario">
     <form action="" method='POST'>
        
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
        <img src="../resource/img/updatesale_login_signup/imagenlogin.png" alt="">
 </div>


    </div>
    
</body>
</html>