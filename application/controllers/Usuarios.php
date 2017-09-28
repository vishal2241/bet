<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->User->check();
		$this->User->is_admin();
		$this->load->helper('form', 'url');
	}

	public function index()
	{
		$data['usuarios']  = $this->User->index();
		$this->load->view('usuarios/index', $data);	 
	}

	public function agregar()
	{
		if ($_POST) {
			$this->load->library('form_validation');
			$this->form_validation->set_rules('CEDULA', 'CEDULA', 'required');
			$this->form_validation->set_rules('CLAVE', 'CLAVE', 'required',
				array('required' => 'You must provide a %s.')
			);
			$this->form_validation->set_rules('CLAVE', 'CLAVE', 'required');


			if($this->form_validation->run()!=false){  
				$this->load->library('form_validation');
				$post=$this->input->post();
				$this->User->CEDULA=$post['CEDULA'];
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
				//$this->User->add(); 

				$datos["mensaje"]="Validación correcta";
			}else{
				$datos["mensaje"]="Validación incorrecta";
			}
			
			$this->load->view("usuarios/agregar",$datos);


			
			//header("Location:" . base_url(). "usuarios");

		} else {
				#Vista
			


			$this->load->view('usuarios/agregar');
		}

	}

	public function editar()
	{
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

	public function eliminar()
	{
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



