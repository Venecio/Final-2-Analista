
<html>
<head>
    <meta charset="UTF-8">
    <title>Mostrando Datos</title>
    <link rel="shortcut icon" href="../../recursos/iconoUniversidad.jpg">
    <link rel="stylesheet" href="../../estilos/estilostabla.css"/>
    <link rel="stylesheet" href="../../estilos/estilosvistas.css"/>
</head>
<body>


        <h2 class="Titulo">Estos son los datos que hay actualmente</h2><br>
        ­<table>
            <tr>
                <td class="columnas">ID</td>
                <td class="columnas">Nombre del alumno</td>
                <td class="columnas">Registrado en</td>
                <td class="columnas">Carrera</td>
                
            <br>
            </tr>  
            <?php

            require "../../funcionabilidad/gestion_inscripciones.php";
            $inscripciones = new inscripciones();
            $listado_inscriptos = $inscripciones->listar_inscripciones();
            
            foreach ($listado_inscriptos as $key) {
              ?>
                <tr>
                    <td><?php echo $key['id'] ?></td>
                    <td><?php echo $key['nombre_alumno'] ?></td>
                    <td><?php echo $key['nombre_materia'] ?></td>
                    <td><?php echo $key['carrera_materia'] ?></td>

                    <td><?php echo'<a class="mod" href="' . htmlspecialchars("eliminar_inscripcion.php?id=" .urlencode($key['id'])) . '">Eliminar</a>' ?></td>
                </tr>      
            <?php
            }
        ?>
    </table>
        <br>
        <br>

            <a class="indexa" href="../../index.php">Ir al inicio</a>

    <body>
        <html>


<a href=view_exp.php?compna=",urlencode($compname),"