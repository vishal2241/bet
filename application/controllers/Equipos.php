<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Equipos extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->User->check();
		$this->User->is_admin();
	}

	public function logos(){
		$data['equipos']  = $this->Equipo->index();
		$this->load->view('equipos/logos', $data);
	} 

	public function fm(){
		$this->load->view('equipos/fm');
	} 

}



