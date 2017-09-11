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
			$data = $this->Competencia->getByDate($date, $hour, 'FAV', '');
			echo json_encode($data);
		} else {
			header("Location:" . base_url());
		} 
	}


	public function json_table(){
		//if (isset($_POST['fecha']) and $_POST['fecha']!='' and isset($_POST['compe']) and $_POST['compe']!='') {
		if (isset($_POST['fecha']) and $_POST['fecha']!='') {
			$date=$_POST['fecha'];
			//$compe=$_POST['compe'];
			$hour=date("H:i");
			$data = $this->Partido->getTablePartidos($date, $hour, '');
			echo json_encode($data);
		} else {
			header("Location:" . base_url());
		} 
	}

	public function json_countries(){
		if (isset($_POST['fecha']) and $_POST['fecha']!='') {
			$date=$_POST['fecha'];
			$data = $this->Pais->getPaisByDate($date);
			echo json_encode($data);
		} else {
			header("Location:" . base_url());
		} 
	}

	public function jsonCompeByCountry(){
		if (isset($_POST['fecha']) and $_POST['fecha']!='' and isset($_POST['pais']) and $_POST['pais']!='') {
			$date=$_POST['fecha'];
			$pais=$_POST['pais'];
			$data = $this->Competencia->getByDate($date, date("H:i"), 'PAIS', $pais);
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
			$data = $this->Partido->getTotalMatch($fecha, '');
			echo json_encode($data);
		} else {
			header("Location:" . base_url());
		} 
	}

	public function json_checkMatch(){
		if (isset($_POST['fecha']) and $_POST['fecha']!='' and isset($_POST['id']) and $_POST['id']!='') {
			$id=$_POST['id'];
			$fecha=$_POST['fecha'];
			$data = $this->Partido->getTotalMatch($fecha, $id);
			echo json_encode($data);
		} else {
			header("Location:" . base_url());
		} 
	}

	public function json_saldo(){
		if ( !empty($this->session->userdata('id'))  ) {
			$this->User->CEDULA=$this->session->userdata('id');
			$data = $this->User->getSaldo();
			echo json_encode($data);
		} else {
			header("Location:" . base_url());
		} 
	}

	public function json_game(){
		if (isset($_POST['detalle']) and $_POST['detalle']!='' and isset($_POST['cantidad']) and $_POST['cantidad']!='') {

			//saldo user veri
			$cantidad=$_POST['cantidad'];
			$this->User->CEDULA = $this->session->userdata('id');
			$saldo = $this->User->getSaldo();

			if ($saldo>=$cantidad) {
				$this->Apuesta->NRO_EVENTOS = count($_POST['detalle']);
				$this->Apuesta->ID_USER     = $this->session->userdata('id');
				$this->Apuesta->VALOR       = $cantidad;
				$this->Apuesta->ESTADO      = "PLAYING";
				$this->Apuesta->add();

				$id_apuesta=$this->db->insert_id();
				$this->DetalleApuesta->ID_APUESTA=  $id_apuesta;

				$totalCreditos=1;
				foreach ($_POST['detalle'] as $key => $value) {
					//Consultamos cuota en el momento de guardar
					$this->Cuota->ID_CUOTA=$value;
					$cuota=$this->Cuota->getCuota('');

					//Guardamos detalle apuesta
					$totalCreditos=$totalCreditos*$cuota[0]->VALOR;
					$this->DetalleApuesta->ID_CUOTA=$cuota[0]->ID_CUOTA;
					$this->DetalleApuesta->VALOR=$cuota[0]->VALOR;
					$this->DetalleApuesta->add();
				}

				$ganancia=$totalCreditos*$cantidad;
				$this->Apuesta->ID_APUESTA     = $id_apuesta;
				$this->Apuesta->GANANCIA       = $ganancia;
				$this->Apuesta->TOTAL_CREDITOS = $totalCreditos;
				$this->Apuesta->update();


				$nuevoSaldo =$saldo->SALDO-$cantidad;
				$this->User->updateSaldo($nuevoSaldo);

				echo json_encode("Hola");


			} else {
				echo 'Saldo insuficiente';
			}
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



