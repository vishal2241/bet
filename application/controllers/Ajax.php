<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->User->check();
	}

	/******************************/
	/*********	ADMIN *************/
	/******************************/
	public function json_partidos(){
		if (isset($_POST['from']) and $_POST['from']!='' and isset($_POST['to']) and $_POST['to']!='') {
			$from=$_POST['from'];
			$to=$_POST['to'];
			$filtro=$_POST['filtro'];
			$data = $this->Partido->getAllPartidos($from, $to, $filtro);
			echo json_encode($data);
		} else {
			header("Location:" . base_url());
		} 
	}

	/******************************/
	/*********	HOME  *************/
	/******************************/

	public function json_compe(){
		if (isset($_POST['fecha']) and $_POST['fecha']!='') {
			$date=$_POST['fecha'];
			$hour=date("H:i");
			$data = $this->Competencia->getByDate($date, $hour, 'FAV');
			echo json_encode($data);
		} else {
			header("Location:" . base_url());
		} 
	}


	public function json_matchByCompe(){
		if (isset($_POST['fecha']) and $_POST['fecha']!='' and isset($_POST['compe']) and $_POST['compe']!='') {
			$date=$_POST['fecha'];
			$compe=$_POST['compe'];
			$hour=date("H:i");
			$data = $this->Partido->getPartidoByCompe($date, $hour, $compe);
			echo json_encode($data);
		} else {
			header("Location:" . base_url());
		} 
	}

	public function json_odds(){
		if (isset($_POST['match']) and $_POST['match']!='') {
			$match=$_POST['match'];
			$data = $this->Cuota->getOddByMatch($match);
			echo json_encode($data);
		} else {
			header("Location:" . base_url());
		} 
	}

	public function json_totalMatch(){
		if (isset($_POST['fecha']) and $_POST['fecha']!='') {
			$fecha=$_POST['fecha'];
			$data = $this->Partido->getTotalMatch($fecha);
			echo json_encode($data);
		} else {
			header("Location:" . base_url());
		} 
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








}



