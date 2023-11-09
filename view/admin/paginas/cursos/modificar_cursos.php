<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Modificar cursos</title>
    <link rel="stylesheet" href="assets/css/modificar_cursos.css" />
    <link rel="icon" href="assets/img/logo-kepler-removebg-preview.png" />
  </head>

  <body>
    <header>
      <figcaption class="titulo">
        <img src="assets/img/flecha_2.png" alt="flecha" />
        <h2>MODIFICAR CURSOS</h2>
      </figcaption>
    </header>
    <section class="cuerpo">
      <div class="formulario">
        <form action="#">
          <label for="nombre"
            >Nombre del curso <br />
            <input
              type="text"
              id="nombre"
              placeholder="Escriba aqui"
              class="input"
            />
          </label>
          <label for="id"
            >Confirmar ID <br />
            <input
              type="text"
              id="id"
              placeholder="Escriba aqui"
              class="input"
            />
          </label>
          <label for="docente"
            >Asignar docente <br />
            <select name="docente" id="docente" class="input">
              <option value="daniel">Daniel Amaya</option>
              <option value="martin">Brayan Martin</option>
              <option value="stich">Brayan Stich</option>
              <option value="stiven">Brayan Stiven</option>
              <option value="pedro">Pedro A Barrera</option>
            </select>
          </label>
          <label for="">Desvincular docente </label>
          <table class="desvincular">
            <tr>
              <th>Daniel Amaya</th>
              <th>
                <a href="#"
                  >desvincular
                  <img src="assets/img/eliminar.png" alt="eliminar"
                /></a>
              </th>
            </tr>
            <tr>
              <th>Brayan Martin</th>
              <th>
                <a href="#"
                  >desvincular
                  <img src="assets/img/eliminar.png" alt="eliminar"
                /></a>
              </th>
            </tr>
            <tr>
              <th>Brayan stich</th>
              <th>
                <a href="#"
                  >desvincular
                  <img src="assets/img/eliminar.png" alt="eliminar"
                /></a>
              </th>
            </tr>
            <tr>
              <th>Brayan Stiven</th>
              <th>
                <a href="#"
                  >desvincular
                  <img src="assets/img/eliminar.png" alt="eliminar"
                /></a>
              </th>
            </tr>
            <tr>
              <th>Pedro A Barrera</th>
              <th>
                <a href="#"
                  >desvincular
                  <img src="assets/img/eliminar.png" alt="eliminar"
                /></a>
              </th>
            </tr>
          </table>
          <label for="precio"
            >Precio <br />
            <input type="number" id="precio" value="15000" class="input" />
          </label>
          <label for="descripcion"
            >Descripcion del curso <br />
            <textarea
              name="descripcion"
              id="descripcion"
              placeholder="Escriba aqui"
            ></textarea>
          </label>
        </form>
      </div>
      <div class="imagen">
        <img src="assets/img/modificar_cursos.png" alt="" />
      </div>
    </section>
    <footer>
      <div>
        <input type="submit" value="confirmar cambios" class="boton" />
      </div>
      <div>
        <button class="boton">cancelar</button>
      </div>
    </footer>
  </body>
</html>
