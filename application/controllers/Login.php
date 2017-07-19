<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		if ($this->session->userdata('login')) {
			header("Location:" . base_url().'conceptos' );
		} else {
			$this->load->view('index');
		}
	}

	public function form()
	{
		$inputUser  = $this->input->post('usuario');
		$inputPass  = $this->input->post('contrasena');

		$this->load->model('user');
		$fila=$this->user->getUser($inputUser);

		if ($fila!=null) {
			if ($fila->PASS == $inputPass ) {

				$dia_corte = $fila->INICIO_MES;
				$inicio      = date("Y-m-$dia_corte");
				if (date("d")<$dia_corte ) {
					$inicio = strtotime($inicio."- 1 months");
					$inicio = date("Y-m-d",$inicio);
				}
				$fin       = strtotime($inicio."+ 1 months");
				$fin       = date("Y-m-d",$fin);

				$data = array (
					'id'     => $fila->ID,
					'user'   => $fila->USER,
					'name'   => $fila->NOMBRES . ' ' . $fila->P_APELLIDO,
					'corte'  => $fila->INICIO_MES,
					'inicio' => $inicio,
					'fin'    => $fin ,
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

