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
				echo "============PAISES============== ";
				$this->Pais->ID_PAIS = $row->id_country;
				$this->Pais->NOMBRE  = $row->name_country;
				$pais=$this->Pais->getPais();
				if ($pais==null) {
					echo "<b>add</b> ".$row->name_country."<br>";
					$this->Pais->add();

				} else {
					echo "<b>update</b> ".$row->name_country."<br>";
					$this->Pais->update();
				}

				# AGREGAMOS COMPETENCIA
				echo "==========COMPETENCIAS=========== ";
				$this->Competencia->ID_COMPETENCIA  = $row->id_torneo;
				$this->Competencia->ID_PAIS         = $row->id_country;
				$this->Competencia->NOMBRE          = $row->name_torne;
				$pais=$this->Competencia->getCompe();
				if ($pais==null) {
					echo "<b>add</b> ".$row->name_torne."<br>";
					$this->Competencia->add();

				} else {
					echo "<b>update</b> ".$row->name_torne."<br>";
					$this->Competencia->update();
				}
			 
			}
		} else {
			echo "Sin Respuesta";
		}
	} // End sync

}



