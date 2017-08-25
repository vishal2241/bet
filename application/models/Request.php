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
		#$url="https://www.soccerwin.com.co/update_ajax/update_table";
		$url="https://www.fullplay.com.co/update_ajax/get_table_events";
		$headers = array('Accept' => 'application/json');
		$result=array();
		for ($i=0; $i < $this->FECHA ; $i++) { 
			$options = array('fecha' => $i);
			#$options = array('fecha' => $this->FECHA);
			$request = Requests::post($url,$headers,$options);
			$request->body=json_decode($request->body, true);
			$result = array_merge($result, $request->body);
		}
		return $result;
		#return $request->body;

	}


	public function getOthers(){
		$url="https://www.soccerwin.com.co/update_ajax/other_odds/2416896";
		$headers = array('Accept' => 'application/json');
		$options = array('fecha' => $this->FECHA);
		$request = Requests::post($url,$headers,$options);
		$request->body=json_decode($request->body, true);
		return $request->body;
	}

	public function getScores($id){
		$url="http://www.hot-odds.com/Game/GetLiveEventInfo/".$id."";
		$headers = array('Accept' => 'application/json');


		$options = array('options' => '');
		$request = Requests::get($url,$headers,$options);
		$request->body=json_decode($request->body, true);
		return $request->body;
	}

	public function getStatus($id){
		$url="http://www.hot-odds.com/Game/GetEventStatus/".$id."";
		$headers = array('Accept' => 'application/json');

		$options = array('options' => '');
		$request = Requests::get($url,$headers,$options);
		$request->body=json_decode($request->body, true);
		return $request->body;
	}

	public function getResults(){
		$url="http://ls.lsports.eu/Home/UpdateGamesResults";
		$headers = array('Accept' => 'application/json');


		$options = array(
			'date' => '08/24/2017',
			'name' => 'HotOdds',
			'sportId' => '6046',
			'offerTypeId' => '1'
			);
		$request = Requests::get($url,$headers,$options);
	#	$request->body=json_decode($request->body, true);
		return $request->body;
	}


}
?>