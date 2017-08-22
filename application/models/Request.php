<?php 

class Request extends CI_Model
{
	public $FECHA;

	public function __construct()
	{
		parent::__construct();
		$this->load->library('PHPRequests');
		$this->FECHA=0;

	}

	public function getMatches(){
		$url="https://www.soccerwin.com.co/update_ajax/update_table";
		$param='fecha=0';
		$headers = array('Accept' => 'application/json');
		$options = array('fecha' => $this->FECHA);
		$request = Requests::post($url,$headers,$options);
		$request->body=json_decode($request->body, false);
		return $request->body;
	}


}
?>