<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paginas extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model('Carreras_model');
    }

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
		$data['carreras'] = $this->Carreras_model->getCarreras();
		$this->vista('alumnoCrear',$data);
	}

	public function alumnoModificar(){
		$this->vista('alumnoModificar');
	}

	public function materiaCrear(){
		$this->vista('materiaCrear');
	}

	public function materiaModificar(){
		$this->vista('materiaModificar');
	}

	public function grupoCrear(){
		$this->vista('grupoCrear');
	}

	public function grupoModificar(){
		$this->vista('grupoModificar');
	}
}
