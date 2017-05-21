<?php
class Domicilio extends CI_Controller{
	
	public function __construct(){
        parent::__construct();
        $this->load->model('Domicilio_model');
    }

    public function domicilioModificar(){
    	$domicilio['calle'] = $this->input->post("calle");
    	$domicilio['colonia'] = $this->input->post("colonia");
    	$domicilio['cp'] = $this->input->post("cp");
    	$domicilio['pais'] = $this->input->post("pais");
    	$domicilio['estado'] = $this->input->post("estado");
    	$domicilio['municipio'] = $this->input->post("municipio");

    	$this->Domicilio_model->updateDomicilio($this->input->post("clave"),$domicilio);
    	redirect($this->config->site_url()."/Paginas/verDomicilio");
    }

}
?>