<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Modificar datos</title>
    <link rel="shortcut icon" href="../../recursos/iconoUniversidad.jpg">
    <link rel="stylesheet" href="../../estilos/estilostabla.css"/>
    <link rel="stylesheet" href="../../estilos/estilosvistas.css"/>
</head>
<body>


        <h2 class="Titulo">Estos son los datos que hay actualmente</h2><br>
        ­<table>
            <tr>
                <td class="columnas">ID</td>
                <td class="columnas">Apellido</td>
                <td class="columnas">Nombre</td>
                <td class="columnas">Edad</td>
                <td class="columnas">Correo Electrónico</td>
                
            </tr>  
            <?php

            require_once $_SERVER['DOCUMENT_ROOT']."/Proyecto_final/proyecto-final/funcionabilidad/acciones_para_alumnos.php";
            $alumnos = new alumnos();
            $listado_alumnos = $alumnos->listar_alumnos();
            
            foreach ($listado_alumnos as $key) {
              ?>
                <tr>
                    <td><?php echo $key['id'] ?></td>
                    <td><?php echo $key['apellido'] ?></td>
                    <td><?php echo $key['nombres'] ?></td>
                    <td><?php echo $key['edad'] ?></td>
                    <td><?php echo $key['email'] ?></td>

                    <td><?php echo'<a class="mod" href="' . htmlspecialchars("modificar_alumno.php?id=" .urlencode($key['id'])) . '" >Modificar</a>' ?></td>
                </tr>      
            <?php
            }
        ?>
    </table>
        <br>
        <a class="indexa" href="../../index.php">Ir al inicio</a>

    <body>
        <html>


<a href=view_exp.php?compna=",urlencode($compname),"