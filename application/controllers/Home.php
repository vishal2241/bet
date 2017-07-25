<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->User->check();
	}

	public function index(){
		$this->Partido->FROM = date("Y-m-d");
		$this->Partido->TO   = date("Y-m-d");
		$this->Partido->HORARIO   = date("H:i"); 
		$this->Partido->HORARIO   = date("H:i"); 

		$partidos = $this->Partido->index();
		foreach ($partidos as $key => $value) {
			#cuotas
			$this->Cuota->ID_PARTIDO  = $value->ID_PARTIDO; 
			$cuotas=$this->Cuota->getPartido();
			print_r($cuotas); exit;
			$data[] = array(
				'ID_PARTIDO' =>  $value->ID_PARTIDO, 
				'HORARIO' =>  $value->HORARIO, 
				'LOCAL' =>  $value->LOCAL, 
				'VISITANTE' =>  $value->VISITANTE, 
				);

		}

		#$data['partidos'] 
		$this->load->view('home/index', $data);
	}




}



