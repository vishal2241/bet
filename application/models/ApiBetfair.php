<?php 

class ApiBetfair extends CI_Model
{
	#Pendiente: Encriptar session betfair en login
	public $KEY;
	public $SESSION;

	public function __construct()
	{
		parent::__construct();
		$this->KEY     = "lkaPoxoI3tDVaQgP";
		$this->SESSION = $this->session->userdata('bet');
		$this->load->library('PHPRequests');

	}

	public function login(){
		$url="https://identitysso.betfair.com/api/login";
		$header=array(
			"X-Application"    => $this->KEY,
			"Accept"     => "application/json"
			);
		$param='username=mhotavo&password=mil4420204';
		$request = Requests::post($url, $header,  $param);
		$request->body=json_decode($request->body, true);
		return $request->body;

	}	

	public function getPaises(){
		$url="https://api.betfair.com/exchange/betting/rest/v1.0/listCountries/";
		$param='{
			"filter":{
				"eventTypeIds":["1"]
			},
			"locale":"es"
		}, 
		"id": 1';
		$header=array(
			"X-Application"    => $this->KEY,
			"X-Authentication" => $this->SESSION,
			"content-type"     => "application/json"
			);
		$request = Requests::post($url, $header,  $param);
		$request->body=json_decode($request->body, true);
		return $request->body;
	}


	public function getCompetencias(){
		$url="https://api.betfair.com/exchange/betting/rest/v1.0/listCompetitions/";
		$param='{
			"filter":
			{
				"eventTypeIds":["1"]},
				"locale":"es"
			}, 
			"id": 1';
			$header=array(
				"X-Application"    => $this->KEY,
				"X-Authentication" => $this->SESSION,
				"content-type"     => "application/json"
				);
			$request = Requests::post($url, $header,  $param);
			$request->body=json_decode($request->body, true);
			return $request->body;
		}


		public function getEventos($from, $to, $compe){
			$url="https://api.betfair.com/exchange/betting/rest/v1.0/listEvents/";
			$param='{
				"filter":{
					"eventTypeIds":["1"],
					"competitionIds":["'.$compe.'"],
					"marketBettingTypes":["ODDS"],
					"marketStartTime":{
						"from":"'.$from.'T00:00:00Z",
						"to":"'.$to.'T23:59:00Z"
					}
				},
				"locale":"es"
			},
			"id": 1
			';
			$header=array(
				"X-Application"    => $this->KEY,
				"X-Authentication" => $this->SESSION,
				"content-type"     => "application/json"
				);
			$request = Requests::post($url, $header,  $param);
			$request->body=json_decode($request->body, true);
			return $request->body;
		}



		public function getTipoOdds($id){
			$url="https://api.betfair.com/exchange/betting/rest/v1.0/listMarketCatalogue/";
			$param=' {
				"filter":
				{"eventTypeIds":["1"],
				"eventIds":["'.$id.'"]},
				"locale":"es",
				"sort":"MINIMUM_AVAILABLE",
				"maxResults":"100",
				"marketProjection":["RUNNER_METADATA"]
			},
			"id": 1
			';
			$header=array(
				"X-Application"    => $this->KEY,
				"X-Authentication" => $this->SESSION,
				"content-type"     => "application/json"
				);
			$request = Requests::post($url, $header,  $param);
			$request->body=json_decode($request->body, true);
			return $request->body;
		}



		public function getMarket($market){
			$url="https://api.betfair.com/exchange/betting/rest/v1.0/listMarketBook/";
			$param='{
				"locale":"es",
				"marketIds":["'.$market.'"]
			},
			"id": 1
			';
			$header=array(
				"X-Application"    => $this->KEY,
				"X-Authentication" => $this->SESSION,
				"content-type"     => "application/json"
				);
			$request = Requests::post($url, $header,  $param);
			$request->body=json_decode($request->body, true);
			return $request->body;
		}



		public function getRunner($market, $selection){
			$url="https://api.betfair.com/exchange/betting/rest/v1.0/listRunnerBook/";
			$param='{
				"locale":"es",
				"marketId":"'.$market.'",
				"selectionId":"'.$selection.'",
				"priceProjection":
				{
					"priceData":["EX_BEST_OFFERS"]
				}
			}, 
			"id": 1
			';
			$header=array(
				"X-Application"    => $this->KEY,
				"X-Authentication" => $this->SESSION,
				"content-type"     => "application/json"
				);
			$request = Requests::post($url, $header,  $param);
			$request->body=json_decode($request->body, true);
			return $request->body;
		}


/*

54692
1.0-DELAY
lkaPoxoI3tDVaQgP
milton.otavo@gmail.com
Yes
Yes
Yes
No
 
 
54691
1.0
JMg8Iqyss4Ei1uTw
milton.otavo@gmail.com
No
No
Yes
No
 


 GUCRqdJ7K+frjqLllsumjwBFA0w0IPNToJR4QRd4/OY=
 */



}
?>