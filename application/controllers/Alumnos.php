<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alumnos extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model('Alumnos_model');
    }

    public function insertarAlumno(){
    	//Obtenemos los datos generales
    	$generales['nombre']=$this->input->post('nombreA');
    	$generales['paterno']=$this->input->post('apaterno');
    	$generales['materno']=$this->input->post('amaterno');
    	$generales['fecha_nacimiento']=$this->input->post('fecha_nacimiento');
    	$generales['genero']=$this->input->post('genero');
    	$generales['RFC']=$this->input->post('rfc');
    	$generales['pais']=$this->input->post('nacionalidad');
    	$generales['curp']=$this->input->post('curp');
    	$generales['correo_personal']=$this->input->post('correo');
    	$generales['pais_nacimiento']=$this->input->post('pais_nacimiento');
    	$generales['estado']=$this->input->post('estado');
    	$generales['municipio']=$this->input->post('municipio_nacimiento');
		$generales['tipo_sangre']=$this->input->post('sangre');
		$generales['contacto_emergencia']=$this->input->post('tutor');
		$generales['clave_imss']=$this->input->post('imss');
		$generales['grupo_indigena']=$this->input->post('grupo_i');
		$generales['dialecto_indigena']=$this->input->post('dialecto_i');

		//El alumno llena sus datos domiciliares después, así que mandamos un arreglo vacío
		$domicilio['calle'] = '';
		$domicilio['colonia'] = '';
		$domicilio['cp'] = '';
		$domicilio['telefono'] = '';
		$domicilio['pais'] = '';
		$domicilio['estado'] = '';
		$domicilio['municipio'] = '';

		//Guardamos la carrera del alumno
		$alumno['cve_carrera'] = $this->input->post('carrera');

		$result = $this->Alumnos_model->postAlumno($generales, $domicilio, $alumno);
		redirect($this->config->site_url()."/Paginas/vista/exito");

    }
}
