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
		$this->load->view('partidos/index');	 
	}

	public function agregar()
	{
		if ($_POST) {
			$partido = $this->input->post();
			$this->Partido->add($partido);
			header("Location:" . base_url(). "partidos");
		} else {
				#Vista
			$this->load->helper('form');
			$this->load->view('partidos/agregar');
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
			$this->Partido->ID_PARTIDO         = $this->uri->segment(3);
			$data['partido']                   = $this->Partido->getPartido();
			$this->Competencia->ID_COMPETENCIA = $data['partido'][0]->ID_COMPETENCIA;
			$data['competencia']               = $this->Competencia->getCompe();
			$this->Pais->ID_PAIS               = $data['competencia'][0]->ID_PAIS;
			$data['pais']                      = $this->Pais->getPais();
			$this->Cuota->ID_PARTIDO           = $this->uri->segment(3);
			$data['cuotas']                    = $this->Cuota->getCuota();

			$this->load->helper('form');
			$this->load->view('partidos/editar', $data);

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



