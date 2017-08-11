<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->User->check();
	}

	public function index(){
		$ID     = "02230e2c";
		$KEY     = "9463da7b2b921000037ae985f053024e";
		$this->load->library('PHPRequests');

		$url="http://api.odds24.com/fixtures?user=dev";
		$header=array(
			"X-Application"    => $KEY,
			"Accept"     => "application/json"
			);
		$param='username=mhotavo&password=mil4420204';
		$request = Requests::post($url,  $param);
		#$request->body=json_decode($request->body, true);
		print_r($request->body);
		
		/*$from = date("Y-m-d");
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
	
*/
}



