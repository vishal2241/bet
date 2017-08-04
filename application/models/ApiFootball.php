<?php 

class ApiFootball extends CI_Model
{
	public $FROM;
	public $TO;
	public $KEY;
	public $MATCH_ID;



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
			} else {
				$data[]= array(
					'match_id'             => $value->match_id,
					'league_id'            => $value->league_id,
					'match_date'           => $value->match_date,
					'match_status'         => $value->match_status,
					'match_time'           => $value->match_time,
					'match_hometeam_name'  => $value->match_hometeam_name,
					'match_hometeam_score' => $value->match_hometeam_score,
					'match_awayteam_name'  => $value->match_awayteam_name,
					'match_awayteam_score' => $value->match_awayteam_score,
					'match_live'           => $value->match_live,
					'goalscorer'           => $value->goalscorer,
					);
			}
		}
		return $data;
	}


	public function getCuotas(){
		ini_set('memory_limit','16000M');
		set_time_limit(10000);
		$request = Requests::get('https://apifootball.com/api/?action=get_odds&from='.$this->FROM.'&to='.$this->TO.'&match_id='.$this->MATCH_ID.'&APIkey='.$this->KEY.'');
		$request->body=json_decode($request->body,true); // To array
 		
		if (!isset($request->body['error']) && (is_array($request->body) || is_object($request->body))   ) {
			$_1       = 0;
			$_X       = 0;
			$_2       = 0;
			$_1X      = 0;
			$_12      = 0;
			$_2X      = 0;
			$NG       = 0;
			$GG       = 0;
			$OVER_25  = 0;
			$UNDER_25 = 0;
			$n=0;
			//sumamos todas las cuotas para luego sacar promedio
 
			foreach ($request->body as $key => $value) {

				if ($value['o+2.5']>0 and $value['u+2.5']>0 and $value['bts_yes']>0 and $value['bts_no']>0) {
					$id         = $value['match_id'];
					$bookmakers = $value['odd_bookmakers'];
					$date       = $value['odd_date'];
					$_1         = $_1+$value['odd_1'];
					$_X         = $_X+$value['odd_x'];
					$_2         = $_2+$value['odd_2'];
					$_1X        = $_1X+$value['odd_1'];
					$_12        = $_12+$value['odd_x'];
					$_2X        = $_2X+$value['odd_2'];
					$NG         = $NG+$value['bts_no'];
					$GG         = $GG+$value['bts_yes'];
					$OVER_25    = $OVER_25+$value['o+2.5'];
					$UNDER_25   = $UNDER_25+$value['u+2.5'];
					$n++;
				}
			}

			if (isset($id)) {
				$odds[]= array(	
					'1'  => round($_1/$n,2), #_1
					'2'  => round($_X/$n,2), #_X
					'3'  => round($_2/$n,2), #_2
					'4'  => round($OVER_25/$n,2), #OVER_25
					'5'  => round($UNDER_25/$n,2), #UNDER_25
					'6'  => round($_1X/$n,2),#_1X
					'7'  => round($_12/$n,2),#_12
					'8'  => round($_2X/$n,2),#_2X
					'9'  => round($GG/$n,2), #GG
					'10' => round($NG/$n,2) #NG
					);

				$data[]= array(
					'match_id'       => $id,
					'odd_bookmakers' => $bookmakers,
					'odd_date'       => $date,
					'odds'       => $odds,
					);
			}
			else {
				$data=null;
			}
		} else {
			$data=null; 
		}

		return $data;
	}



}
?>