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
        $this->load->model('Semestres_model');
        $this->load->model('Calificaciones_model');
        $this->load->model('Domicilio_model');
        $this->load->model('Estadisticas_model');
    }

	public function vista($pagina = 'index', $data = null){

		//Revisamos si hay una sesión activa
		if (!isset($this->session->userdata['tipo'])) {
			$this->load->view('login.php');
		} else {
			$data['tipo'] = $this->session->userdata['tipo'];
			$data['nombre'] = $this->session->userdata['nombre'];
			$data['foto'] = $this->session->userdata['foto'];
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

	public function alumnoEliminar(){
		$data['clave_alumno'] = $this->input->get('alumno');
		$data['alumno'] = $this->Alumnos_model->getAlumno($data['clave_alumno']);
		$data['carrera'] = $this->Carreras_model->getCarrera($data['alumno']['cve_carrera']);
		$this->vista('alumnoEliminar',$data);
	}

	public function alumnoConsultar(){
		$data['alumnos'] = $this->Alumnos_model->getAlumnos();
		$this->vista('alumnoConsultar',$data);
	}

	public function profesorCrear(){
		$this->vista('profesorCrear');
	}

	public function profesorBuscar($accion){
		$data['accion'] = $accion;
		$data['profesores'] = $this->Profesores_model->getProfesores();
		$this->vista('profesorBuscar',$data);
	}

	public function profesorModificar(){
		$data['rfc_profesor'] = $this->input->get('profesor');
		$data['profesor'] = $this->Profesores_model->getProfesor($data['rfc_profesor']);
		$this->vista('profesorModificar',$data);
	}

	public function profesorEliminar(){
		$data['rfc_profesor'] = $this->input->get('profesor');
		$data['profesor'] = $this->Profesores_model->getProfesor($data['rfc_profesor']);
		$this->vista('profesorEliminar',$data);
	}

	public function profesorConsultar(){
		$data['profesores'] = $this->Profesores_model->getProfesores();
		$this->vista('profesorConsultar',$data);
	}

	public function materiaCrear(){
		$data['carreras'] = $this->Carreras_model->getCarreras();
		$this->vista('materiaCrear', $data);
	}

	public function materiaModificar($accion){
		$data['accion'] =$accion;
		$data['materias'] = $this->Materias_model->getMaterias();
		$this->vista('materiaBuscar',$data);
	}
	

    public function buscarMateria(){

        $clave =$this->input->get('materia');
        $data['materia'] =$this->Materias_model->buscarMateria($clave);
        $data['carreras'] = $this->Carreras_model->getCarreras();
        $this->vista('materiaModificar',$data);
    }


	public function  materiasConsultar(){
		$data['materias'] = $this->Materias_model->getMaterias();
		$data['carreras'] = $this->Carreras_model->getCarreras();
		$this->vista('materiaConsultar', $data);
    }

 	public function eliminarMateria(){
 		$clave =$this->input->get('materia');
        $data['materia'] =$this->Materias_model->buscarMateria($clave);
        $data['carreras'] = $this->Carreras_model->getCarreras();
        $this->vista('materiaEliminarConfirmar',$data);

 	}


	public function grupoCrear(){
		$data['materias']= $this->Materias_model->getMaterias();
		$data['profesores'] = $this->Profesores_model->getProfesores();
		$this->vista('grupoCrear', $data);

	}

	public function grupoModificar($accion){
		$data['accion'] = $accion;
		$data['grupos'] = $this->Grupos_model->getGrupos();		
		$this->vista('grupoBuscar', $data);
	}

	public function grupoBuscar(){
		$clave =$this->input->get('grupo');
        $data['grupo'] =$this->Grupos_model->buscarGrupo($clave);
        $data['profesores']= $this->Profesores_model->getProfesores();
        $data['materias'] = $this->Materias_model->getMaterias();
        $this->vista('grupoModificar',$data);

	}

	public function grupoConsultar(){
		$data['grupos'] = $this->Grupos_model->getGrupos();
        $this->vista('grupoConsultar',$data);

	}

	public function grupoEliminar(){
		$clave =$this->input->get('grupo');
        $data['grupo'] =$this->Grupos_model->buscarGrupo($clave);
        $data['profesores']= $this->Profesores_model->getProfesores();
        $data['materias'] = $this->Materias_model->getMaterias();
        $this->vista('grupoEliminarConfirmar',$data);
	}

	public function verPerfil(){
		$data['clave'] = $this->session->userdata['clave'];
		$data['tipo'] = $this->session->userdata['tipo'];
		if ($data['tipo'] == "alumno") {
			$data['humano'] = $this->Alumnos_model->getAlumno($data['clave']);
		}else{
			$data['humano'] = $this->Profesores_model->getProfesor($data['clave']);
		}
		$this->vista('verPerfil',$data);
	}

	public function verDomicilio(){
		$data['clave'] = $this->session->userdata['clave'];
		$data['tipo'] = $this->session->userdata['tipo'];
		if ($data['tipo'] == "alumno") {
			$data['humano'] = $this->Alumnos_model->getDomicilioAlumno($data['clave']);
		}else{
			$data['humano'] = $this->Profesores_model->getDomicilioProfesor($data['clave']);
		}
		$this->vista('verDomicilio',$data);
	}

	public function cambiarFoto($error = null){
		$data['error'] = $error;
		$this->vista('cambiarFoto',$data);
	}

	public function domicilioModificar($cve_domicilio){
		$data['domicilio'] = $this->Domicilio_model->getDomicilio($cve_domicilio);
		$this->vista('domicilioModificar',$data);
	}

	public function verGrupos(){
		$data['grupos'] = $this->Grupos_model->getGruposProfe($this->session->userdata['clave']);
		$this->vista('verGrupos',$data);
	}

	public function verGrupo($clave){
		$data['alumnos'] = $this->Grupos_model->getGrupo($clave);
		$this->vista('verGrupo',$data);
	}

	public function cambiarPass($error = null){
		$data['error'] = $error;
		$this->vista('cambiarPass',$data);
	}

	public function calificar($alumno,$calif)
	{
		$data['alumno'] = $this->Alumnos_model->getAlumno($alumno);
		$data['calificaciones'] = $this->Calificaciones_model->getCalificacion($calif);
		$this->vista('calificar',$data);
	}

	public function inscripciones(){
		$data['semestres'] = $this->Semestres_model->getSemestres();
		$data['alumnos'] = $this->Alumnos_model->getAlumnos();
		$data['grupos'] = $this->Grupos_model->getGrupos();
		$this->vista('inscripciones',$data);
	}

	public function trayectoria(){
		$data['clave'] = $this->session->userdata['clave'];
		$data['alumnos'] = $this->Alumnos_model->getAlumnos();
		$data['semestres'] = $this->Alumnos_model-> getSemestreXAlumno($data['clave']);
		$data['calificaciones'] = $this->Alumnos_model-> getMateriasAlumno($data['clave']);
		$data['creditos'] = $this->Alumnos_model-> getCreditosAlumno($data['clave']);
		$this->vista('alumnoTrayectoria',$data);


	}

	public function ciclo(){
		$data['clave'] = $this->session->userdata['clave'];
		$data['alumnos'] = $this->Alumnos_model->getAlumnos();
		$data['semestres'] = $this->Alumnos_model-> getSemestreXAlumno($data['clave']);
		$data['calificaciones'] = $this->Alumnos_model-> getMateriasAlumno($data['clave']);
		$data['creditos'] = $this->Alumnos_model-> getCreditosAlumno($data['clave']);
		$this->vista('analisisCiclo',$data);


	}

	public function periodo(){
		$data['clave'] = $this->session->userdata['clave'];
		$data['idSemestres'] = $this->input->post('cve_s');
		$data['profesores'] = $this->Profesores_model->getProfesores();
		$data['alumnos'] = $this->Alumnos_model->getAlumnos();
		$data['semestres'] = $this->Alumnos_model-> getSemestreXAlumno($data['clave']);
		$data['calificaciones'] = $this->Alumnos_model-> getMateriasAlumno($data['clave']);
		$data['creditos'] = $this->Alumnos_model-> getCreditosAlumno($data['clave']);
		$this->vista('analisisCicloEspecifico',$data);

	}

	public function estadisticas(){
		$data['alumnos_M'] = $this->Estadisticas_model->getPersonas('alumno','M');
		$data['alumnos_F'] = $this->Estadisticas_model->getPersonas('alumno','F');
		$data['profesores_M'] = $this->Estadisticas_model->getPersonas('profesor','M');
		$data['profesores_F'] = $this->Estadisticas_model->getPersonas('profesor','F');

		$data['alumnos_edo'] = $this->Estadisticas_model->getPersonasEdo('alumno');
		$data['alumnos_fuera'] = $this->Estadisticas_model->getPersonasFuera('alumno');
		$data['profesores_edo'] = $this->Estadisticas_model->getPersonasEdo('profesor');
		$data['profesores_fuera'] = $this->Estadisticas_model->getPersonasFuera('profesor');

		$this->vista('estadisticas',$data);
	}

}
