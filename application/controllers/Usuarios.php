<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model('Profesores_model');
        $this->load->model('Alumnos_model');
        $this->load->model('Admin_model');
    }

	public function login(){
    	$tipo=$this->input->post('tipo');
    	$clave=$this->input->post('usuario');
    	$pass=$this->input->post('password');

      	switch ($tipo) {
    	case 'admin':
    		$usuario = $this->Admin_model->getAdmin($clave,$pass);
    		if (empty($usuario)) {
    			redirect($this->config->site_url());
    		}else{
    			$this->session->set_userdata("tipo",$tipo);
    			$nombre = $this->Admin_model->getDatosPersonales($usuario['cve_datos']);
				$this->session->set_userdata("nombre",$nombre['nombre']);
      			redirect($this->config->site_url());
    		}
        	
        break;

    	case 'alumno':
        	$usuario = $this->Alumnos_model->getAlumnoLogin($clave,$pass);
            if (empty($usuario)) {
                redirect($this->config->site_url());
            }else{
                $this->session->set_userdata("tipo",$tipo);
                $nombre = $this->Alumnos_model->getDatosPersonales($usuario['cve_datos']);
                $this->session->set_userdata("nombre",$nombre['nombre']);
                redirect($this->config->site_url());
            }
        break;

    	case 'profe':
        	$usuario = $this->Profesores_model->getProfesorLogin($clave,$pass);
            if (empty($usuario)) {
                redirect($this->config->site_url());
            }else{
                $this->session->set_userdata("tipo",$tipo);
                $nombre = $this->Profesores_model->getDatosPersonales($usuario['cve_datos']);
                $this->session->set_userdata("nombre",$nombre['nombre']);
                redirect($this->config->site_url());
            }
        break;
		}
	}

	public function salir(){
		$array_items = array('tipo','nombre');
		$this->session->unset_userdata($array_items);
		redirect($this->config->site_url());
	}
}
