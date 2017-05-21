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
                $this->session->set_userdata("clave",$usuario['clave']);
    			$nombre = $this->Admin_model->getDatosPersonales($usuario['cve_datos']);
				$this->session->set_userdata("nombre",$nombre['nombre']);
                $this->session->set_userdata("foto",$nombre['foto']);
      			redirect($this->config->site_url());
    		}
        	
        break;

    	case 'alumno':
        	$usuario = $this->Alumnos_model->getAlumnoLogin($clave,$pass);
            if (empty($usuario)) {
                redirect($this->config->site_url());
            }else{
                $this->session->set_userdata("tipo",$tipo);
                $this->session->set_userdata("clave",$usuario['clave']);
                $nombre = $this->Alumnos_model->getDatosPersonales($usuario['cve_datos']);
                $this->session->set_userdata("nombre",$nombre['nombre']);
                $this->session->set_userdata("foto",$nombre['foto']);
                redirect($this->config->site_url());
            }
        break;

    	case 'profesor':
        	$usuario = $this->Profesores_model->getProfesorLogin($clave,$pass);
            if (empty($usuario)) {
                redirect($this->config->site_url());
            }else{
                $this->session->set_userdata("tipo",$tipo);
                $this->session->set_userdata("clave",$usuario['clave']);
                $nombre = $this->Profesores_model->getDatosPersonales($usuario['cve_datos']);
                $this->session->set_userdata("nombre",$nombre['nombre']);
                $this->session->set_userdata("foto",$nombre['foto']);
                redirect($this->config->site_url());
            }
        break;
		}
	}

	public function salir(){
		$array_items = array('tipo','nombre','clave');
		$this->session->unset_userdata($array_items);
		redirect($this->config->site_url());
	}

    public function cambiarFoto(){
        //Creamos un vector con la configuración para subir la foto
        $config['upload_path'] = './uploads/';
        $config['file_name'] = $this->session->userdata['clave'];
        $config['allowed_types'] = 'jpg';
        $config['max_size'] = 100;
        $config['max_width'] = 1024;
        $config['max_height'] = 768;

        $this->load->library('upload', $config);

        //Borramos la foto actual
        if (file_exists('./uploads/'.$config['file_name'].'.jpg')) {
            unlink('./uploads/'.$config['file_name'].'.jpg');
        }

        if ( ! $this->upload->do_upload('foto')){ //Subimos la foto nueva
            //Si hay error lo regresa para enviar la foto
            $error = array('error' => $this->upload->display_errors());
            redirect($this->config->site_url()."/Paginas/cambiarFoto/error");
        }else{
            //Si todo sale bien registra el cambio
            $data = $this->upload->data();
            //Revisamos si es alumno o profesor
            if ($this->session->userdata['tipo']=='alumno') {
                $this->Alumnos_model->cambiarFoto($data['file_name'] , $this->session->userdata['clave']);
            } elseif ($this->session->userdata['tipo']=='profesor') {
                $this->Profesores_model->cambiarFoto($data['file_name'] , $this->session->userdata['clave']);
            }
            $this->session->set_userdata("foto",$data['file_name']);
            redirect($this->config->site_url()."/Paginas/vista/exito");
        }
    }

    public function profesorCambiarPass()
    {
        $clave = $this->session->userdata['clave'];
        $antigua = $this->input->post('password');
        $nueva = $this->input->post('password_new_1');
        $this->Profesores_model->cambiarPass($clave,$antigua,$nueva);
        redirect($this->config->site_url()."/Paginas/vista/exito");
    }
}
