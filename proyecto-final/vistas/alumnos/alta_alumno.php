<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Insertar Datos</title>
    <link rel="stylesheet" href="./estilos.css"/>
</head>
<body>
    <br>
    
    <form method="POST" action="../../funcionabilidad/acciones_para_alumnos.php"> 
        <h2>Ingrese los datos a guardar en base de datos</h2>
        <label>Apellido </label><br>
        <input type="text" name="apellido" placeholder="Ingrese un apellido" ><br>
        <label>Nombre </label><br>
        <input type="text" name="nombre" placeholder="Ingrese los nombres" ><br>
        <label>Edad </label><br>
        <input type="number" name="edad" min="1" placeholder="Ingrese la edad"><br>
        <label>Correo </label><br>
        <input type="email" name="email" placeholder="Ingrese el email" ><br>
        <br>
        <input type="submit" name="guardar" value="guardar"> 
        <br>

        <br>

        <h5><a href="../../index.php">Ir al inicio</a></h5>



    <body>
<html>
