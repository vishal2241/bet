<?php 


class User extends CI_Model
{
	public $SALDO;
	public $CEDULA;
	public $ID_TIPO;
	public $P_NOMBRE;
	public $S_NOMBRE;
	public $P_APELLIDO;
	public $S_APELLIDO;
	public $EMAIL;
	public $CLAVE;
	public $USUARIO;
	public $FECHA_NAC;
	public $DIRECCION;
	public $TELEFONO;



	public function __construct()
	{
		parent::__construct();
		$this->SALDO  = 0;
		$this->CEDULA = 0;
	}


	public function index()
	{
		$sql='SELECT CEDULA, CONCAT(P_NOMBRE, " ", P_APELLIDO) AS NOMBRE, EMAIL, USUARIO, FECHA_NAC, DIRECCION, TELEFONO, SALDO FROM usuario  ORDER BY NOMBRE ASC ';
		$query = $this->db->query($sql); 

		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return null;
		} 
	}



	public function getByCedula()
	{
		$sql="SELECT * FROM usuario WHERE CEDULA='".$this->CEDULA."' LIMIT 1 ";
		$result=$this->db->query($sql);
		if ($result->num_rows() > 0) {
			return $result->row();
		} else {
			return null;
		} 
	}

	public function getUser($user)
	{
		$result=$this->db->query("SELECT * FROM usuario WHERE (USUARIO='{$user}' OR EMAIL='{$user}')  LIMIT 1");
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
		$sql="UPDATE usuario SET SALDO= (SALDO+".$valor.") WHERE  CEDULA ='".$this->CEDULA."' ";
		$result=$this->db->query($sql);
	}

	public function check($privilegio) 
	{
		$tipo=$this->session->userdata('type');
		if ($this->session->userdata('login')) {// Verifica inicio de sesión
			$sql="SELECT ACCESO FROM permisos WHERE  ID_TIPO ='".$tipo."' AND ID_PRIVILEGIO='".$privilegio."' LIMIT 1";
			$query=$this->db->query($sql);
			if ($query->num_rows() > 0) {
				$permiso=$query->result();
				$acceso=$permiso[0]->ACCESO;
				if ($acceso=='FALSE') {
					$this->session->sess_destroy();
					header("Location:" . base_url());
				}
			} else {
				$this->session->sess_destroy();
				header("Location:" . base_url());
			} 

		} else {
			header("Location:" . base_url());	
		}
	}


	/*public function is_admin()
	{
		if ($this->session->userdata('type')!=1 OR empty($this->session->userdata('type')) ) {
			header("Location:" . base_url());
		}

	}*/

	public function add()
	{

		$this->db->insert('usuario', $this);
	}

	public function update()
	{
		$this->db->where('CEDULA', $this->CEDULA); 
		$this->db->update('usuario', $this);
	}


	public function delete()
	{
		$this->db->where('CEDULA', $this->CEDULA); 
		$this->db->delete('usuario', $this);
	}




}
?>