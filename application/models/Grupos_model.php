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

	public function buscarGrupo($clave){
		$this->db->where('clave', $clave);	
		$result = $this->db->get('grupo');
		return $result->row_array();	
	   
    }

    public function getGrupos(){
    	$sql = "SELECT  g.clave, g.horario, g.capacidad, m.nombre as materia, m.clave as clavemateria, dp.nombre ,dp.paterno, dp.materno FROM grupo AS g INNER JOIN materia AS m ON m.clave=g.cve_materia INNER JOIN profesor AS p ON p.clave = g.cve_profesor INNER JOIN datos_personales AS dp ON dp.RFC=p.clave;";
		$result = $this->db->query($sql);
		return $result->result_array();
    }

    public function modificarGrupo($clave, $datos){
    	$this->db->where('clave', $clave);
    	$this->db->update('grupo', $datos);
    }


    public function eliminarGrupo($clave){
		$this->db->delete('grupo', array('clave' => $clave)); 

    }
}