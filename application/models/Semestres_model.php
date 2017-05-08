<?php

class Semestres_model extends CI_Model {

	public function __construct(){
		$this->load->database();
	}

	public function getSemestres(){
		$result = $this->db->get('semestre');
		return $result->result_array();
	}

}