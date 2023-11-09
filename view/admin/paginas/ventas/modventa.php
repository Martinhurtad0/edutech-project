<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar venta</title>
    <link rel="stylesheet" href="assets/css/modventa.css">
</head>
<body>
    <div class="big-container">
        <div class="product-container">
            <h1>MODIFICAR VENTA</h1>
        </div>
        <div class="form">
            <div class="form__1">
            <form action="">
            <label for="nomcurso"><h3>Nombre del curso</h3></label>
            <input type="number" id="nomcurso" requerid>
            <label for="canthoras"><h3>Cantidad de horas</h3> </label>
            <input type="number" id="canthoras" requerid>
            <label for="costhora"><h3>Costo por hora</h3></label>
            <input type="number" id="costhora" required>
            <label for="id"> <h3>ID cliente</h3></label>
            <input type="number" id="id" required>
            <label for="fecha"><h3>Fecha </h3> </label>
            <input type="date" id="fecha" required>
             <div class="botones">
               <button type="submit">modificar</button>
               <button type="button" id="eliminar">eliminar venta</button>
            </div>
        </form>
    </div>
        <div class="pagotarje">
            <img src="assets/imagenes/modventa.png"" alt="">
        </div>
    
</body>
</html>