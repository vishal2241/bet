<?php 

class Pais extends CI_Model
{
	
	public $ID_PAIS;
	public $NOMBRE;


	public function __construct()
	{
		parent::__construct();
		$this->ID_PAIS=null;
		$this->NOMBRE=null;
	}

	public function getPais()
	{
		$query = $this->db->query('SELECT * FROM pais WHERE ID_PAIS='.$this->ID_PAIS.' '); 
		
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return null;
		} 

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