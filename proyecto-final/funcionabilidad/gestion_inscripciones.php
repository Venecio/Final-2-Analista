<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$id_alumno = $_POST['id_alumno'];
	$id_materia = $_POST['id_materia'];

	$inscripciones = new inscripciones();

	$inscripciones->agregar_inscripcion($id_alumno, $id_materia);
}


class inscripciones{
	private $db;
	private $inscripciones;

	public function __construct(){
		require $_SERVER['DOCUMENT_ROOT']."/Proyecto_final/proyecto-final/base_de_datos/db_connect.php";

        $this->db=Conectar::conexion();
        $this->inscripciones=array();
    }
    

	public function agregar_inscripcion($id_alumno, $id_materia){
	    $consulta_insertar_inscripcion = "INSERT INTO inscripcion (id_alumno, id_materia)
	                VALUES ('$id_alumno','$id_materia' )";
	    $resultado = $this->db->query($consulta_insertar_inscripcion); 
	    
	    if ($resultado){
	    	echo "Datos insertados";
	    	HEADER("location:../vistas/inscripciones/lista_inscripciones.php");
	    } else {
	    	echo "Los datos no se pudieron insertar";
	    	$e = $this->db->error(); // Gets the last error that has occured
			echo $e['message'];
	    }
	}


	public function listar_inscripciones(){
		$consulta_listar_inscripciones = "SELECT inscripcion.id, inscripcion.id_alumno, CONCAT(CONCAT(alumno.apellido,','),alumno.nombres) as nombre_alumno, inscripcion.id_materia, materia.nombre as nombre_materia,materia.carrera as carrera_materia
                                                FROM inscripcion 
                                                INNER JOIN alumno
                                                ON alumno.id = inscripcion.id_alumno
                                                INNER JOIN materia
                                                ON materia.id = inscripcion.id_materia;";

        $consulta=$this->db->query($consulta_listar_inscripciones);
        while($filas=$consulta->fetch_assoc()){
            $this->inscripciones[]=$filas;
        }
        return $this->inscripciones;
    }


	public function listar_inscripcion_por_id($id){
		$consulta_listar_inscripciones = "SELECT * FROM inscripcion WHERE id = '$id';";
        $consulta=$this->db->query($consulta_listar_inscripciones);
        return $consulta->fetch_assoc();
    }


	public function eliminar_inscripcion_por_id($id){
		$consulta_listar_inscripciones = "DELETE FROM inscripcion WHERE id = '$id';";
        $resultado=$this->db->query($consulta_listar_inscripciones);
        if ($resultado){
	    	echo "Datos eliminados";
	    	HEADER("location:./lista_inscripciones.php");
	    } else {
	    	echo "Los datos no se pudieron eliminar";
	    }
    }
}

?>