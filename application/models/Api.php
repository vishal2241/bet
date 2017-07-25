<?php 

class Api extends CI_Model
{
	public $FROM;
	public $TO;
	public $KEY;



	public function __construct()
	{
		parent::__construct();
		$this->KEY='0eb345c0e50dc4877ba93e9429d95b29b902788120cbe9b16c0d607e711a945a';
		$this->load->library('PHPRequests');
	}

	public function getPaises(){
		$request = Requests::get('https://apifootball.com/api/?action=get_countries&APIkey='.$this->KEY.'');
		$request->body=json_decode($request->body);
		return $request->body; 
	}

	public function getCompeticiones(){
		$request = Requests::get('https://apifootball.com/api/?action=get_leagues&APIkey='.$this->KEY.'');
		$request->body=json_decode($request->body);
		return $request->body; 
	}

	public function getPartidos(){
		$request = Requests::get('https://apifootball.com/api/?action=get_events&from='.$this->FROM.'&to='.$this->TO.'&APIkey='.$this->KEY.'');
		$request->body=json_decode($request->body);

		foreach ($request->body as $key => $value) {
			if ($value->match_status!='Canc.') {
				#Funcion Horario Colombia / Resta 7 horas UTC+2
				$fecha=strtotime($value->match_date.' '.$value->match_time);
				$fecha = date("Y-m-d H:i", $fecha);
				$fecha = new DateTime($fecha);
				$fecha->sub(new DateInterval('PT7H'));
				#Dejamos solo los partidos del rango de fechas indicado en el controlador
				if ($fecha->format('Y-m-d')>=$this->FROM  and  $fecha->format('Y-m-d')<=$this->TO  ) {
					$data[]= array(
						'match_id'             => $value->match_id,
						'league_id'            => $value->league_id,
						'match_date'           => $fecha->format('Y-m-d'),
						'match_status'         => $value->match_status,
						'match_time'           => $fecha->format('H:i'),
						'match_hometeam_name'  => $value->match_hometeam_name,
						'match_hometeam_score' => $value->match_hometeam_score,
						'match_awayteam_name'  => $value->match_awayteam_name,
						'match_awayteam_score' => $value->match_awayteam_score,
						'match_live'           => $value->match_live,
						'goalscorer'           => $value->goalscorer,
						);
				}
			}
		}
		return $data;
	}


	public function getCuotas(){
		$request = Requests::get('https://apifootball.com/api/?action=get_odds&from='.$this->FROM.'&to='.$this->TO.'&APIkey='.$this->KEY.'');
		$request->body=json_decode($request->body,true);
		foreach ($request->body as $key => $value) {
			$data[]= array(
				'match_id'       => $value['match_id'],
				'odd_bookmakers' => $value['odd_bookmakers'],
				'odd_date'       => $value['odd_date'],
				'odd_1'          => $value['odd_1'],
				'odd_x'          => $value['odd_2'],
				'bts_no'         => $value['bts_no'],
				'bts_yes'        => $value['bts_yes'],
				'o+2.5'          => $value['o+2.5'],
				'u+2.5'          => $value['u+2.5'],
				);
		}
		return $data;
	}



}
?>