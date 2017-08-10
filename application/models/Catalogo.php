<?php 

class Catalogo extends CI_Model
{
	
	public $ID_CATALOGO;
	public $ID_PARTIDO;
	public $NOMBRE;
	public $TOTAL_JUGADO;


	public function __construct()
	{
		parent::__construct();
		$this->ID_CATALOGO=null;
		$this->NOMBRE=null;
		$this->TOTAL_JUGADO=0;
		$this->ID_PARTIDO=0;
	}

	public function getCatalogo()
	{
		$query = $this->db->query('SELECT * FROM catalogo_odds WHERE ID_CATALOGO='.$this->ID_CATALOGO.' '); 
		
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return null;
		} 

	} 

	public function add()
	{

		$this->db->insert('catalogo_odds', $this);
	}

	public function update()
	{
		$this->db->where('ID_CATALOGO', $this->ID_CATALOGO); 
		$this->db->update('catalogo_odds', $this);
	}





}
?>