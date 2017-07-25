<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public $ID;

	public function __construct()
	{
		parent::__construct();
		$this->User->check();
	}

	public function index(){
		$this->load->view('home/index');
	}

	public function Paises(){
		#$this->load->view('home/index');
		$this->load->library('PHPRequests');
		$APIkey='0eb345c0e50dc4877ba93e9429d95b29b902788120cbe9b16c0d607e711a945a';
		$request = Requests::get('https://apifootball.com/api/?action=get_countries&APIkey='.$APIkey.'');
		$request->body=json_decode($request->body);

		foreach ($request->body as $key => $value) {
			$data = array(
				'ID_PAIS' => $value->country_id,
				'NOMBRE' => $value->country_name
				);
			$this->Pais->add($data);

			echo 'Agregado: <b>'.$value->country_name.'</b><br>'; 
		}
	}

	public function Competiciones(){
		#$this->load->view('home/index');
		$this->load->library('PHPRequests');
		$APIkey='0eb345c0e50dc4877ba93e9429d95b29b902788120cbe9b16c0d607e711a945a';
		$request = Requests::get('https://apifootball.com/api/?action=get_leagues&APIkey='.$APIkey.'');
		$request->body=json_decode($request->body);
		#print_r($request->body); exit;
		foreach ($request->body as $key => $value) {
			$data = array(
				'ID_COMPETENCIA' => $value->league_id,
				'ID_PAIS' => $value->country_id,
				'NOMBRE' => $value->league_name
				);
			$this->Competicion->add($data);

			echo 'Pais: <b>'.$value->league_name.'</b> Liga: '.$value->country_name.'<br>'; 
		}
	}


	public function Partidos(){

		$from='2017-07-25';
		$to='2017-07-26';

		$this->load->library('PHPRequests');
		$APIkey='0eb345c0e50dc4877ba93e9429d95b29b902788120cbe9b16c0d607e711a945a';
		$request = Requests::get('https://apifootball.com/api/?action=get_events&from='.$from.'&to='.$to.'&APIkey='.$APIkey.'');
		$request->body=json_decode($request->body);
		#print_r($request->body); exit;
		echo '
		<style type="text/css">
			table {border-collapse:collapse}
			td {border:1px solid black; padding:2px}
			body {font-family: Calibri}
		</style>
		';
		echo '<table border=1>';
		echo '<tr>';
		echo '<td><b>#</b></td>';
		echo '<td><b>Liga</b></td>';
		echo '<td><b>Estado</b></td>';
		echo '<td><b>Local</b></td>';
		echo '<td><b>Visitante</b></td>';
		echo '<td><b>Visitante</b></td>';
		#echo '<td><b>Fecha UTC+2</b></td>';
		#echo '<td><b>Hora UTC+2</b></td>';
		echo '<td><b>Hora COL</b></td>';
		echo '<td><b>Hora COL</b></td>';
		echo '</tr>';
		$i=1;
		foreach ($request->body as $key => $value) {
			if ($value->match_status!='Canc.') {

 				#Funcion Horario Colombia / Resta 7 horas UTC+2
				$fecha=strtotime($value->match_date.' '.$value->match_time);
				$fecha = date("Y-m-d H:i", $fecha);
				$fecha = new DateTime($fecha);
				$fecha->sub(new DateInterval('PT7H'));

				
				if ($fecha->format('Y-m-d')==$from ) {


					echo '<tr>';
					echo '<td>'.$value->match_id.'</td>';
					echo '<td><b>'.$value->country_name.'</b>:'.$value->league_name.'</td>';
					echo '<td>'.$value->match_status.'</td>';
					echo '<td>'.$value->match_hometeam_name.'</td>';
					echo '<td>'.$value->match_awayteam_name.'</td>';
					echo '<td>'.$value->match_hometeam_score.' - '.$value->match_awayteam_score.'</td>';
					#echo '<td>'.$value->match_date.'</td>';
					#echo '<td>'.$value->match_time.'</td>';
					echo '<td>'.$fecha->format('H:i').'</td>';
					echo '<td>'.$fecha->format('Y-m-d').'</td>';

					echo '</tr>'; 
					$i++;
				}



			}
		}
		#echo '</table>';
		exit;
		$this->load->view('home/index', $data);
	}


	public function getPartido($id, $from, $to){
		$this->load->library('PHPRequests');
		$APIkey='0eb345c0e50dc4877ba93e9429d95b29b902788120cbe9b16c0d607e711a945a';
		$request = Requests::get('https://apifootball.com/api/?action=get_events&from='.$from.'&to='.$to.'&match_id='.$id.'&APIkey='.$APIkey.'');
		$request->body=json_decode($request->body);
		return $request->body;
	}


	public function cuotas(){

		$from='2017-07-24';
		$to='2017-07-25';

		$this->load->library('PHPRequests');
		$APIkey='0eb345c0e50dc4877ba93e9429d95b29b902788120cbe9b16c0d607e711a945a';
		$request = Requests::get('https://apifootball.com/api/?action=get_odds&from='.$from.'&to='.$to.'&APIkey='.$APIkey.'');
		$request->body=json_decode($request->body);
		#print_r($request->body); exit;
		echo '
		<style type="text/css">
			table {border-collapse:collapse}
			td {border:1px solid black; padding:2px}
			body {font-family: Calibri}
		</style>
		';
		echo '<table border=1>';
		echo '<tr>';
		echo '<td><b>#</b></td>';
		echo '<td><b>Torneo</b></td>';
		echo '<td><b>Local</b></td>';
		echo '<td><b>Visitante</b></td>';
		echo '<td><b>Hora</b></td>';
		echo '<td><b>Fecha</b></td>';
		echo '<td><b>1</b></td>';
		echo '<td><b>X</b></td>';
		echo '<td><b>2</b></td>';
		echo '<td><b>GG</b></td>';
		echo '<td><b>NG</b></td>';
		echo '</tr>';
		$i=1;
		foreach ($request->body as $key => $value) {
 			#Funcion Horario Colombia / Resta 7 horas UTC+2
			$fecha=strtotime($value->odd_date);
			$fecha = date("Y-m-d H:i", $fecha);
			$fecha = new DateTime($fecha);
			$fecha->sub(new DateInterval('PT7H'));

			if ($fecha->format('Y-m-d')==$from ) {
				$partido=$this->getPartido($value->match_id, $from, $to);

				#print_r($partido[0]->country_name);
			
				echo '<tr>';
				echo '<td>'.$i.'</td>';
				echo '<td>'.$partido->country_name.' <b>'.$partido->league_name.'</b></td>';
				echo '<td>'.$partido->match_hometeam_name.'</td>';
				echo '<td>'.$partido->match_awayteam_name.'</td>';
				echo '<td>'.$fecha->format('H:i').'</td>';
				echo '<td>'.$fecha->format('Y-m-d').'</td>';
				echo '<td>'.$value->odd_1.'</td>';
				echo '<td>'.$value->odd_x.'</td>';
				echo '<td>'.$value->odd_2.'</td>';
				echo '<td>'.$value->bts_yes.'</td>';
				echo '<td>'.$value->bts_yes.'</td>';

				echo '</tr>'; 
				$i++;
			}


exit();
			 // 
		}
		#echo '</table>';
		exit;
		$this->load->view('home/index', $data);
	}


}



