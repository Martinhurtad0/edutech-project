<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Buscar ventas</title>
    <link rel="stylesheet" href="assets/css/buscar_ventas.css" />
    <link rel="icon" href="assets/img/logo-kepler-removebg-preview.png" />
  </head>
  <body>
    <figcaption class="gestionar-ventas">
      <div class="titulo">
        <img src="assets/img/flecha.png" alt="flecha" />
        <h2>BUSCAR VENTAS</h2>
      </div>
    </figcaption>
    <div class="cuerpo">
      <div class="formulario">
        <form action="">
          <label for="id_curso"
            >ID Curso<br /><input
              type="text"
              placeholder="Seleccionar"
              id="id_curso"
              class="input"
          /></label>
          <label for="curso"
            >Nombre del curso<br />
            <select name="curso" id="curso" class="input">
              <option value="matematicas">Matematicas basicas</option>
              <option value="calculo">calculo</option>
              <option value="ingles">ingles</option>
              <option value="lectura rapida">lectura</option>
              <option value="pre-icfes">pre icfes</option>
            </select>
          </label>
          <label for="id_cliente"
            >ID Cliente<br /><input
              type="text"
              id="id_cliente"
              placeholder="Seleccionar"
              class="input"
          /></label>
          <label for="id_Venta"
            >ID Venta<br /><input
              type="text"
              id="id_Venta"
              placeholder="Seleccionar"
              class="input"
          /></label>
          <label for="Fecha_Venta"
            >Fecha Venta<br /><input type="date" id="Fecha_Venta" class="input"
          /></label>
          <input type="submit" value="Buscar ventas" class="boton" />
        </form>
      </div>
      <div class="imagen">
        <img src=" assets/img/Online store _Two Color 1.png" alt="repventa" />
      </div>
    </div>
  </body>
</html>
