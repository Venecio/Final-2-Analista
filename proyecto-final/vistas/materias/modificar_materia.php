<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Modificar Datos</title>
    <link rel="stylesheet" href="../../estilos/estilosvistas.css"/>
  
</head>
<body>
    <br>
    <?php
        require "../../funcionabilidad/acciones_para_materias.php";
        $materias = new materias();
        $materia = $materias->listar_materia_por_id($_GET['id']);
    ?>
    <form method="POST" action="../../funcionabilidad/acciones_para_materias.php">
        <h2 class="Titulo">Ingrese los datos a modificar en base de datos</h2>
        <label>Id </label><br>
        <input type="text" id="id" name="id"  value="<?php echo $materia['id'] ?>" readonly><br>
        <label>Nombre de la materia </label><br>
        <input type="text" name="nombre" value=<?php echo $materia['nombre']?> ><br>
        <label>Año en cual se dicta</label><br>
        <input type="number" min="1" name="curso" value=<?php echo $materia['curso']?> ><br>
        <label>Carrera a la que pertenece</label><br>
        <input type="text" name="carrera" value=<?php echo $materia['carrera']?>><br>
        <br>
        <input type="submit" name="modificar" value="Modificar"> 
        <br>
        <br>
      <a class="indexa" href="../../index.php">Ir al inicio</a>

        
    <body>
        <html>
