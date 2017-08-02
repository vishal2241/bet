<?php 

class Corredor extends CI_Model
{
	
	public $ID_CORREDOR;
	public $NOMBRE;


	public function __construct()
	{
		parent::__construct();
		$this->ID_CORREDOR=null;
		$this->NOMBRE=null;
	}

	public function getCorredor()
	{
		$query = $this->db->query('SELECT * FROM corredor WHERE ID_CORREDOR='.$this->ID_CORREDOR.' '); 
		
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return null;
		} 

	} 

	public function add()
	{

		$this->db->insert('corredor', $this);
	}

	public function update()
	{
		$this->db->where('ID_CORREDOR', $this->ID_CORREDOR); 
		$this->db->update('corredor', $this);
	}





}
?>