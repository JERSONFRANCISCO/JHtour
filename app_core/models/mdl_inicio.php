<?php
   require_once(__MDL_PATH . "mdl_conexion.php");


   class mdl_inicio{

   	private $conexion;

   	public function __construct(){
			$this->conexion = new mdl_Conexion();	   
	} 	
	public function obtener_posts(){
		$this->conexion->consulta("SELECT titulo,descripcion,img
									FROM tbl_servicios 
									where estado = 'A' and (fechaVencimiento = '00/00/0000' OR fechaVencimiento >= CURDATE())
									order by id_tbl_servicios asc");
		$posts=array();
		$cont=0;

		while ($fila = $this->conexion->extraer_registro()) {
		    $posts[$cont][0] = $fila[0]; //titulo
		    $posts[$cont][1] = $fila[1]; //descripcion
		    $posts[$cont][2] = $fila[2]; //img
		    $cont++;
		}
		return $posts;
  	}
 }
?>