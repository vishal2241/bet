<?php 

class Rol extends CI_Model
{
	
	public $ID_TIPO;
	public $NOMBRE;

	public function __construct()
	{
		parent::__construct();
		$this->ID_TIPO=null;
		$this->NOMBRE=null;
	}


	public function index()
	{
		$query = $this->db->get('tipo_usuario');   
	}




}
?>