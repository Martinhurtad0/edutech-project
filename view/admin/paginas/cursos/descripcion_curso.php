<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Descripcion curso</title>
    <link rel="stylesheet" href="assets/css/descripcion_curso.css" />
    <link rel="icon" href="assets/img/logo-kepler-removebg-preview.png" />
  </head>
  <body>
    <main class="contenedor">
      <section class="primera">
        <div class="cerrar">
          <a href="#"><img src="assets/img/x.png" alt="curso" /></a>
        </div>
        <div class="curso">
          <div class="imagen">
            <img src="assets/img/titulo-curso.png" alt="curso" />
          </div>
          <div class="descripcion">
            <h2>Titulo del curso</h2>
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. At sequi
              deserunt impedit saepe aspernatur odio
            </p>
          </div>
        </div>
      </section>
      <section class="segunda">
        <div class="horarios">
          <h3>HORARIOS</h3>
          <div class="icon">
            <img src="assets/img/horarios.png" alt="horarios" />
          </div>
          <dl>
            <dt>Lunes: 2:00pm a 6:00pm</dt>
            <dt>Martes: 2:00pm a 6:00pm</dt>
            <dt>Jueves: 2:00pm a 6:00pm</dt>
            <dt>Vienes: 2:00pm a 6:00pm</dt>
          </dl>
        </div>
        <div class="docentes">
          <h3>DOCENTES</h3>
          <div class="icon">
            <img src="assets/img/docentes.png" alt="docentes" />
          </div>
          <select name="docente" id="docente">
            <option value="daniel">Daniel Amaya</option>
            <option value="martin">Brayan Martin</option>
            <option value="stich">Brayan Stich</option>
            <option value="stiven">Brayan Stiven</option>
            <option value="pedro">Pedro A Barrera</option>
          </select>
        </div>
      </section>
      <section class="tercera">
        <div class="aprender">
          <h4>¿Qué aprenderás?</h4>
        </div>
        <div class="check">
          <div class="izquierda">
            <label for="tema1"><input type="checkbox" /> Tema 1</label>
            <label for="tema2"><input type="checkbox" /> Tema 2</label>
          </div>
          <div class="derecha">
            <label for="tema3"><input type="checkbox" /> Tema 3</label>
            <label for="tema4"><input type="checkbox" /> Tema 4</label>
          </div>
        </div>
      </section>
      <section class="final">
        <a href="#">Adquirir curso</a>
      </section>
    </main>
  </body>
</html>
