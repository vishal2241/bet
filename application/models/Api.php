<?php 

class Api extends CI_Model
{
	
	public $ID_COMPETENCIA;
	public $ID_PAIS;
	public $NOMBRE;
	public $KEY;



	public function __construct()
	{
		parent::__construct();
		$this->KEY='0eb345c0e50dc4877ba93e9429d95b29b902788120cbe9b16c0d607e711a945a';
		$this->load->library('PHPRequests');
	}

	public function getPaises(){
		$request = Requests::get('https://apifootball.com/api/?action=get_countries&APIkey='.$this->KEY.'');
		$request->body=json_decode($request->body);
		return $request->body; 
	}

	public function getCompeticiones(){
		$request = Requests::get('https://apifootball.com/api/?action=get_leagues&APIkey='.$this->KEY.'');
		$request->body=json_decode($request->body);
		return $request->body; 
	}



}
?>