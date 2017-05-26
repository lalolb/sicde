<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calificaciones extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model('Calificaciones_model');
    }

    public function calificar(){
    	$examen=$this->input->post('examen');
    	$calif=$this->input->post('calificacion');

        if (($calif == "--") || ($calif == "SD") || ($calif == "NP")) {
            $aprobado=0;
        }else{
            if (floatval($calif) >= 6) {
                $aprobado=1;
            }else{
                $aprobado=0;
            }
        }

        $clave = $this->input->post('clave');

		$result = $this->Calificaciones_model->califica($examen, $calif, $aprobado, $clave);
		redirect($this->config->site_url()."/Paginas/verGrupo/".$result);

    }
}
