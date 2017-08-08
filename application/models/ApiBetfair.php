<?php 

class ApiBetfair extends CI_Model
{

	public $KEY;
	public $SESSION;



	public function __construct()
	{
		parent::__construct();
		$this->SESSION = "GUCRqdJ7K+frjqLllsumjwBFA0w0IPNToJR4QRd4/OY=";
		$this->KEY     = "lkaPoxoI3tDVaQgP";
		$this->load->library('PHPRequests');
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


		public function partidos(){ 

			$this->load->library('PHPRequests');
			$url="https://api.betfair.com/exchange/betting/rest/v1.0/listEvents/";
			$param='{"filter":{
				"eventTypeIds": [ "1"
				],
				"timezone": [ "SMT"
				],

				"marketStartTime": {
					"from": "2017-08-08T00:00:00",
					"to": "2017-08-08T20:59:00"
				}
			},
			"locale":"es"
		}';
		$header=array(
			"X-Application" =>"lkaPoxoI3tDVaQgP",
			"X-Authentication" =>"GUCRqdJ7K+frjqLllsumjwBFA0w0IPNToJR4QRd4/OY=",
			"content-type" => "application/json"
			);
		$request = Requests::post($url, $header,  $param);
		$request->body=json_decode($request->body, true);
	#print_r($request->body); 
		echo '
		<style type="text/css">
			table {border-collapse:collapse}
			td {
				border:1px solid #D3D3D3;
				padding-left:10px;
			}
		</style>
		<table width="" border="1" style="font-family:Calibri; font-size:14px"> ';

			foreach ($request->body as $key => $value) {
				$fecha=strtotime($value['event']['timezone']);
				$fecha = date("Y-m-d", $fecha);
				$fecha = new DateTime($fecha);
			#$fecha->sub(new DateInterval('PT5H'));
				echo'	
				<tr>
					<td>'.$value['event']['id'].'</td>
					<td>'.$value['event']['name'].'</td>
					<td>'.$value['event']['timezone'].'</td>
					<td>'.$value['event']['countryCode'].'</td>
					<td>'.$value['event']['openDate'].'</td>

				</tr>
				';

			}
			echo '</table>';
		}



		public function listMarketTypes(){ 
# 28328532 tigres medellin
			$this->load->library('PHPRequests');
			$url="https://api.betfair.com/exchange/betting/rest/v1.0/listMarketTypes/";
			$param='{"filter":{
				"eventTypeIds": [ "1"],
				"marketStartTime": { }
			},
			"locale":"es"
		}';
		$header=array(
			"X-Application" =>"lkaPoxoI3tDVaQgP",
			"X-Authentication" =>"GUCRqdJ7K+frjqLllsumjwBFA0w0IPNToJR4QRd4/OY=",
			"content-type" => "application/json"
			);
		$request = Requests::post($url, $header,  $param);
		$request->body=json_decode($request->body, true);
	#$print_r($request->body);  exit();
		echo '
		<style type="text/css">
			table {border-collapse:collapse}
			td {
				border:1px solid #D3D3D3;
				padding-left:10px;
			}
		</style>
		<table width="" border="1" style="font-family:Calibri; font-size:14px"> ';

			foreach ($request->body as $key => $value) {
				echo'	
				<tr>
					<td>'.$value['marketType'].'</td>
					<td>'.$value['marketCount'].'</td>


				</tr>
				';

			}
			echo '</table>';
		}


		public function listMarketCatalogue(){ 
# 28328532 tigres medellin
			$this->load->library('PHPRequests');
			$url="https://api.betfair.com/exchange/betting/rest/v1.0/listMarketCatalogue/";
			$param='{"filter":{"eventIds":["28303226"],"marketBettingTypes":["ODDS","ASIAN_HANDICAP_SINGLE_LINE","ASIAN_HANDICAP_DOUBLE_LINE"]},"maxResults":"1000","marketProjection":["RUNNER_DESCRIPTION"]}, "id": 1
			';
			$header=array(
				"X-Application" =>"lkaPoxoI3tDVaQgP",
				"X-Authentication" =>"GUCRqdJ7K+frjqLllsumjwBFA0w0IPNToJR4QRd4/OY=",
				"content-type" => "application/json"
				);
			$request = Requests::post($url, $header,  $param);
			$request->body=json_decode($request->body, true);
	#print_r($request->body);  exit();
			echo '
			<style type="text/css">
				table {border-collapse:collapse}
				td {
					border:1px solid #D3D3D3;
					padding-left:10px;
				}
			</style>
			<table width="" border="1" style="font-family:Calibri; font-size:14px"> ';

				foreach ($request->body as $key => $value) {
					if ($value['marketName']=='Double Chance') {
						print_r($value);  
						echo'	
						<br><br><br>
						';
					}
				# pifrint_r($value['marketName']);  





				}

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