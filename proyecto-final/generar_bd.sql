DROP DATABASE IF EXISTS basephp;
CREATE DATABASE basephp CHARACTER SET utf8mb4;
USE basephp;

CREATE TABLE alumno (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  apellido VARCHAR(20) NOT NULL,
  nombres VARCHAR(40) NOT NULL,
  edad INT(11) NOT NULL,
  email VARCHAR(25) NOT NULL
);

CREATE TABLE materia (
  id INT(11) AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(20) NOT NULL,
  curso VARCHAR(3) NOT NULL,
  carrera VARCHAR(20) NOT NULL
);

CREATE TABLE inscripcion (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  id_alumno INT(11) NOT NULL,
  id_materia INT(11) NOT NULL
);