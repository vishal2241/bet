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

	public function getPaises(){
		$request = Requests::get('https://apifootball.com/api/?action=get_countries&APIkey=');
		$request->body=json_decode($request->body);
		return $request->body; 
	}


	public function getBookmakers(){
		$request = Requests::get('https://bettingodds-bettingoddsapi-v1.p.mashape.com/bookmakers',
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