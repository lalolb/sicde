<?php

class Estadisticas_model extends CI_Model {

	public function __construct(){
		$this->load->database();
	}

	public function getPersonas($tabla, $genero){
		$query = "select count(*) as v from datos_personales as dp inner join ".$tabla." as p on p.cve_datos=dp.clave where genero='".$genero."'";
		$result = $this->db->query($query);
		return $result->row_array();
	}

	public function getPersonasEdo($tabla){
		$query = "select count(*) as v from datos_personales as dp inner join ".$tabla." as p on p.cve_datos=dp.clave where dp.estado='México'";
		$result = $this->db->query($query);
		return $result->row_array();
	}

	public function getPersonasFuera($tabla){
		$query = "select count(*) as v from datos_personales as dp inner join ".$tabla." as p on p.cve_datos=dp.clave where dp.estado!='México'";
		$result = $this->db->query($query);
		return $result->row_array();
	}

}