<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	public function login(){
    	$tipo=$this->input->post('tipo');
    	$usuario=$this->input->post('usuario');
		$this->session->set_userdata("tipo",$tipo);
		$this->session->set_userdata("nombre",$usuario);
      	redirect($this->config->site_url());
	}

	public function salir(){
		$array_items = array('tipo');
		$this->session->unset_userdata($array_items);
		redirect($this->config->site_url());
	}
}
