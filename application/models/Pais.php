<?php 

class Pais extends CI_Model
{
	
	public $ID_PAIS;
	public $NOMBRE;
	public $MARKET_COUNT;
	public $IMG;


	public function __construct()
	{
		parent::__construct();
		$this->ID_PAIS=null;
		$this->NOMBRE=null;
		$this->MARKET_COUNT=null;
		$this->IMG=null;
	}

	public function getPais()
	{
		$query = $this->db->query('SELECT * FROM pais WHERE ID_PAIS="'.$this->ID_PAIS.'" '); 
		
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return null;
		} 

	} 

	public function regiones()
	{
		$query = $this->db->query('INSERT INTO region (ID_REGION) 
			SELECT c.REGION FROM competencia c WHERE 
			c.REGION NOT IN (SELECT r.ID_REGION FROM region r) GROUP BY c.REGION'); 
	}

	public function add()
	{

		$this->db->insert('pais', $this);
	}

	public function update()
	{
		$this->db->where('ID_PAIS', $this->ID_PAIS); 
		$this->db->update('pais', $this);
	}


}
?>