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

		$from='2017-07-24';
		$to='2017-08-01';

		$this->load->library('PHPRequests');
		$APIkey='0eb345c0e50dc4877ba93e9429d95b29b902788120cbe9b16c0d607e711a945a';
		$request = Requests::get('https://apifootball.com/api/?action=get_events&from='.$from.'&to='.$to.'&APIkey='.$APIkey.'');
		$request->body=json_decode($request->body);
		#print_r($request->body); exit;
		/*echo '
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
		$i=1;*/
		foreach ($request->body as $key => $value) {
			if ($value->match_status!='Canc.') {

 				#Funcion Horario Colombia / Resta 7 horas UTC+2
				$fecha=strtotime($value->match_date.' '.$value->match_time);
				$fecha = date("Y-m-d H:i", $fecha);
				$fecha = new DateTime($fecha);
				$fecha->sub(new DateInterval('PT7H'));


				if ($fecha->format('Y-m-d')>=date('Y-m-d') ) {

					$data['partidos'] = array('partido' =>  	 
						array(
							'ID_PARTIDO'      => $value->match_status,
							'ID_COMPETENCIA'  => $value->league_id,
							'FECHA'           => $fecha->format('Y-m-d'),
							'HORARIO'         => $fecha->format('H:i'),
							'ESTADO'          => $value->match_status,
							'LOCAL'           => $value->match_hometeam_name,
							'VISITANTE'       => $value->match_awayteam_name,
							'GOLES_LOCAL'     => $value->match_hometeam_score,
							'GOLES_VISITANTE' => $value->match_awayteam_score,
							)
						);


					/*echo '<tr>';
					echo '<td>'.$i.'</td>';
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
					$i++;*/
				}

				
			}
		}
		#echo '</table>';
		print_r($data['partidos']); exit;
		$this->load->view('home/index', $data);
	}




}



