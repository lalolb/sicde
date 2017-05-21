<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calificaciones extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model('Calificaciones_model');
    }

    public function calificar(){
    	//Obtenemos los datos generales
    	$calif['ordinario']=$this->input->post('ordinario');
    	$calif['extra']=$this->input->post('extra');
    	$calif['titulo']=$this->input->post('titulo');
    	$calif['aprobado']=1;

        $clave = $this->input->post('clave');

		$result = $this->Calificaciones_model->califica($calif, $clave);
		redirect($this->config->site_url()."/Paginas/verGrupo/".$result);

    }
}
