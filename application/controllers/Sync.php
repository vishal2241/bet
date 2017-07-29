<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sync extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->User->check();
	}



	public function index(){

		$this->load->view('sync/index');
	}


	public function syncPaises(){
		$paises=$this->Api->getPaises();
		if ($paises!=null) {
			foreach ($paises as $key => $value) {
				$this->Pais->ID_PAIS = $value->country_id;
				$this->Pais->NOMBRE  = $value->country_name;

				$pais=$this->Pais->getPais();
				if ($pais==null) {
					echo "<b>add</b> ".$value->country_name."<br>";
					$this->Pais->add();
				} else {
					echo "<b>update</b> ".$value->country_name."<br>";
					$this->Pais->update();
				}
			}
		}
	} // End syncPaises


	public function syncCompeticiones(){
		$competiciones=$this->Api->getCompeticiones();
		if ($competiciones!=null) {
			foreach ($competiciones as $key => $value) {
				$this->Competicion->ID_COMPETENCIA = $value->league_id;
				$this->Competicion->ID_PAIS = $value->country_id;
				$this->Competicion->NOMBRE  = $value->league_name;

				$competencia=$this->Competicion->getCompeticion();

				if ($competencia==null) {
					echo "<b>add</b> ".$value->country_name.' '.$value->league_name."<br>";
					$this->Competicion->add();
				} else {
					echo "<b>update</b> ".$value->country_name.' '.$value->league_name."<br>";
					$this->Competicion->update();
				}
			}
		}
	} // End syncCompeticiones



	public function syncPartidos(){
		$to = new DateTime(date("Y-m-d"));
		$to->add(new DateInterval('P2D')); // sumamos un día por zona horaria

		$from = new DateTime(date("Y-m-d"));
		$from->sub(new DateInterval('P1D')); // restamos un día por zona horaria

		$this->Api->FROM = $from->format('Y-m-d');
		$this->Api->TO   = $to->format('Y-m-d');

		$partidos=$this->Api->getPartidos();
		echo count($partidos). ' Partidos<br> De: '. $from->format('Y-m-d') . ' a '. $to->format('Y-m-d') . '<br><br>' ;
		if ($partidos!=null) {
			foreach ($partidos as $key => $value) {
				$this->Partido->ID_PARTIDO      = $value['match_id'];
				$this->Partido->ID_COMPETENCIA  = $value['league_id'];
				$this->Partido->FECHA           = $value['match_date'];
				$this->Partido->HORARIO         = $value['match_time'];
				$this->Partido->ESTADO          = $value['match_status'];
				$this->Partido->LOCAL           = $value['match_hometeam_name'];
				$this->Partido->VISITANTE       = $value['match_awayteam_name'];
				$this->Partido->GOLES_LOCAL     = $value['match_hometeam_score'];
				$this->Partido->GOLES_VISITANTE = $value['match_awayteam_score'];
				$this->Partido->EN_VIVO         = $value['match_live'];
				$patido=$this->Partido->getPartido();

				if ($patido==null) {
					echo "<b>add  ".$value['match_date']." ".$value['match_time']." </b>".$value['match_hometeam_name']." vs ".$value['match_awayteam_name']."<br>";					
					$this->Partido->add();
				} else {
					echo "<b>update ".$value['match_date']." ".$value['match_time']."</b> ".$value['match_hometeam_name']." vs ".$value['match_awayteam_name']."<br>";
					$this->Partido->update();
					#Borramos los goles
					$this->Gol->ID_PARTIDO = $value['match_id'];
					$patido=$this->Gol->delete();
					$goles=$value['goalscorer'];
					#print_r($goles);
					foreach ($goles as $keyGol => $gol) {
						$this->Gol->ID_PARTIDO       = $value['match_id'];
						$gol->time=str_replace('\'', '', $gol->time);
						$this->Gol->TIEMPO           = $gol->time;
						$this->Gol->MARCADOR_PARCIAL = $gol->score;
						if ($gol->home_scorer==null) {
							$this->Gol->JUGADOR          = $gol->away_scorer;
						} else {
							$this->Gol->JUGADOR          = $gol->home_scorer;
						}
						$patido=$this->Gol->add(); 
					}
				}
			}
		} else {
			echo "No hay partidos";
		}
		echo "<h1>Termine</h1>";
	} // End syncPartidos



	public function syncCuota(){
		$to = new DateTime(date("Y-m-d"));
		$to->add(new DateInterval('P2D')); // sumamos un día por zona horaria
		$from = new DateTime(date("Y-m-d"));
		$from->sub(new DateInterval('P1D')); // restamos un día por zona horaria

		$this->Api->FROM     = $from->format('Y-m-d');
		$this->Api->TO       = $to->format('Y-m-d');

		$this->Partido->FROM = date("Y-m-d");
		$this->Partido->TO   = date("Y-m-d");

		//Ciclo de partidos en la BD
		$partidos=$this->Partido->index();
//SELECT p.ID_PARTIDO, p.FECHA, p.HORARIO, p.LOCAL, p.VISITANTE, c.* FROM partido p LEFT JOIN cuota c ON (p.ID_PARTIDO=c.ID_PARTIDO) where p.FECHA = '2017-07-29'
		foreach ($partidos as $key => $row) {
			$this->Api->MATCH_ID = $row->ID_PARTIDO;
			$cuotas              = $this->Api->getCuotas();
			$ok=0;
			if ($cuotas!=null) {
				foreach ($cuotas as $key => $value) {
					$this->Cuota->ID_PARTIDO  = $value['match_id'];
					$this->Cuota->FECHA_CUOTA = $value['odd_date'];
					$this->Cuota->_1          = $value['_1'];
					$this->Cuota->_X          = $value['_X'];
					$this->Cuota->_2          = $value['_2'];
					$this->Cuota->_1X         = $value['_1X'];
					$this->Cuota->_2X         = $value['_2X'];
					$this->Cuota->_12         = $value['_12'];
					$this->Cuota->NG          = $value['NG'];
					$this->Cuota->GG          = $value['GG'];
					$this->Cuota->OVER_25     = $value['OVER_25'];
					$this->Cuota->UNDER_25    = $value['UNDER_25'];
					$this->Cuota->BOOKMARKER  = $value['odd_bookmakers'];
					$this->Cuota->add(); 
					$ok++;
					echo $row->ID_PARTIDO.' '. $row->LOCAL .' '. $row->VISITANTE . ' <b style="color:green">OK</b><br>';
				}
			} else {
				echo $row->ID_PARTIDO.' '. $row->LOCAL .' '. $row->VISITANTE . ' <b style="color:red">No tiene cuotas</b><br>';
			} 

		}
		echo "<h1>Termine [".$ok."]</h1>";
	} // End syncCuotas


	public function syncAllCuotas(){
		$to = new DateTime(date("Y-m-d"));
		$to->add(new DateInterval('P2D')); // sumamos un día por zona horaria

		$from = new DateTime(date("Y-m-d"));
		$from->sub(new DateInterval('P1D')); // restamos un día por zona horaria

		$this->Api->FROM = $from->format('Y-m-d');
		$this->Api->TO   = $to->format('Y-m-d');

		$cuotas=$this->Api->getCuotas();

		if ($cuotas!=null) {
			foreach ($cuotas as $key => $value) {

				$this->Cuota->ID_PARTIDO  = $value['match_id'];
				$this->Cuota->FECHA_CUOTA = $value['odd_date'];
				$this->Cuota->_1          = $value['_1'];
				$this->Cuota->_X          = $value['_X'];
				$this->Cuota->_2          = $value['_2'];
				$this->Cuota->_1X         = $value['_1X'];
				$this->Cuota->_2X         = $value['_2X'];
				$this->Cuota->_12         = $value['_12'];
				$this->Cuota->NG          = $value['NG'];
				$this->Cuota->GG          = $value['GG'];
				$this->Cuota->OVER_25     = $value['OVER_25'];
				$this->Cuota->UNDER_25    = $value['UNDER_25'];
				$this->Cuota->BOOKMARKER  = $value['odd_bookmakers'];

				#$this->Cuota->delete();
				$this->Cuota->add(); 

			}
		}
		echo "Termine";
	} // End syncCuotas


}


