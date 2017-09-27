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



	public function getByCedula()
	{
		$sql="SELECT ID_TIPO FROM usuario WHERE CEDULA='".$this->CEDULA."'  ";
		$result=$this->db->query($sql);
		if ($result->num_rows() > 0) {
			return $result->row();
		} else {
			return null;
		} 
	}

	public function getUser($user)
	{
		$result=$this->db->query("SELECT * FROM usuario WHERE (USUARIO='{$user}' OR EMAIL='{$user}')  ");
		if ($result->num_rows() > 0) {
			return $result->row();
		} else {
			return null;
		} 
	}

	public function getSaldo()
	{
		$result=$this->db->query("SELECT SALDO FROM usuario WHERE  CEDULA ='".$this->CEDULA."' ");
		if ($result->num_rows() > 0) {
			return $result->row();
		} else {
			return null;
		} 
	}


	public function updateSaldo($valor)
	{
		$result=$this->db->query("UPDATE usuario SET SALDO='".$valor."' WHERE  CEDULA ='".$this->CEDULA."' ");
	}

	public function check()
	{
		if (!$this->session->userdata('login')) {
			header("Location:" . base_url());
		}
	}



	public function is_admin()
	{
		if ( !empty($this->session->userdata('id')) ) {
			$this->CEDULA= $this->session->userdata('id');
			$tipo = $this->getByCedula();
			if ($tipo!=null and $tipo->ID_TIPO!=1 ) {
				header("Location:" . base_url());
			}


		} else {
			header("Location:" . base_url());
		}
	}




}
?>