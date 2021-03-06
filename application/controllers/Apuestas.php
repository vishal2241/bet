<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apuestas extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->User->check('15');
	}

	public function index(){
		$this->load->view('apuestas/index');
	} 

	public function informe(){
		$this->User->check('14');
		$this->load->view('apuestas/informe');
	} 

	public function print_(){
		$this->load->view('apuestas/index');
	} 

	public function ver(){
		$this->DetalleApuesta->ID_APUESTA = $this->uri->segment(3);
		$array  = $this->DetalleApuesta->getDetalleByApuesta();
		$detalle = array();

		$this->Apuesta->ID_APUESTA= $this->uri->segment(3);
		$apuesta = $this->Apuesta->getApuesta();

		foreach ($array as $key => $row) {

			$this->Cuota->ID_CUOTA= $row->ID_CUOTA;
			$cuota = $this->Cuota->getCuota('');

			$this->Partido->ID_PARTIDO =  $cuota[0]->ID_PARTIDO; 
			$partido = $this->Partido->getPartido();

			$this->Equipo->ID_EQUIPO =  $partido[0]->LOCAL; 
			$local = $this->Equipo->getEquipo();

			$this->Equipo->ID_EQUIPO =  $partido[0]->VISITANTE; 
			$visitante = $this->Equipo->getEquipo();

			$this->Competencia->ID_COMPETENCIA =  $partido[0]->ID_COMPETENCIA; 
			$competencia = $this->Competencia->getCompe();

			$this->Pais->ID_PAIS =  $competencia[0]->ID_PAIS; 
			$pais = $this->Pais->getPais(); 

			switch ($row->RESULTADO) {
				case 'GANADOR':
				$color="success";
				$i="fa-check";
				break;
				case 'PERDEDOR':
				$color="danger";
				$i="fa-times";
				break;
				case 'PENDIENTE':
				$color="";
				$i="";
				break;

			}
			array_push($detalle,  
				array(
					'PARTIDO' => $local[0]->NOMBRE.' vs. '.$visitante[0]->NOMBRE ,
					'LIGA' => $competencia[0]->NOMBRE.' - '.$pais[0]->NOMBRE ,
					'CUOTA_NOMBRE' => $cuota[0]->NOMBRE,
					'CUOTA' => $cuota[0]->DESCRIPCION,
					'ESTADO_PARTIDO' => $partido[0]->ESTADO,
					'RESULTADO_DETALLE' => $row->RESULTADO,
					'COLOR' => $color,
					'ICON' => $i,
					'SCORE_1' => $partido[0]->SCORE_1,
					'SCORE_2' => $partido[0]->SCORE_2,
					'FECHA' => $partido[0]->FECHA,
					'HORARIO' => $partido[0]->HORARIO,
					'VALOR' => $row->VALOR
					));


		}
		switch ($apuesta[0]->RESULTADO) {
			case 'GANADOR':
			$color_a="success";
			break;
			case 'PERDEDOR':
			$color_a="danger";
			break;
			case 'PENDIENTE':
			$color_a="info";
			break;
		}

		$data = array(
			'tiquete' => $this->uri->segment(3),
			'fecha' => $apuesta[0]->FECHA,
			'ganancia' => $apuesta[0]->GANANCIA,
			'apostado' => $apuesta[0]->VALOR,
			'estado' => $apuesta[0]->ESTADO,
			'color_a' => $color_a,
			'resultado' => $apuesta[0]->RESULTADO,
			'detalle' => $detalle,
			);

		$this->load->view('apuestas/ver', $data);
	} 


}



