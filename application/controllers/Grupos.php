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
                $horario = $horario."Lunes de ".$hi." a ".$hf."<br>";                
                
            }

             if($variable[$i] == "martes"){
                $hi=  $this->input->post('martesHi');
                $hf=  $this->input->post('martesHf');
                $horario = $horario."Martes de ".$hi." a ".$hf."<br>";
             }

              if($variable[$i] == "miercoles"){
                $hi=  $this->input->post('miercolesHi');
                $hf=  $this->input->post('miercolesHf');
                $horario = $horario."Miércoles de ".$hi." a ".$hf."<br>";
             }

              if($variable[$i] == "jueves"){
                $hi=  $this->input->post('juevesHi');
                $hf=  $this->input->post('juevesHf');
                $horario = $horario."Jueves de ".$hi." a ".$hf."<br>";
             }
              if($variable[$i] == "viernes"){
                $hi=  $this->input->post('viernesHi');
                $hf=  $this->input->post('viernesHf');
                $horario = $horario."Viernes de ".$hi." a ".$hf."<br>";
             }
              if($variable[$i] == "sabado"){
                $hi=  $this->input->post('sabadoHi');
                $hf=  $this->input->post('sabadoHf');
                $horario = $horario."Sabado de ".$hi." a ".$hf."<br>";
             }
        }

             echo $horario;
             $datos['horario'] = $horario;
             $datos['capacidad'] =  $this->input->post('capacidad');
             $datos['cve_materia'] = $this->input->post('materia');
             
        //    $result = $this->Grupos_model->crearGrupo($datos);

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

}
