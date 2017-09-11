<?php 


class User extends CI_Model
{
	public $SALDO;
	public $CEDULA;
	public function __construct()
	{
		parent::__construct();
		$this->SALDO  = 0;
		$this->CEDULA = 0;
	}



	public function getUser ($user ='')
	{
		$result=$this->db->query("SELECT * FROM usuario WHERE (USUARIO='{$user}' OR EMAIL='{$user}')  ");
		if ($result->num_rows() > 0) {
			return $result->row();
		} else {
			return null;
		} 
	}

	public function getSaldo ()
	{
		$result=$this->db->query("SELECT SALDO FROM usuario WHERE  CEDULA ='".$this->CEDULA."' ");
		if ($result->num_rows() > 0) {
			return $result->row();
		} else {
			return null;
		} 
	}

	public function check()
	{
		if (!$this->session->userdata('login')) {
			header("Location:" . base_url());
		}
	}




}
?>