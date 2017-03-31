<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Grupos extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model('Grupos_model');
    }

    public function insertarGrupo(){
        $horario="";
        $variable = $this->input->post('dias');

        $longitud = count($variable);
 
        //Recorro todos los elementos
        for($i=0; $i<$longitud; $i++)
         {
      //saco el valor de cada elemento
     //   echo $variable[$i]."<br>";

             if($variable[$i] == "lunes"){
                $hi=  $this->input->post('lunesHi');
                $hf=  $this->input->post('lunesHf');
                $horario = $horario."Lunes".",".$hi.",".$hf.",";                
                
            }

             if($variable[$i] == "martes"){
                $hi=  $this->input->post('martesHi');
                $hf=  $this->input->post('martesHf');
                $horario = $horario."Martes".",".$hi.",".$hf.",";
             }

              if($variable[$i] == "miercoles"){
                $hi=  $this->input->post('miercolesHi');
                $hf=  $this->input->post('miercolesHf');
                $horario = $horario."Miércoles".",".$hi.",".$hf.",";
             }

              if($variable[$i] == "jueves"){
                $hi=  $this->input->post('juevesHi');
                $hf=  $this->input->post('juevesHf');
                $horario = $horario."Jueves".",".$hi.",".$hf.",";
             }
              if($variable[$i] == "viernes"){
                $hi=  $this->input->post('viernesHi');
                $hf=  $this->input->post('viernesHf');
                $horario = $horario."Viernes".",".$hi.",".$hf.",";
             }
              if($variable[$i] == "sabado"){
                $hi=  $this->input->post('sabadoHi');
                $hf=  $this->input->post('sabadoHf');
                $horario = $horario."Sabado".",".$hi.",".$hf.",";
             }
        }

           //  echo $horario;
             $datos['horario'] = $horario;
             $datos['capacidad'] =  $this->input->post('capacidad');
             $datos['cve_materia'] = $this->input->post('materia');
             $datos['cve_profesor'] = $this->input->post('nombreP');
             $result = $this->Grupos_model->crearGrupo($datos);
              redirect($this->config->site_url()."/Paginas/vista/exito");


    }


    public function getMaterias(){
        $result = $this->db->get('carrera');
        return $result->result_array();
    }

    public function buscarMateria(){
        $clave =$this->db->get('materia');
        $result =$this->Materias_model->buscarMateria($clave);
        return $result->result_array();
    }

    public function actualizarGrupo(){
        $horario="";
        $variable = $this->input->post('dias');

        $longitud = count($variable);
 
        //Recorro todos los elementos
        for($i=0; $i<$longitud; $i++)
         {
      //saco el valor de cada elemento
     //   echo $variable[$i]."<br>";

             if($variable[$i] == "lunes"){
                $hi=  $this->input->post('lunesHi');
                $hf=  $this->input->post('lunesHf');
                $horario = $horario."Lunes".",".$hi.",".$hf.",";                
                
            }

             if($variable[$i] == "martes"){
                $hi=  $this->input->post('martesHi');
                $hf=  $this->input->post('martesHf');
                $horario = $horario."Martes".",".$hi.",".$hf.",";
             }

              if($variable[$i] == "miercoles"){
                $hi=  $this->input->post('miercolesHi');
                $hf=  $this->input->post('miercolesHf');
                $horario = $horario."Miércoles".",".$hi.",".$hf.",";
             }

              if($variable[$i] == "jueves"){
                $hi=  $this->input->post('juevesHi');
                $hf=  $this->input->post('juevesHf');
                $horario = $horario."Jueves".",".$hi.",".$hf.",";
             }
              if($variable[$i] == "viernes"){
                $hi=  $this->input->post('viernesHi');
                $hf=  $this->input->post('viernesHf');
                $horario = $horario."Viernes".",".$hi.",".$hf.",";
             }
              if($variable[$i] == "sabado"){
                $hi=  $this->input->post('sabadoHi');
                $hf=  $this->input->post('sabadoHf');
                $horario = $horario."Sabado".",".$hi.",".$hf.",";
             }
        }

           //  echo $horario;
             $clave = $this->input->post('claveG');
             $datos['horario'] = $horario;
             $datos['capacidad'] =  $this->input->post('capacidad');
             $datos['cve_materia'] = $this->input->post('materia');
             $datos['cve_profesor'] = $this->input->post('nombreP');
             $result = $this->Grupos_model->modificarGrupo($clave,$datos);
              redirect($this->config->site_url()."/Paginas/vista/exito");

    }

    public function eliminarGrupo(){
        $clave = $this->input->post('claveG');
        $this->Grupos_model->eliminarGrupo($clave);
        redirect($this->config->site_url()."/Paginas/vista/exito");


    }

}
