<?php
class Alumnos_model extends CI_Model {

	public function __construct(){
		$this->load->database();
	}

	public function postAlumno($datos_personales, $domicilio, $alumno){
		$this->db->insert('datos_personales', $datos_personales);
		$alumno['cve_datos'] = $this->db->insert_id();

		$this->db->insert('domicilio', $domicilio);
		$alumno['datos_domicilio'] = $this->db->insert_id();

		$this->db->insert('alumno', $alumno);
		$pass['password'] = $this->db->insert_id();

		$this->db->where('clave', $pass['password']);
		return $this->db->update('alumno', $pass);
	}

}