<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>REPORTE ventas</title>
    <link rel="stylesheet" href="assets/css/reporte_venta.css" />
    <link rel="icon" href="assets/img/logo-kepler-removebg-preview.png" />
  </head>
  <body>
    <figcaption class="gestionar-ventas">
      <div class="titulo">
        <img src="assets/img/flecha.png" alt="flecha" />
        <h2>REPORTE VENTAS</h2>
      </div>
    </figcaption>
    <div class="cuerpo">
      <div class="formulario">
        <form action="">
          <label for="tiempo"
            >Lapso de tiempo<br /><input
              type="text"
              placeholder="Seleccionar"
              id="tiempo"
              class="input"
          /></label>
          <label for="curso"
            >Seleccionar tipo de curso<br /><input
              type="text"
              placeholder="Seleccionar"
              id="curso"
              class="input"
          /></label>
          <label for="fecha"
            >Fecha de inicio deL reporte<br /><input
              type="date"
              id="fecha"
              class="input"
          /></label>
          <input type="submit" value="Generar reporte" class="boton" />
        </form>
      </div>
      <div class="imagen">
        <img src="assets/img/repventa.png" alt="repventa" />
      </div>
    </div>
  </body>
</html>
