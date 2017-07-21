<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		if ($this->session->userdata('login')) {
			header("Location:" . base_url().'home' );
		} else {
			$this->load->helper('form');
			$this->load->view('index');
		}
	}

	public function form()
	{
		$inputUser  = $this->input->post('EMAIL');
		$inputPass  = $this->input->post('PASS');

		$this->load->model('user');
		$fila=$this->user->getUser($inputUser);
		
		if ($fila!=null) {
			if ($fila->CLAVE == $inputPass ) {
				$data = array (
					'id'     => $fila->CEDULA,
					'user'   => $fila->USUARIO,
					'name'   => $fila->P_NOMBRE . ' ' . $fila->P_APELLIDO,
					'login'  => true
					);

				$this->session->set_userdata($data);
				header("Location:" . base_url() );
			} else {
				header("Location:" . base_url());
			}
		} else {
			header("Location:" . base_url());
		}
	}



	public function logout()
	{
		$this->session->sess_destroy();
		header("Location:" . base_url());
	}



}

