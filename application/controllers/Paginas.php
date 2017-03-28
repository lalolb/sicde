<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paginas extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model('Carreras_model');
        $this->load->model('Alumnos_model');
        $this->load->model('Materias_model');
        $this->load->model('Grupos_model');
        $this->load->model('Profesores_model');
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

	public function alumnoBuscar($accion){
		$data['accion'] = $accion;
		$data['alumnos'] = $this->Alumnos_model->getAlumnos();
		$this->vista('alumnoBuscar',$data);
	}

	public function alumnoModificar(){
		$data['clave_alumno'] = $this->input->get('alumno');
		$data['alumno'] = $this->Alumnos_model->getAlumno($data['clave_alumno']);
		$data['carreras'] = $this->Carreras_model->getCarreras();
		$this->vista('alumnoModificar',$data);
	}

	public function materiaCrear(){
		$data['carreras'] = $this->Carreras_model->getCarreras();
		$this->vista('materiaCrear', $data);
	}

	public function materiaModificar(){
		$data['materias'] = $this->Materias_model->getMaterias();
		$this->vista('materiaBuscarModificar',$data);
	}

	public function grupoCrear(){
		$data['materias']= $this->Materias_model->getMaterias();
		$data['profesores'] = $this->Profesores_model->getProfesores();
		$this->vista('grupoCrear', $data);

	}

	public function grupoModificar(){
		$this->vista('grupoModificar');
	}

	public function buscarMateria(){
        $clave =$this->input->get('materia');
        $data['materia'] =$this->Materias_model->buscarMateria($clave);
        $data['carreras'] = $this->Carreras_model->getCarreras();
        $this->vista('materiaModificar',$data);
    }
}
