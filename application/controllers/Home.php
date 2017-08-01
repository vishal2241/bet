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
	}

	public function prueba(){
		$this->load->library('PHPRequests');


		$request = Requests::get('https://bettingodds-bettingoddsapi-v1.p.mashape.com/events/2017-08-01',
			array(
				"X-Mashape-Key" => "AS1U0Bg6VJmshijjQJRdY8xytzarp11QQbNjsnAbMvUHg8W3UV",
				"Accept" => "application/json"
				)
			);
		$request->body=json_decode($request->body);

		foreach ($request->body as $key => $value) {
		 		print_r( $request->body);
		 		 exit;
		}		

	}

}



