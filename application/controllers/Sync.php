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
	/*                        API                          */
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




}



