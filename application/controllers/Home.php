<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->User->check();
	}
// 
	public function index(){

		#$this->load->view('home/index');

		$this->load->library('PHPRequests');
		$APIkey='0eb345c0e50dc4877ba93e9429d95b29b902788120cbe9b16c0d607e711a945a';
		$request = Requests::get('https://apifootball.com/api/?action=get_countries&APIkey='.$APIkey.'');
		print_r($request);


		foreach ($request as $key => $value) {
			echo	$key;

		}

	}




}



