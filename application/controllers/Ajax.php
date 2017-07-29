<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->User->check();
	}

	public function json_all_match(){
		if ($_POST) {
			$this->HORARIO=date("H:i");
			$this->FROM=date("Y-m-d");
			$this->TO=date("Y-m-d");
			$data = $this->Partido->all();
			echo json_encode($data);
		} else {
			header("Location:" . base_url());
		} 
	}

	public function json_compe(){
		if (isset($_GET['fecha']) and $_GET['fecha']!='') {
			$date=$_GET['fecha'];
			$hour='12:00';
			#$hour=date("H:i");
			$data = $this->Competicion->getCompeticion($date, $hour);
			echo json_encode($data);
		} else {
			header("Location:" . base_url());
		} 
	}




}



