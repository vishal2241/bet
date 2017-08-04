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
	
	public function pruebas(){ 

		$request = Requests::get('https://86qbtjzii8.execute-api.ap-southeast-2.amazonaws.com/shared/sports',
			array(
				"x-api-key" => "BZKbpVxxsE6oX9rH5vWVe7Lsk96w3D8E2af56PBI",
				"Accept" => "application/json"
				)
			);
		#$request->body=json_decode($request->body);
		print_r( $request->body); 

	}

}



