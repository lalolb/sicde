<?php

class Admin_model extends CI_Model {

	public function __construct(){
		$this->load->database();
	}

	public function getAdmin($clave,$pass){
		$this->db->where('clave',$clave);
		$this->db->where('password',hash('md5',$pass));
		$result = $this->db->get('administrador');
		return $result->row_array();
	}

	public function getDatosPersonales($clave){
		$this->db->where('clave',$clave);
		$result = $this->db->get('datos_personales');
		return $result->row_array();
	}

}