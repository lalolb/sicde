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
		$profesor['password'] = hash('md5',$datos_personales['RFC']);

		return $this->db->insert('profesor', $profesor);
	}

	public function getProfesor($clave){
		$sql = "SELECT dp.*, p.clave as cve_profesor, p.datos_domicilio FROM datos_personales AS dp INNER JOIN profesor AS p ON p.clave='".$clave."' AND p.cve_datos=dp.clave";
		$result = $this->db->query($sql);
		return $result->row_array();
	}

	public function getProfesores(){
		$this->db->select('*');    
		$this->db->from('datos_personales');
		$this->db->join('profesor', 'datos_personales.rfc = profesor.clave');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function modificarDatosProfesor($clave_datos,$datos_personales){
		$this->db->where('clave',$clave_datos);
		return $this->db->update('datos_personales',$datos_personales);
	}

	public function deleteProfesor($profesor,$datos,$domicilio){
		$this->db->where('cve_profesor',$profesor);
		$this->db->delete('grupo');

		$this->db->where('clave',$profesor);
		$this->db->delete('profesor');

		$this->db->where('clave',$datos);
		$this->db->delete('datos_personales');

		$this->db->where('clave',$domicilio);
		$this->db->delete('domicilio');
	}

	public function getProfesorLogin($clave,$pass){
		$this->db->where('clave',$clave);
		$this->db->where('password',hash('md5',$pass));
		$result = $this->db->get('profesor');
		return $result->row_array();
	}

	public function getDatosPersonales($clave){
		$this->db->where('clave',$clave);
		$result = $this->db->get('datos_personales');
		return $result->row_array();
	}
}