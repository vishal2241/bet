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
			$hour=date("H:i");
			$data = $this->Competencia->getByDate($date, $hour);
			echo json_encode($data);
		} else {
			header("Location:" . base_url());
		} 
	}


	public function json_match(){
		if (isset($_GET['fecha']) and $_GET['fecha']!='' and isset($_GET['compe']) and $_GET['compe']!='') {
			$date=$_GET['fecha'];
			$compe=$_GET['compe'];
			$hour=date("H:i");
			$data = $this->Partido->getPartidoByCompe($date, $hour, $compe);
			echo json_encode($data);
		} else {
			header("Location:" . base_url());
		} 
	}


	public function json_match_all(){
		if (isset($_GET['from']) and $_GET['from']!='' and isset($_GET['to']) and $_GET['to']!='') {
			$from=$_GET['from'];
			$to=$_GET['to'];
			$filtro=$_GET['filtro'];
			$data = $this->Partido->all($from, $to, $filtro);
			echo json_encode($data);
		} else {
			header("Location:" . base_url());
		} 
	}




}



