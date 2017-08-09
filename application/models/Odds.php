<?php 

class Odds extends CI_Model
{
	
	public $ID_ODD;
	public $ID_CATALOGO;
	public $VALOR;
	public $DESCRIPCION;


	public function __construct()
	{
		parent::__construct();
		$this->ID_ODD=null;
		$this->ID_CATALOGO=null;
		$this->VALOR=0;
		$this->DESCRIPCION=null;
	}


	public function getOdd()
	{
		$query = $this->db->query('SELECT * FROM odds WHERE ID_ODD="'.$this->ID_ODD.'" AND ID_CATALOGO="'.$this->ID_CATALOGO.'" ');
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return null;
		} 

	}


	public function add()
	{
		$this->db->insert('odds', $this);
	}

	public function update()
	{
		$query = $this->db->query('UPDATE odds 
			SET VALOR="'.$this->VALOR.'",
			DESCRIPCION="'.$this->DESCRIPCION.'"
			WHERE ID_ODD="'.$this->ID_ODD.'" AND ID_CATALOGO="'.$this->ID_CATALOGO.'" ');
	}


}
?>