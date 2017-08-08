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





}



