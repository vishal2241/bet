<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paises extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->User->check();
	}

	public function index()
	{
		$data['paises']  = $this->Concepto->index();
		$this->load->view('paises/index', $data);	 
	}

	public function agregar()
	{
		if ($_POST) {
			$Concepto = $this->input->post();
			$this->Concepto->add($Concepto);
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
			$concepto = $this->input->post();
			$concepto['ID_CONCEPTO']=  $this->uri->segment(3);
			$this->Concepto->update($concepto);
			header("Location:" . base_url(). "paises");
		} else {
				#Vista
			$id = $this->uri->segment(3);
			$data['concepto'] = $this->Concepto->ver($id);
			$this->load->helper('form');
			$this->load->view('paises/editar', $data);

		}
	}

	public function eliminar()
	{
		$id = $this->uri->segment(3);
		if ($id!='') {
			$this->Concepto->delete($id);
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



