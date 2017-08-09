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
		$i=0;
		$competencias=$this->ApiBetfair->getCompetencias(); 
		if ($competencias!=null) {
			foreach ($competencias as $key => $rowCompe) {
				$eventos=$this->ApiBetfair->getEventos($from, $to, $rowCompe['competition']['id']); 
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
							echo "<b>add</b> ".$rowEvent['event']['name']. " " .$fecha->format('Y-m-d H:i'). "<b$fecha->format('Y-m-d H:i')r>";
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




	}  




}



