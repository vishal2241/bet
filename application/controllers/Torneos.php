<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Torneos extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->User->check('12');
	}
	
	public function index()
	{
		$data['torneos']  = $this->Competencia->index();
		$this->load->view('torneos/index', $data);	 
	}

	public function agregar()
	{
		if ($_POST) {
			$post=$this->input->post();
			$this->Competencia->ID_COMPETENCIA=$this->uri->segment(3);
			$this->Competencia->NOMBRE=$post['NOMBRE'];
			$this->Competencia->ID_PAIS=$post['ID_PAIS'];
			$this->Competencia->IMG=$post['IMG'];
			$this->Competencia->add();
			header("Location:" . base_url(). "torneos");
		} else {
				#Vista
			$this->load->helper('form');
			$this->load->view('torneos/agregar');
		}
		
	}

	public function editar()
	{
		if ($_POST) {
			$post=$this->input->post();
			$this->Competencia->ID_COMPETENCIA=$this->uri->segment(3);
			$this->Competencia->NOMBRE=$post['NOMBRE'];
			$this->Competencia->ID_PAIS=$post['ID_PAIS'];
			$this->Competencia->update();
			
			header("Location:" . base_url(). "torneos");
		} else {

			$this->Competencia->ID_COMPETENCIA=$this->uri->segment(3);
			$data['torneo'] = $this->Competencia->getCompe();
			$data['paises'] = $this->Pais->index();
			$this->load->helper('form');
			$this->load->view('torneos/editar', $data);

		}
	}

	public function eliminar()
	{
		$id = $this->uri->segment(3);
		if ($id!='') {
			$this->Competencia->ID_COMPETENCIA=$id;
			$this->Competencia->delete();
			header("Location:" . base_url(). "torneos");

		} else {
			header("Location:" . base_url());
		}
	}


}



