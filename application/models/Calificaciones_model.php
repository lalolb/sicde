<?php

class Calificaciones_model extends CI_Model{
	
	public function __construct(){
		$this->load->database();
	}

	public function getCalificacion($clave)
	{
		$this->db->where('clave',$clave);
		$result = $this->db->get('calificacion');
		return $result->row_array();
	}

	public function califica($examen, $calif, $aprobado, $clave)
	{
		/*$this->db->where('clave',$clave);
		$this->db->update('calificacion',$calif);*/

		$query = "UPDATE calificacion SET ".$examen."='".$calif."', aprobado=".$aprobado." where clave=".$clave;
		$this->db->query($query);

		$this->db->where('cve_calificacion',$clave);
		$result = $this->db->get('alumnos_x_grupo');
		$result = $result->row_array();
		$result = $result['cve_grupo'];
		return $result;
	}

}

?>