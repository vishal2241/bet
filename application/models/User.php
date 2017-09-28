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


	public function index()
	{
		$sql='SELECT CEDULA, CONCAT(P_NOMBRE, " ", S_NOMBRE, " ", P_APELLIDO) AS NOMBRE, EMAIL, USUARIO, FECHA_NAC, DIRECCION, TELEFONO, SALDO FROM usuario  ORDER BY NOMBRE ASC ';
		$query = $this->db->query($sql); 

		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return null;
		} 
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
		$cedula=$this->session->userdata('id');
		$rol=$this->session->userdata('type');

		if ( !empty($cedula) and  !empty($rol)  ) {
			$this->CEDULA = $cedula;
			$veri_rol = $this->getByCedula()->ID_TIPO;
			
			if ($veri_rol==null or $rol!=1 or $rol!=$veri_rol ) {
				header("Location:" . base_url());
			}
		} else {
			header("Location:" . base_url());
		}

	}




}
?>