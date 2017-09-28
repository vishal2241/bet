<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->User->check();
		$this->User->is_admin();
	}

	public function index()
	{
		$data['usuarios']  = $this->User->index();
		$this->load->view('usuarios/index', $data);	 
	}

	public function agregar()
	{
		if ($_POST) {
			$pais = $this->input->post();
			$this->Pais->NOMBRE=$post['NOMBRE'];
			$this->Pais->FAVORITO=$post['FAVORITO'];
			$this->Pais->IMG=$post['IMG'];
			$this->Pais->FOLDER=$post['FOLDER'];
			$this->Pais->add();
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
			$post=$this->input->post();
			$this->Pais->ID_PAIS=$this->uri->segment(3);
			$this->Pais->NOMBRE=$post['NOMBRE'];
			$this->Pais->FAVORITO=$post['FAVORITO'];
			$this->Pais->IMG=$post['IMG'];
			$this->Pais->FOLDER=$post['FOLDER'];
			$this->Pais->update();
			
			header("Location:" . base_url(). "paises");
		} else {

			$this->Pais->ID_PAIS=$this->uri->segment(3);
			$data['pais'] = $this->Pais->getPais();
			$this->load->helper('form');
			$this->load->view('paises/editar', $data);

		}
	}

	public function eliminar()
	{
		$id = $this->uri->segment(3);
		if ($id!='') {
			$this->Pais->ID_PAIS=$id;
			$this->Pais->delete();
			header("Location:" . base_url(). "paises");

		} else {
			header("Location:" . base_url());
		}
	}



}



