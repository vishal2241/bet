<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Widget extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->User->check();
	}

	public function index(){

		$this->load->view('widget/index');
	}




}



