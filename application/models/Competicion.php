<?php 

class Competicion extends CI_Model
{
	
	public $ID_COMPETENCIA;
	public $ID_PAIS;
	public $NOMBRE;


	public function __construct()
	{
		parent::__construct();
		$this->ID_COMPETENCIA=null;
		$this->ID_PAIS=null;
		$this->NOMBRE=null;
	}

	public function getCompeticion()
	{
		$query = $this->db->query('SELECT ID_COMPETENCIA FROM competencia WHERE ID_COMPETENCIA='.$this->ID_COMPETENCIA.' '); 
		
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return null;
		} 

	} 
	
	public function add()
	{
			$this->db->insert('competencia', $this);
	}

	public function update($pais=null)
	{
			$this->db->where('ID_COMPETENCIA', $this->ID_COMPETENCIA); 
			$this->db->update('competencia', $this);
	}





}
?>