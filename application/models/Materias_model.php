<?php
class Materias_model extends CI_Model {

	public function __construct(){
		$this->load->database();
	   
	}

	public function crearMateria($datos){
		$this->db->insert('materia', $datos);
		
	}

	public function getMaterias(){
		$result = $this->db->get('materia');
		return $result->result_array();
	}

	public function buscarMateria($clave){
		$this->db->where('clave', $clave);	
		$result = $this->db->get('materia');
		return $result->row_array();	
	   
    }


    public function modificarMateria($datos, $clave){
    	$this->db->where('clave', $clave);
    	$this->db->update('materia', $datos);
    }

    public function eliminarMateria($clave){
    	$this->db->where('cve_materia', $clave);
    	$this->db->delete('grupo');
		$this->db->delete('materia', array('clave' => $clave)); 

    }
}