<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
		#$this->load->view('home/index');
		$from='2017-07-24';
		$to='2017-07-25';

		$this->load->library('PHPRequests');
		$APIkey='0eb345c0e50dc4877ba93e9429d95b29b902788120cbe9b16c0d607e711a945a';
		$request = Requests::get('https://apifootball.com/api/?action=get_events&from='.$from.'&to='.$to.'&APIkey='.$APIkey.'');
		$request->body=json_decode($request->body);
		#print_r($request->body); exit;
		foreach ($request->body as $key => $value) {
			$data = array(
				'ID_PARTIDO'      => $value->match_id,
				'ID_COMPETENCIA'  => $value->league_id,
				'FECHA'           => $value->match_date,
				'HORARIO'         => $value->match_time,
				'ESTADO'          => $value->match_status,
				'LOCAL'           => $value->match_hometeam_name,
				'VISITANTE'       => $value->match_awayteam_name,
				'GOLES_LOCAL'     => $value->match_hometeam_score,
				'GOLES_VISITANTE' => $value->match_awayteam_score
				);
			#Funcion Horario Colombia / Resta 7 horas UTC+2
			$fecha=strtotime($value->match_date.' '.$value->match_time);
			$fecha = date("Y-m-d h:i", $fecha);
			$fecha = new DateTime($fecha);
			$fecha->sub(new DateInterval('PT7H'));
			 #$fecha->format('Y-m-d h:i')

			if ($fecha->format('Y-m-d')==date("Y-m-d")) {
				echo $fecha->format('Y-m-d'). ' '.$fecha->format('h:i').' '. $value->match_hometeam_name.' ['.$value->match_hometeam_score.'] vs. '. $value->match_awayteam_name.'['.$value->match_awayteam_score.']<br>';

			 
			}

		}
	}




}



