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
				$this->Competencia->ID_PAIS = $value['competitionRegion'];
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
		$from= date("Y-m-d");
		$to= "2017-08-10";
		$competencias=$this->ApiBetfair->getCompetencias(); 
		if ($competencias!=null) {
			foreach ($competencias as $key => $rowCompe) {
				$eventos=$this->ApiBetfair->getEventos($from, $to, $rowCompe['competition']['id']); 
				if ($eventos!=null) {
					print_r($eventos);
					foreach ($eventos as $key => $rowEvent) {
						
						$openDate=explode("T", $rowEvent['event']['openDate']);
						$fecha=$openDate[0];
						$hora= substr($openDate[1], 0, 5 );

						$veri=strpos($rowEvent['event']['name'], " v ");
						if ($veri===false) {
							$name=explode(" - ", $rowEvent['event']['name']);
						} else {
							$name=explode(" v ", $rowEvent['event']['name']);
						}
						$local= $name[0];
						$visitante= $name[1];
					 
						$this->Partido->ID_PARTIDO     = $rowEvent['event']['id'];
						$this->Partido->ID_COMPETENCIA = $rowCompe['competition']['id'];
						$this->Partido->ID_PAIS        = $rowCompe['event']['countryCode'];
						$this->Partido->TIMEZONE       = $rowCompe['event']['id'];
						$this->Partido->FECHA          = $fecha;
						$this->Partido->HORA           = $hora;
						$this->Partido->LOCAL          = $local;
						$this->Partido->VISITANTE      = $visitante;
						$this->Partido->MARKET_COUNT   = $rowCompe['marketCount'];

						$Partido=$this->Partido->getPartido();
						if ($Partido==null) {
							echo "<b>add</b> ".$rowEvent['event']['name']. " " .$rowEvent['event']['openDate']. "<br>";
							$this->Partido->add();
						} else {
							echo "<b>update</b> ".$rowEvent['event']['name']." ". $rowEvent['event']['openDate']. "<br>";
							$this->Partido->update();
						}
					}
				}

			}
		} else {
			echo "No hay competencias";
		}




	}  




}



