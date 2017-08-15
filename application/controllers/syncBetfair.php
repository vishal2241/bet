<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class syncBetfair extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->User->check();
	}


	public function syncPaises(){
		$paises=$this->ApiBetfair->getPaises(); 

		if ($paises!=null) {
			foreach ($paises as $key => $value) {
				$this->Pais->ID_PAIS = $value['countryCode'];
				$this->Pais->MARKET_COUNT  = $value['marketCount'];

				$pais=$this->Pais->getPais();
				if ($pais==null) {
					echo "<b>add</b> ".$value['countryCode']."<br>";
					$this->Pais->add();
				} else {
					echo "<b>update</b> ".$value['countryCode']."<br>";
					$this->Pais->update();
				}
			}
		}
	} 

	public function syncCompetencias(){
		$competencias=$this->ApiBetfair->getCompetencias(); 

		if ($competencias!=null) {
			foreach ($competencias as $key => $value) {

				$this->Competencia->ID_COMPETENCIA = $value['competition']['id'];
				$this->Competencia->NOMBRE = $value['competition']['name'];
				$this->Competencia->REGION = $value['competitionRegion'];
				$this->Competencia->MARKET_COUNT  = $value['marketCount'];

				$competencia=$this->Competencia->getCompetencia();
				if ($competencia==null) {
					echo "<b>add</b> ".$value['competition']['name']. " " .$value['competitionRegion']. "<br>";
					$this->Competencia->add();
				} else {
					echo "<b>update</b> ".$value['competition']['name']." ". $value['competitionRegion']. "<br>";
					$this->Competencia->update();
				}
			}
		}
	}  

	public function syncEventos(){

		ini_set('memory_limit','16000000M');
		set_time_limit(100000000);
		$from= date("Y-m-d");
		$to = new DateTime(date("Y-m-d"));
		$to->add(new DateInterval('P1D')); // sumamos un día por zona horaria

		$i=0;
		$competencias=$this->ApiBetfair->getCompetencias(); 
		if ($competencias!=null) {
			foreach ($competencias as $key => $rowCompe) {
				$eventos=$this->ApiBetfair->getEventos($from, $to->format('Y-m-d'), $rowCompe['competition']['id']); 
				if ($eventos!=null) {
					foreach ($eventos as $key => $rowEvent) {
						$openDate=explode("T", $rowEvent['event']['openDate']);
						$fecha=$openDate[0];
						$hora= substr($openDate[1], 0, 5 );
						#print_r($rowEvent);
						#Funcion Horario Colombia
						switch ($rowEvent['event']['timezone']) {
							case 'Europe/London':
							# Resta 5 horas UTC
							$fecha=strtotime($fecha.' '.$hora);
							$fecha = date("Y-m-d H:i", $fecha);
							$fecha = new DateTime($fecha);
							$fecha->sub(new DateInterval('PT5H'));
							break;
							default:

							break;
						}

						$veri=strpos($rowEvent['event']['name'], " v ");
						if ($veri=="") {
							$name=explode(" - ", $rowEvent['event']['name']);
						} else {
							$name=explode(" v ", $rowEvent['event']['name']);
						}
						if (isset($name[0]) and isset($name[1]) ) {
							$local= $name[0];
							$visitante= $name[1];
						}

						$this->Partido->ID_PARTIDO     = $rowEvent['event']['id'];
						$this->Partido->ID_COMPETENCIA = $rowCompe['competition']['id'];
						if (isset($rowEvent['event']['countryCode'])) {
							$this->Partido->ID_PAIS        = $rowEvent['event']['countryCode'];
						}
						
						$this->Partido->TIMEZONE       = $rowEvent['event']['timezone'];
						$this->Partido->FECHA          = $fecha->format('Y-m-d');
						$this->Partido->HORA           = $fecha->format('H:i');
						$this->Partido->LOCAL          = $local;
						$this->Partido->VISITANTE      = $visitante;
						$this->Partido->MARKET_COUNT   = $rowEvent['marketCount'];

						$Partido=$this->Partido->getPartido();
						if ($Partido==null) {
							echo "<b>add</b> ".$rowEvent['event']['name']. " " .$fecha->format('Y-m-d H:i'). "<br>";
							$this->Partido->add();
						} else {
							echo "<b>update</b> ".$rowEvent['event']['name']." ". $fecha->format('Y-m-d H:i'). "<br>";
							$this->Partido->update();
						}
						$i++;
					}
				}

			}
			echo $i." Partidos";
		} else {
			echo "No hay competencias";
		}
	}  //end Sync Events


	public function syncTipoOdds(){
		$from= date("Y-m-d");
		$to = new DateTime(date("Y-m-d"));
		$to->add(new DateInterval('P1D')); // sumamos un día por zona horaria
		$partidos=$this->Partido->all($from, $to->format('Y-m-d'), 'hora'); 
		ini_set('memory_limit','16000000000M');
		set_time_limit(100000000000);
		$i=0;
		if ($partidos!=null) {
			foreach ($partidos as $key => $rowMatch) {
				$catalogo=$this->ApiBetfair->listMarketCatalogue("28295981");
				
				if (count($catalogo)>0) {
					foreach ($catalogo as $keyCata => $rowCata) {

						$this->Catalogo->ID_CATALOGO  = $rowCata['marketId'];
						$this->Catalogo->ID_PARTIDO   = $rowMatch->ID_PARTIDO;
						$this->Catalogo->NOMBRE       = $rowCata['marketName'];
						$this->Catalogo->TOTAL_JUGADO = $rowCata['totalMatched'];
						$getCatalogo=$this->Catalogo->getCatalogo(); 
						if ($getCatalogo==null) {
							$this->Catalogo->add();
							echo $rowMatch->LOCAL." ".$rowMatch->VISITANTE.' <b style="color:green">ADD</b> <br>'; 
						} else {
							$this->Catalogo->update();
							echo $rowMatch->LOCAL." ".$rowMatch->VISITANTE.' <b style="color:green">UPDATE</b> <br>'; 
						}
						foreach ($rowCata['runners'] as $keyRunner => $rowRunner) {

							$runner=$this->ApiBetfair->listRunnerBook($rowCata['marketId'], $rowRunner['selectionId']); 
							$this->Odds->ID_ODD      = $rowRunner['selectionId'];
							$this->Odds->ID_CATALOGO = $rowCata['marketId'];
							$this->Odds->ID_PARTIDO  = $rowMatch->ID_PARTIDO;
							$this->Odds->DESCRIPCION = $rowRunner['runnerName'];
							if (isset( $runner[0]['runners'][0]['lastPriceTraded'])) {
								$this->Odds->VALOR       = $runner[0]['runners'][0]['lastPriceTraded'];
							} else {
								$this->Odds->VALOR       = '0';
							}
							

							$this->Odds->ESTADO      = $runner[0]['runners'][0]['status'];
							$getOdd=$this->Odds->getOdd(); 
							if ($getOdd==null) {
								$this->Odds->add();
							} else {
								$this->Odds->update();
							} 
						}
					}

				} else {
					echo $rowMatch->LOCAL." ".$rowMatch->VISITANTE.' <b style="color:red">No tiene cuotas</b> <br>'; 
				}
				$i++;
			}
			echo "<h1>Total: ".$i."</h1>";
		} else {
			echo "No hay partidos para las fechas indicadas.";
		}
	}  
	

}



