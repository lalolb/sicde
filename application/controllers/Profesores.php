<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profesores extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model('Profesores_model');
    }

    public function insertarProfesor(){
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
        $generales['foto'] = "avatar04.png";

		//El alumno llena sus datos domiciliares después, así que mandamos un arreglo vacío
		$domicilio['calle'] = '';
		$domicilio['colonia'] = '';
		$domicilio['cp'] = '';
		$domicilio['telefono'] = '';
		$domicilio['pais'] = '';
		$domicilio['estado'] = '';
		$domicilio['municipio'] = '';

		$result = $this->Profesores_model->postProfesor($generales, $domicilio);
		redirect($this->config->site_url()."/Paginas/vista/exito");

    }

    public function modificarProfesor(){

        //Obtenemos las claves ocultas
        $clave_datos = $this->input->post('cve_datos');

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

        $result = $this->Profesores_model->modificarDatosProfesor( $clave_datos, $generales);
        redirect($this->config->site_url()."/Paginas/vista/exito");

    }

    public function eliminaProfesor(){
        $clave_profesor = $this->input->post('cve_profesor');
        $clave_datos = $this->input->post('cve_datos');
        $domicilio = $this->input->post('datos_domicilio');

        $this->Profesores_model->deleteProfesor($clave_profesor,$clave_datos,$domicilio);
        redirect($this->config->site_url()."/Paginas/vista/exito");
    }
}
