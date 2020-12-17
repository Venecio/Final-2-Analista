<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Modificar datos</title>
    <link rel="shortcut icon" href="../../recursos/iconoUniversidad.jpg">
    <link rel="stylesheet" href="../../estilos/estilosvistas.css"/>
</head>
<body>
    <br>
    <?php
        require_once "../../funcionabilidad/acciones_para_alumnos.php";
        $alumnos = new alumnos();
        $alumno = $alumnos->listar_alumno_por_id($_GET['id']);
    ?>
    <form method="POST" action="../../funcionabilidad/acciones_para_alumnos.php" > 
        <h2 class="Titulo">Ingrese los datos a modificar en base de datos</h2>
        <label>Id </label><br>
        <input type="text" id="id" name="id"  value="<?php echo $alumno['id'] ?>" readonly><br>
        <label>Apellido </label><br>
        <input type="text" name="apellido" value=<?php echo $alumno['apellido']?>><br>
        <label>Nombre </label><br>
        <input type="text" name="nombre" value=<?php echo $alumno['nombres']?> ><br>
        <label>Edad </label><br>
        <input type="number" name="edad" min="1" value=<?php echo $alumno['edad']?> ><br>
        <label>Correo </label><br>
        <input type="email" name="email" value=<?php echo $alumno['email']?>><br>
        <br>
        <input type="submit" name="modificar" value="Modificar"> 
        <br>

        <br>



                <a class="indexa" href="../../index.php">Ir al inicio</a>

    <body>
        <html>
