<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paginas extends CI_Controller {

	public function vista($pagina = 'index', $data = null){

		//Revisamos si hay una sesión activa
		if (!isset($this->session->userdata['tipo'])) {
			$this->load->view('login.php');
		} else {
			$data['tipo'] = $this->session->userdata['tipo'];
			$data['nombre'] = $this->session->userdata['nombre'];
			$this->load->view('templates/header.php',$data);
			$this->load->view('menus/'.$data['tipo']);//$data['tipo'] = admin, alumno, profe
			$this->load->view($pagina.'.php');//Contneido principal
			$this->load->view('templates/footer.php');
		}
	}

	public function index(){
		$this->vista('index');
	}

	public function crearAlumno(){
		$this->vista('alumnoCrear');
	}
	
	public function materiaCrear(){
		$this->vista('materiaCrear');
	}
	public function materiaModificar(){
		$this->vista('materiaModificar');
	}
}
