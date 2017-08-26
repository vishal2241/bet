<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Equipos extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->User->check();
	}

	public function fm(){
		$this->load->view('equipos/fm');
	} 

}



