<?php 

class Mercado extends CI_Model
{
	
	public $ID_MERCADO;
	public $NOMBRE;


	public function __construct()
	{
		parent::__construct();
		$this->ID_MERCADO=null;
		$this->NOMBRE=null;
	}


	public function getLiga()
	{
		$query = $this->db->query('SELECT * FROM liga WHERE ID_MERCADO='.$this->ID_MERCADO.' ');
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return null;
		} 

	}


	public function add()
	{
		$this->db->insert('liga', $this);
	}

	public function update($pais=null)
	{
		$this->db->where('ID_MERCADO', $this->ID_MERCADO); 
		$this->db->update('liga', $this);
	}


}
?>