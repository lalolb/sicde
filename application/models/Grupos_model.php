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

    public function getGruposProfe($cve_profe){
    	$query = "SELECT g.clave, m.nombre, g.cve_profesor, g.capacidad, g.horario FROM grupo as g INNER JOIN materia as m ON m.clave=g.cve_materia WHERE cve_profesor='".$cve_profe."'";
    	$result = $this->db->query($query);
    	return $result->result_array();
    }

    public function getGrupo($cve_grupo){
    	$query = "SELECT a.clave as cuenta, dp.nombre, dp.paterno, dp.materno, c.* from datos_personales as dp inner join alumno as a on a.cve_datos = dp.clave inner join alumnos_x_grupo as axg on axg.cve_alumno=a.clave inner join calificacion as c on c.clave = axg.cve_calificacion where axg.cve_grupo=".$cve_grupo;
    	$result = $this->db->query($query);
    	return $result->result_array();
    }

}