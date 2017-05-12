<?php
class Domicilio_model extends CI_Model
{
	
	public function __construct(){
		$this->load->database();
	}

	public function getDomicilio($clave){
		$this->db->where('clave',$clave);
		$result = $this->db->get('domicilio');
		return $result->row_array();
	}

	public function updateDomicilio($clave,$domicilio){
		$this->db->where('clave',$clave);
		return $this->db->update('domicilio',$domicilio);
	}
}
?>