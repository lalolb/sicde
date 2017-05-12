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
		$pass['password'] = hash('md5',$pass['password']);
		return $this->db->update('alumno', $pass);
	}

	public function modificarDatosAlumno($clave_datos,$datos_personales,$cve_alumno,$alumno){
		$this->db->where('clave',$clave_datos);
		$this->db->update('datos_personales',$datos_personales);
		$this->db->where('clave',$cve_alumno);
		return $this->db->update('alumno',$alumno);
	}

	public function getAlumnos(){
		$sql = "SELECT dp.nombre, dp.paterno, dp.materno, a.clave, c.nombre as cve_carrera FROM datos_personales AS dp INNER JOIN alumno AS a INNER JOIN carrera as c on a.cve_carrera=c.clave WHERE a.cve_datos=dp.clave";
		$result = $this->db->query($sql);
		return $result->result_array();
	}

	public function getAlumno($clave){
		$sql = "SELECT dp.*, a.clave as cve_alumno, a.cve_carrera, a.datos_domicilio FROM datos_personales AS dp INNER JOIN alumno AS a ON a.clave=".$clave." AND a.cve_datos=dp.clave;";
		$result = $this->db->query($sql);
		return $result->row_array();
	}

	public function getDomicilioAlumno($clave){
		$sql = "SELECT d.*, a.clave as cve_alumno FROM domicilio AS d INNER JOIN alumno AS a ON a.clave=".$clave." AND a.cve_datos=d.clave";
		$result = $this->db->query($sql);
		return $result->row_array();
	}

	public function deleteAlumno($alumno,$datos,$domicilio){
		$this->db->where('clave',$alumno);
		$this->db->delete('alumno');

		$this->db->where('clave',$datos);
		$this->db->delete('datos_personales');

		$this->db->where('clave',$domicilio);
		$this->db->delete('domicilio');
	}

	public function getAlumnoLogin($clave,$pass){
		$this->db->where('clave',$clave);
		$this->db->where('password',hash('md5',$pass));
		$result = $this->db->get('alumno');
		return $result->row_array();
	}

	public function getDatosPersonales($clave){
		$this->db->where('clave',$clave);
		$result = $this->db->get('datos_personales');
		return $result->row_array();
	}

	public function alumnoInscrito($cve_alumno, $cve_semestre){
		$result = $this->db->query('SELECT * FROM alumno_x_semestre WHERE cve_alumno='.$cve_alumno.' AND cve_semestre='.$cve_semestre);
		if (empty($result->result_array())) {
			return false;
		}else{
			return true;
		}
	}

	public function inscribeAlumno($data){
		if (!$this->alumnoInscrito($data['cve_alumno'], $data['cve_semestre'])) {
			$axs = array(
		        'cve_alumno' => $data['cve_alumno'],
		        'cve_semestre' => $data['cve_semestre']
			);
			$this->db->insert('alumno_x_semestre',$axs);
		}
		$calificacion = array('ordinario' => '0.0',
			'extra' => '0.0',
			'titulo' => '0.0',
			'aprobado' => 1 );

		$this->db->insert('calificacion',$calificacion);
		$data['cve_calificacion'] = $this->db->insert_id();

		return $this->db->insert('alumnos_x_grupo',$data);
	}

}