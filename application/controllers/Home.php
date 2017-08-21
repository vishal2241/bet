<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->User->check();
	}

	public function index(){
	/*
		$this->load->library('PHPRequests');
		$url="https://www.soccerwin.com.co/update_ajax/update_table";
		$param='fecha=2017-08-16';

		$headers = array('Accept' => 'application/json');
		$options = array('fecha' => '2017-08-16');
		$request = Requests::post($url,$headers,$options);
		#$request->body=json_decode($request->body, true);
		print_r($request->body);
*/
		$this->load->view('home/prueba');
/*	
		$from = date("Y-m-d");
		$to   = date("Y-m-d");

		$cuotas=$this->Cuota->index($from, $to);
		
		foreach ($cuotas as $key => $value) {
			$array[] = array(
				'ID_PARTIDO' =>  $value->ID_PARTIDO, 
				'HORARIO' =>  $value->HORARIO, 
				'LOCAL' =>  $value->LOCAL, 
				'VISITANTE' =>  $value->VISITANTE, 
				'TORNEO' =>  $value->TORNEO, 
				'PAIS' =>  $value->PAIS, 
				'_1' =>  $value->_1, 
				'_2' =>  $value->_2, 
				'_X' =>  $value->_X, 
				);

		} 
		$data['partidos']= $array;
		$this->load->view('home/index', $data);
*/	} 

	}



