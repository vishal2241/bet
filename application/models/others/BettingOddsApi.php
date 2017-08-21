<?php 

class BettingOddsApi extends CI_Model
{
	public $FROM;
	public $TO;
	public $KEY;
	public $MATCH_ID;



	public function __construct()
	{
		parent::__construct();
		$this->KEY='AS1U0Bg6VJmshijjQJRdY8xytzarp11QQbNjsnAbMvUHg8W3UV';
		$this->load->library('PHPRequests');
	}



	public function getCorredores(){
		$request = Requests::get('https://bettingodds-bettingoddsapi-v1.p.mashape.com/bookmakers',
			array(
				"X-Mashape-Key" => $this->KEY,
				"Accept" => "application/json"
				)
			);
		$request->body=json_decode($request->body);
		return $request->body; 
	}


	public function getLigas(){
		$request = Requests::get('https://bettingodds-bettingoddsapi-v1.p.mashape.com/leagues',
			array(
				"X-Mashape-Key" => $this->KEY,
				"Accept" => "application/json"
				)
			);
		$request->body=json_decode($request->body);
		return $request->body; 
	}


	public function getMercados(){
		$request = Requests::get('https://bettingodds-bettingoddsapi-v1.p.mashape.com/markets',
			array(
				"X-Mashape-Key" => $this->KEY,
				"Accept" => "application/json"
				)
			);
		$request->body=json_decode($request->body);
		return $request->body; 
	}

	public function getEventos(){
		$request = Requests::get('https://bettingodds-bettingoddsapi-v1.p.mashape.com/events/'. $this->FROM.'',
			array(
				"X-Mashape-Key" => $this->KEY,
				"Accept" => "application/json"
				)
			);
		$request->body=json_decode($request->body);
		return $request->body; 
	}




}
?>