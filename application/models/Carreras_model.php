<?php
class Carreras_model extends CI_Model {

	public function __construct(){
		$this->load->database();
	}

	public function getCarreras(){
		$result = $this->db->get('carrera');
		return $result->result_array();
	}

}