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
				print_r($row); exit();
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
	} // End sync

}



