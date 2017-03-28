<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Materias extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model('Materias_model');
    }

    public function insertarMateria(){
        $datos['nombre'] = $this->input->post('nombre');
        $datos['hrs_teoricas'] = $this->input->post('hteoricas');
        $datos['hrs_practicas'] = $this->input->post('hpracticas');
        $datos['creditos'] = $this->input->post('creditos');
        $datos['cve_carrera'] = $this->input->post('carrera');
//$datos['']

    	
		$result = $this->Materias_model->crearMateria($datos);
        redirect($this->config->site_url());
    }

    public function buscarMateria(){
        $clave =$this->input->get('materia');
        $materia =$this->Materias_model->buscarMateria($clave);
    }

}
