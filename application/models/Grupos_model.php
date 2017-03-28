<?php
class Grupos_model extends CI_Model {

	public function __construct(){
		$this->load->database();
	}

	public function crearGrupo($datos){
		$this->db->insert('grupo', $datos);
		
	}

	public function getMaterias(){
		$result = $this->db->get('materia');
		return $result->result_array();
	}

}