<?php 

class Odds extends CI_Model
{
	
	public $ID_ODD;
	public $ID_CATALOGO;
	public $ID_PARTIDO;
	public $VALOR;
	public $DESCRIPCION;


	public function __construct()
	{
		parent::__construct();
		$this->ID_ODD=null;
		$this->ID_CATALOGO=null;
		$this->ID_PARTIDO=null;
		$this->VALOR=0;
		$this->DESCRIPCION=null;
	}



	public function getOddByMatch($id)
	{
		$sql='SELECT * FROM catalogo_odds co LEFT JOIN odds o ON (co.ID_CATALOGO=o.ID_CATALOGO) WHERE co.ID_PARTIDO="'.$id.'" ORDER BY co.NOMBRE ASC';
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return null;
		} 

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