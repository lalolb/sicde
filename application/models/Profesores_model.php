<?php

class Profesores_model extends CI_Model{

	public function __construct(){
		$this->load->database();
	}

	public function postProfesor($datos_personales, $domicilio){
		$this->db->insert('datos_personales', $datos_personales);
		$profesor['cve_datos'] = $this->db->insert_id();

		$this->db->insert('domicilio', $domicilio);
		$profesor['datos_domicilio'] = $this->db->insert_id();

		$profesor['clave'] = $datos_personales['RFC'];
		$profesor['password'] = $datos_personales['RFC'];

		return $this->db->insert('profesor', $profesor);
	}

}