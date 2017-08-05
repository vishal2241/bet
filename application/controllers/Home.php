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
	
	public function partidos(){ 

		$this->load->library('PHPRequests');
		$url="https://api.betfair.com/exchange/betting/rest/v1.0/listEvents/";
		$param='{"filter":{
			"eventTypeIds": [ "1"
			],
			"timezone": [ "SMT"
			],

			"marketStartTime": {
				"from": "2017-08-05T04:59:00",
				"to": "2017-08-06T04:59:00"
			}
		},
		"locale":"es"
	}';
	$header=array(
		"X-Application" =>"lkaPoxoI3tDVaQgP",
		"X-Authentication" =>"hBGnhmzhUaRPMWxE+zaNyYp7XxR5f6Bg+8Hyf3wwNEU=",
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

	public function paises(){ 

		$this->load->library('PHPRequests');
		$url="https://api.betfair.com/exchange/betting/rest/v1.0/listCountries/";
		$param='{"filter":{
			"eventTypeIds": [ "1"],
			"marketStartTime": { }
		},
		"locale":"es"
	}';
	$header=array(
		"X-Application" =>"lkaPoxoI3tDVaQgP",
		"X-Authentication" =>"hBGnhmzhUaRPMWxE+zaNyYp7XxR5f6Bg+8Hyf3wwNEU=",
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
			echo'	
			<tr>
				<td>'.$value['countryCode'].'</td>
				<td>'.$value['marketCount'].'</td>


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
		"X-Authentication" =>"hBGnhmzhUaRPMWxE+zaNyYp7XxR5f6Bg+8Hyf3wwNEU=",
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
		$param='{
			"filter": {
				"eventIds": [
				"28328532"
				]
			},
			"maxResults": "200", 
			"marketProjection": [
				"COMPETITION",
				"EVENT",
				"EVENT_TYPE",
				"RUNNER_DESCRIPTION",
				"RUNNER_METADATA",
				"MARKET_START_TIME"
			]
		},
		"id": 1
	}

	';
	$header=array(
		"X-Application" =>"lkaPoxoI3tDVaQgP",
		"X-Authentication" =>"hBGnhmzhUaRPMWxE+zaNyYp7XxR5f6Bg+8Hyf3wwNEU=",
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
 


 hBGnhmzhUaRPMWxE+zaNyYp7XxR5f6Bg+8Hyf3wwNEU=
 */



}



