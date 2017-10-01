<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form', 'url');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->User->check('13');
		$data['usuarios']  = $this->User->index();
		$this->load->view('usuarios/index', $data);	 
	}

	public function agregar()
	{
		$this->User->check('6');
		if ($_POST) {
			$this->form_validation->set_rules('CEDULA', 'CEDULA', 'required');
		//	$this->form_validation->set_rules('CLAVE', 'CLAVE', 'required');
			$this->form_validation->set_rules('EMAIL', 'EMAIL', 'required');
			$this->form_validation->set_rules('P_NOMBRE', 'P_NOMBRE', 'required');
			$this->form_validation->set_rules('P_APELLIDO', 'P_APELLIDO', 'required');


			if($this->form_validation->run()!=false){  
				$post=$this->input->post();
				$this->User->CEDULA=$post['CEDULA'];
				$this->User->P_NOMBRE=$post['P_NOMBRE'];
				$this->User->S_NOMBRE=$post['S_NOMBRE'];
				$this->User->P_APELLIDO=$post['P_APELLIDO'];
				$this->User->S_APELLIDO=$post['S_APELLIDO'];
				$this->User->EMAIL=$post['EMAIL'];
				$this->User->CLAVE=$post['CEDULA'];
				$this->User->USUARIO=$post['USUARIO'];
				$this->User->DIRECCION=$post['DIRECCION'];
				$this->User->TELEFONO=$post['TELEFONO'];
				$this->User->ID_TIPO=4;
				if ($this->session->userdata('type')==1) {
					$this->User->ID_TIPO=$post['ID_TIPO'];
				} else {
					$this->User->ID_TIPO=4;
				}
				$this->User->add(); 
				header("Location:" . base_url(). "usuarios");
			}else{
				$this->load->view("usuarios/agregar");
			}

		} else {
			#Vista
			$this->load->view('usuarios/agregar');
		}

	}

	public function editar()
	{
		$this->User->check('7');
		if ($_POST) {

			$post=$this->input->post();
			$this->User->CEDULA=$this->uri->segment(3);
			$this->User->P_NOMBRE=$post['P_NOMBRE'];
			$this->User->S_NOMBRE=$post['S_NOMBRE'];
			$this->User->P_APELLIDO=$post['P_APELLIDO'];
			$this->User->S_APELLIDO=$post['S_APELLIDO'];
			$this->User->EMAIL=$post['EMAIL'];
			$this->User->CLAVE=$post['CLAVE'];
			$this->User->USUARIO=$post['USUARIO'];
			$this->User->DIRECCION=$post['DIRECCION'];
			$this->User->TELEFONO=$post['TELEFONO'];
			$this->User->ID_TIPO=4;
			if ($this->session->userdata('type')==1) {
				$this->User->ID_TIPO=$post['ID_TIPO'];
			} else {
				$this->User->ID_TIPO=4;
			}

			$this->User->update();
			header("Location:" . base_url(). "usuarios");
		} else {

			$this->User->CEDULA=$this->uri->segment(3);
			$data['usuario'] = $this->User->getByCedula();
			$this->load->view('usuarios/editar', $data);

		}
	}

	public function recargar()
	{
		$this->User->check('9');
		if ($_POST) {
			$post=$this->input->post();
			$this->User->CEDULA=$this->uri->segment(3);
			$recarga=$post['SALDO'];
			$this->User->updateSaldo($recarga);
			header("Location:" . base_url(). "usuarios");
		} else {
			$this->User->CEDULA=$this->uri->segment(3);
			$data['usuario'] = $this->User->getByCedula();
			$this->load->view('usuarios/recargar', $data);

		}
	}

	public function eliminar()
	{
		$this->User->check('8');
		$id = $this->uri->segment(3);
		if ($id!='') {
			$this->User->CEDULA=$id;
			$this->User->delete();
			header("Location:" . base_url(). "usuarios");

		} else {
			header("Location:" . base_url());
		}
	}



}



