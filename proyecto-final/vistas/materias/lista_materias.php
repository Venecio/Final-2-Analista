<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Insertar Datos</title>
    <link rel="stylesheet" href="./../../estilos/estilostabla.css"/>
    <link rel="stylesheet" href="../../estilos/estilosvistas.css"/>
</head>
<body>


        <h2 class="Titulo">Estos son los datos que hay actualmente</h2><br>
        ­<table>
            <tr>
                <td class="columnas">ID</td>
                <td class="columnas">Nombre</td>
                <td class="columnas">Curso</td>
                <td class="columnas">Carrera</td>
            </tr>  
            <?php

            require "../../funcionabilidad/acciones_para_materias.php";
            $alumnos = new materias();
            $listado_materias = $alumnos->listar_materias();
            
            foreach ($listado_materias as $key) {
              ?>
                <tr>
                    <td><?php echo $key['id'] ?></td>
                    <td><?php echo $key['nombre'] ?></td>
                    <td><?php echo $key['curso'] ?></td>
                    <td><?php echo $key['carrera'] ?></td>

                    <td><?php echo'<a class="mod" href="' . htmlspecialchars("modificar_materia.php?id=" .urlencode($key['id'])) . '">Modificar</a>' ?></td>
                </tr>      
            <?php
            }
        ?>
    </table>
        <br>
       <a class="indexa" href="../../index.php">Ir al inicio</a>

    <body>
        <html>

