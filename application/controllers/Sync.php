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
	public function syncMatches(){
		$this->Request->FECHA=1;  
		$matches=$this->Request->getMatches();  

		if ($matches!=null) {
			foreach ($matches as $key => $row) {
				#print_r($row); exit();
				# AGREGAMOS PAISES
				$this->Pais->ID_PAIS = $row->id_country;
				$this->Pais->NOMBRE  = $row->name_country;
				$pais=$this->Pais->getPais();
				if ($pais==null) {
					echo "<b>add</b> ".$row->name_country."<br>";
					$this->Pais->add();
				} 
				# AGREGAMOS COMPETENCIA-> Si no existe
				$this->Competencia->ID_COMPETENCIA  = $row->id_torneo;
				$this->Competencia->ID_PAIS         = $row->id_country;
				$this->Competencia->NOMBRE          = $row->name_torne;
				$pais=$this->Competencia->getCompe();
				if ($pais==null) {
					echo "<b>add</b> ".$row->name_torne."<br>";
					$this->Competencia->add();
				}

				# AGREGAMOS EQUIPO LOCAL-> Si no existe
				$this->Equipo->ID_EQUIPO = 	$row->id_l;
				$this->Equipo->NOMBRE    =  $row->l;
				$local=$this->Equipo->getEquipo();
				if ($local==null) {
					echo "<b>add</b> ".$row->l."<br>";
					$this->Equipo->add();
				}

				# AGREGAMOS EQUIPO VISITANTE -> Si no existe
				$this->Equipo->ID_EQUIPO = 	$row->id_v;
				$this->Equipo->NOMBRE    =  $row->v;
				$local=$this->Equipo->getEquipo();
				if ($local==null) {
					echo "<b>add</b> ".$row->v."<br>";
					$this->Equipo->add();
				}

				# AGREGAMOS PARTIDO
				$fecha = new DateTime($row->fecha_event);
				$this->Partido->ID_PARTIDO     = $row->id_match;
				$this->Partido->ID_COMPETENCIA = $row->id_torneo;
				$this->Partido->FECHA          = $fecha->format('Y-m-d');
				$this->Partido->HORARIO        = $fecha->format('H:i');
				$this->Partido->ESTADO         = $row->status;
				$this->Partido->LOCAL          = $row->id_l;
				$this->Partido->VISITANTE      = $row->id_v;

				$local=$this->Partido->getPartido();
				if ($local==null) {
					echo "<b>add Partido</b> ".$row->l." ".$row->v."<br>";
					$this->Partido->add();
				} else {
					echo "<b>Update Partido</b> ".$row->l." ".$row->v."<br>";
					$this->Partido->update();
				}

				# AGREGAMOS CUOTAS DEL PARTIDO
				$fecha = new DateTime($row->fecha_event);
				$this->Partido->ID_PARTIDO     = $row->id_match;
				$this->Partido->ID_COMPETENCIA = $row->id_torneo;
				$this->Partido->FECHA          = $fecha->format('Y-m-d');
				$this->Partido->HORARIO        = $fecha->format('H:i');
				$this->Partido->ESTADO         = $row->status;
				$this->Partido->LOCAL          = $row->id_l;
				$this->Partido->VISITANTE      = $row->id_v;

				$local=$this->Partido->getPartido();
				if ($local==null) {
					echo "<b>add Partido</b> ".$row->l." ".$row->v."<br>";
					$this->Partido->add();
				} else {
					echo "<b>Update Partido</b> ".$row->l." ".$row->v."<br>";
					$this->Partido->update();
				}
				exit;


			}
		} else {
			echo "Sin Respuesta";
		}
	} // End sync

}



