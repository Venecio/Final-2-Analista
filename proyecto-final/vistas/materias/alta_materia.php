<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Insertar Datos</title>
        <link rel="stylesheet" href="../../estilos/estilosvistas.css"/>
    </head>
    <body>
        <br>
        <form method="POST" action="../../funcionabilidad/acciones_para_materias.php">
            <h2 class="Titulo">Gestion de alta de materias</h2>
            <label>Nombre de la materia </label><br>
            <input type="text" name="nombre"><br>
            <label>Año en cual se dicta</label><br>
            <input type="number" min="1" name="curso"><br>
            <label>Carrera a la que pertenece</label><br>
            <input type="text" name="carrera"><br>
            <br>
            <input type="submit" name="guardar" value="Guardar"> 
            <br>

            <br>
            <a class="indexa" href="../../index.php">Ir al inicio</a>
            <body>
            <html>
