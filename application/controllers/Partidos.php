<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Partidos extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->User->check();
	}

	public function index()
	{
		$data['partidos']  = $this->Partido->all();
		$this->load->view('partidos/index', $data);	 
	}

	public function agregar()
	{
		if ($_POST) {
			$partido = $this->input->post();
			$this->Partido->add($partido);
			header("Location:" . base_url(). "paises");
		} else {
				#Vista
			$this->load->helper('form');
			$this->load->view('paises/agregar');
		}
		
	}

	public function editar()
	{
		if ($_POST) {
			$partido = $this->input->post();
			$partido['ID_CONCEPTO']=  $this->uri->segment(3);
			$this->Partido->update($partido);
			header("Location:" . base_url(). "paises");
		} else {
				#Vista
			$id = $this->uri->segment(3);
			$data['concepto'] = $this->Partido->ver($id);
			$this->load->helper('form');
			$this->load->view('paises/editar', $data);

		}
	}

	public function eliminar()
	{
		$id = $this->uri->segment(3);
		if ($id!='') {
			$this->Partido->delete($id);
			header("Location:" . base_url(). "paises");

		} else {
			header("Location:" . base_url());
		}
	}

	public function ver()
	{
		#Vista
		$id             = $this->uri->segment(3);
		$data['log'] = $this->Log->get_log($id);
		$this->load->helper('form');
		$this->load->view('paises/ver', $data);
	}

}



