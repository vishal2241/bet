<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->User->check();
	}

	public function index(){
		$from = date("Y-m-d");
		$to   = date("Y-m-d");

		$cuotas=$this->Cuota->index($from, $to);

	/*	foreach ($partidos as $key => $value) {
			#cuotas
			$this->Cuota->ID_PARTIDO  = $value->ID_PARTIDO; 

			print_r($cuotas); exit;
			$data[] = array(
				'ID_PARTIDO' =>  $value->ID_PARTIDO, 
				'HORARIO' =>  $value->HORARIO, 
				'LOCAL' =>  $value->LOCAL, 
				'VISITANTE' =>  $value->VISITANTE, 
				);

			}*/


			$this->load->view('home/index', $data);
		}




	}



