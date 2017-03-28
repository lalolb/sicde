<?php
class Materias_model extends CI_Model {

	public function __construct(){
		$this->load->database();
	}

	public function crearMateria($datos){
		$this->db->insert('materia', $datos);
		
	}

}