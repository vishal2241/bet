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
		$url="https://api.betfair.com/exchange/betting/rest/v1.0/listEventTypes/";
		$param='{"filter":{ }}';
		$header=array(
			"X-Application" =>"lkaPoxoI3tDVaQgP",
			"X-Authentication" =>"hBGnhmzhUaRPMWxE+zaNyYp7XxR5f6Bg+8Hyf3wwNEU=",
			"content-type" => "application/json"
			);
		$request = Requests::post($url, $header,  $param);
		#$request->body=json_decode($request->body);
		print_r($request->body); 
	}

}



