<?php 

class Privilegio extends CI_Model
{
	
	public $ID_PRIVILEGIO;
	public $NOMBRE;

	public function __construct()
	{
		parent::__construct();
		$this->ID_PRIVILEGIO=null;
		$this->NOMBRE=null;
	}


	public function index()
	{
		$query = $this->db->get('privilegio');   
	}




}
?>