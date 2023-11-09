<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Buscar usuario</title>
    <link rel="stylesheet" href="assets/css/buscar_usuario.css" />
    <link rel="icon" href="assets/img/logo-kepler-removebg-preview.png" />
  </head>
  <body>
    <figcaption class="gestionar-ventas">
      <div class="titulo">
        <img src="assets/img/flecha.png" alt="flecha" />
        <h2>BUSCAR USUARIO</h2>
      </div>
    </figcaption>
    <div class="formulario">
      <form action="">
        <label for="nombre"
          >Nombre del usuario<br /><input
            type="text"
            placeholder="Seleccionar"
            id="nombre"
            class="input"
        /></label>
        <label for="documento"
          >Numero de documento<br /><input
            type="text"
            placeholder="Seleccionar"
            id="documento"
            class="input"
        /></label>
        <label for="telefono"
          >ID Telefono<br /><input
            type="text"
            id="telefono"
            placeholder="Seleccionar"
            class="input"
        /></label>
        <label for="ciudad"
          >Ciudad<br /><input
            type="text"
            id="ciudad"
            placeholder="Seleccionar"
            class="input"
        /></label>
        <input type="submit" value="Buscar ventas" class="boton" />
      </form>
      <div class="imagen">
        <img src="assets/img/usuario.png" alt="" />
      </div>
    </div>
  </body>
</html>
