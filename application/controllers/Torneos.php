<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Torneos extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->User->check();
		$this->User->is_admin();
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
			$this->Equipo->ID_EQUIPO=$this->uri->segment(3);
			$this->Equipo->NOMBRE=$post['NOMBRE'];
			$this->Equipo->ID_PAIS=$post['ID_PAIS'];
			$this->Equipo->IMG=$post['IMG'];
			$this->Equipo->add();
			header("Location:" . base_url(). "equipos");
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
			$this->Equipo->ID_EQUIPO=$this->uri->segment(3);
			$this->Equipo->NOMBRE=$post['NOMBRE'];
			$this->Equipo->ID_PAIS=$post['ID_PAIS'];
			$this->Equipo->IMG=$post['IMG'];

			$this->Equipo->update();
			
			header("Location:" . base_url(). "equipos");
		} else {

			$this->Equipo->ID_EQUIPO=$this->uri->segment(3);
			$data['equipo'] = $this->Equipo->getEquipo();
			$data['paises'] = $this->Pais->index();
			$this->load->helper('form');
			$this->load->view('torneos/editar', $data);

		}
	}

	public function eliminar()
	{
		$id = $this->uri->segment(3);
		if ($id!='') {
			$this->Equipo->ID_EQUIPO=$id;
			$this->Equipo->delete();
			header("Location:" . base_url(). "equipos");

		} else {
			header("Location:" . base_url());
		}
	}


}



