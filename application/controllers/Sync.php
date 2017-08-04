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


	/*******************************************************/
	/*                     FOOTBALL API                    */
	/*******************************************************/
	public function syncPaises(){
		$paises=$this->ApiFootball->getPaises();
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
		$competiciones=$this->ApiFootball->getCompeticiones();
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
		$to->add(new DateInterval('P3D')); // sumamos un día por zona horaria

		$from = new DateTime(date("Y-m-d"));
		$from->sub(new DateInterval('P2D')); // restamos un día por zona horaria

		$this->ApiFootball->FROM = $from->format('Y-m-d');
		$this->ApiFootball->TO   = $to->format('Y-m-d');

		$partidos=$this->ApiFootball->getPartidos();
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
		$to->add(new DateInterval('P3D')); // sumamos un día por zona horaria
		$from = new DateTime(date("Y-m-d"));
		$from->sub(new DateInterval('P2D')); // restamos un día por zona horaria

		$this->ApiFootball->FROM     = $from->format('Y-m-d');
		$this->ApiFootball->TO       = $to->format('Y-m-d');



		//Ciclo de partidos en la BD
		$partidos=$this->Partido->all($from->format('Y-m-d'),$to->format('Y-m-d'), 'Todos' );
		$ok=0;
		$total= count($partidos); 
		$ini=0;
		foreach ($partidos as $key => $row) {
			$this->ApiFootball->MATCH_ID = $row->ID_PARTIDO;
			$cuotas                      = $this->ApiFootball->getCuotas();
			
			if ($cuotas!=null) {

				foreach ($cuotas as $key => $value) {
					$this->Cuota->ID_PARTIDO  = $value['match_id'];
					$this->Cuota->FECHA_CUOTA = $value['odd_date'];
					$this->Cuota->BOOKMARKER  = $value['odd_bookmakers'];
					/*$this->Cuota->_1          = $value['_1'];
					$this->Cuota->_X          = $value['_X'];
					$this->Cuota->_2          = $value['_2'];
					$this->Cuota->_1X         = $value['_1X'];
					$this->Cuota->_2X         = $value['_2X'];
					$this->Cuota->_12         = $value['_12'];
					$this->Cuota->NG          = $value['NG'];
					$this->Cuota->GG          = $value['GG'];
					$this->Cuota->OVER_25     = $value['OVER_25'];
					$this->Cuota->UNDER_25    = $value['UNDER_25'];*/
					foreach ($value['odds'] as $keyOdd => $odd) {
						$this->Cuota->ID_POSIBILIDAD = key($odd);
						$this->Cuota->VALOR =$odd[key($odd)];
						$this->Cuota->delete();  
						$this->Cuota->add(); 
					}
					$ok++;
					echo '['.$row->FECHA.'] ['.$row->HORARIO .'] '. $row->LOCAL .' '. $row->VISITANTE . ' <b style="color:green">OK</b><br>';
				}
		 
			} else {
				echo '['.$row->FECHA.'] ['. $row->HORARIO.'] '. $row->LOCAL .' '. $row->VISITANTE . ' <b style="color:red">No tiene cuotas</b><br>';
			} 
			$ini++;
			echo '<b>'. $ini . ' De ' . $total . '</b></br>';
		}
		echo "<h1>Termine [".$ok."]</h1>";
	} // End syncCuotas


	public function syncAllCuotas(){
		$to = new DateTime(date("Y-m-d"));
		$to->add(new DateInterval('P3D')); // sumamos un día por zona horaria

		$from = new DateTime(date("Y-m-d"));
		$from->sub(new DateInterval('P2D')); // restamos un día por zona horaria

		$this->ApiFootball->FROM = $from->format('Y-m-d');
		$this->ApiFootball->TO   = $to->format('Y-m-d');

		$cuotas=$this->ApiFootball->getCuotas();

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



	/*******************************************************/
	/*                  BETTING ODDS API                   */
	/*******************************************************/
	public function syncCorredores(){
		$Corredores=$this->BettingOddsApi->getCorredores();
		if ($Corredores!=null) {
			foreach ($Corredores as $key => $value) {
				$this->Corredor->ID_CORREDOR = $key;
				$this->Corredor->NOMBRE  = $value->name;

				$pais=$this->Corredor->getCorredor();
				if ($pais==null) {
					echo "<b>add</b> ".$value->name."<br>";
					$this->Corredor->add();
				} else {
					echo "<b>update</b> ".$value->name."<br>";
					$this->Corredor->update();
				}
			}
		}
		header("Location:" . base_url(). "sync");
	} // End syncBookmakers


	public function syncLigas(){
		$ligas=$this->BettingOddsApi->getLigas();
		if ($ligas!=null) {
			foreach ($ligas as $key => $value) {
				$this->Liga->ID_LIGA = $key;
				$this->Liga->NOMBRE  = $value->name;

				$liga=$this->Liga->getLiga();

				if ($liga==null) {
					echo "<b>add</b> ".$value->name."<br>";
					$this->Liga->add();
				} else {
					echo "<b>update</b> ".$value->name."<br>";
					$this->Liga->update();
				}
			}
		}
		header("Location:" . base_url(). "sync");
	} // End syncLeagues


	public function syncTipos(){
		$tipos=$this->BettingOddsApi->getMercados();
		if ($tipos!=null) {

			foreach ($tipos as $key => $value) {

				$this->TipoCuota->ID_TIPO = $key;
				$this->TipoCuota->NOMBRE  = $value->name;

				$liga=$this->TipoCuota->getTipo();

				if ($liga==null) {
					echo "<b>add</b> ".$value->name."<br>";
					$this->TipoCuota->add();
				} else {
					echo "<b>update</b> ".$value->name."<br>";
					$this->TipoCuota->update();
				}

				foreach ($value->outcomes as $keyRes => $row) {
					$this->Resultado->ID_RESULTADO = $keyRes;
					$this->Resultado->NOMBRE  = $row->name;
					$resultado=$this->Resultado->getResultado();
					if ($resultado==null) {
						echo "<b>add</b> ".$row->name."<br>";
						$this->Resultado->add();
					} else {
						echo "<b>update</b> ".$row->name."<br>";
						$this->Resultado->update();
					}		 
				}
			}
		}
		header("Location:" . base_url(). "sync");
	} // End syncTipoCuota

	public function syncEventos(){ 
		/*
		"
		SELECT p2.ID_PARTIDO, p2.LOCAL, p2.VISITANTE, tc.NOMBRE, r.NOMBRE, c2.VALOR from partido2 p2 LEFT JOIN cuota2 c2 ON (p2.ID_PARTIDO=c2.ID_PARTIDO) LEFT JOIN tipo_cuota tc ON (tc.ID_TIPO=c2.ID_TIPO) LEFT JOIN resultado r ON (r.ID_RESULTADO=c2.ID_RESULTADO) WHERE p2.ID_PARTIDO='45914946' GROUP BY r.NOMBRE ORDER BY tc.NOMBRE ASC

		"
		*/
		$this->BettingOddsApi->FROM = date('Y-m-d');
		$partidos=$this->BettingOddsApi->getEventos();

		if ($partidos!=null) {
			foreach ($partidos as $key => $value) {

				#Funcion Horario Colombia / Resta 5 horas UTC
				$fecha=strtotime($value->datetime->value);
				$fecha = date("Y-m-d H:i", $fecha);
				$fecha = new DateTime($fecha);
				$fecha->sub(new DateInterval('PT5H'));

				$this->Partido2->ID_PARTIDO      =  $key;
				$this->Partido2->ID_COMPETENCIA  =  $value->league->id;
				$this->Partido2->FECHA           =  $fecha->format('Y-m-d');
				$this->Partido2->HORARIO         =  $fecha->format('H:i');
				$this->Partido2->LOCAL           = $value->home->name;
				$this->Partido2->VISITANTE       = $value->away->name;
				$partido=$this->Partido2->getPartido();

				if ($partido==null) {
					echo "<b>add  ".$fecha->format('Y-m-d')." ".$fecha->format('H:i')." </b>".$value->home->name." vs ".$value->away->name."<br>";


					$this->Partido2->add();
				} else {
					echo "<b>update ".$fecha->format('Y-m-d')." ".$fecha->format('H:i')."</b> ".$value->home->name." vs ".$value->away->name."<br>";
					$this->Partido2->update();

				}
				
				$array = json_decode(json_encode($value->odds),true);
				foreach ($array as $keyTipo => $tipo) {
					foreach ($tipo as $keyResultado => $resultado) {
						if ($keyResultado!='2.50') {
							$this->Cuota2->ID_PARTIDO=$key; 
							$this->Cuota2->ID_RESULTADO=$keyResultado; 
							$this->Cuota2->ID_TIPO=$keyTipo; 
							foreach ($resultado as $keyCorredor => $Corredor) {
								$this->Cuota2->ID_CORREDOR=$keyCorredor; 
							#print_r($resultado['20']);  //Expekt 
								$this->Cuota2->VALOR=$Corredor; 
								$veri=$this->Cuota2->getCuota();
								if ($veri==null) {
									$this->Cuota2->add();
								} else {
									$this->Cuota2->update();
								}
							}
						} else {
							foreach ($resultado as $keyOU => $valueOU) {
								$this->Cuota2->ID_PARTIDO=$key; 
								$this->Cuota2->ID_RESULTADO=$keyOU; 
								$this->Cuota2->ID_TIPO=$keyTipo; 
								foreach ($valueOU as $keyCorreOU => $CorredorOU) {
									$this->Cuota2->ID_CORREDOR=$keyCorreOU; 
									$this->Cuota2->VALOR=$CorredorOU; 
									$veri=$this->Cuota2->getCuota(); 
									if ($veri==null) {
										$this->Cuota2->add();
									} else {
										$this->Cuota2->update();
									}
								}
							}
						}
					}

				}
			}
		}
	} // End syncTipoCuota

}



