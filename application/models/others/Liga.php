<?php 

class Liga extends CI_Model
{
	
	public $ID_LIGA;
	public $NOMBRE;


	public function __construct()
	{
		parent::__construct();
		$this->ID_LIGA=null;
		$this->NOMBRE=null;
	}


	public function getLiga()
	{
		$query = $this->db->query('SELECT * FROM liga WHERE ID_LIGA='.$this->ID_LIGA.' ');
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
		$this->db->where('ID_LIGA', $this->ID_LIGA); 
		$this->db->update('liga', $this);
	}


}
?>