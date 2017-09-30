<?php 

class Equipo extends CI_Model
{
	
	public $ID_EQUIPO;
	public $NOMBRE;
	public $ID_PAIS;
	public $IMG;


	public function __construct()
	{
		parent::__construct();
		$this->ID_EQUIPO=null;
		$this->NOMBRE=null;
		$this->ID_PAIS=null;
	}



	public function index()
	{
		$query = $this->db->query('SELECT e.*, p.NOMBRE AS PAIS, p.IMG AS IMG_PAIS  FROM equipo e LEFT JOIN pais p ON (p.ID_PAIS=e.ID_PAIS) WHERE e.ID_PAIS IS NOT NULL ORDER BY p.NOMBRE ASC, e.NOMBRE ASC');
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return null;
		} 

	}

	public function getEquipo()
	{
		$sql='SELECT e.*, p.NOMBRE AS PAIS, p.IMG AS IMG_PAIS  FROM equipo e LEFT JOIN pais p ON (p.ID_PAIS=e.ID_PAIS)   WHERE ID_EQUIPO='.$this->ID_EQUIPO.' ';
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return null;
		} 

	}

	public function add()
	{
		$this->db->insert('equipo', $this);
	}

	public function update()
	{
		//	$query = $this->db->query('UPDATE equipo set ID_PAIS='.$this->ID_PAIS.' WHERE ID_EQUIPO='.$this->ID_EQUIPO.' AND ID_PAIS IS NULL ');
		$this->db->where('ID_EQUIPO', $this->ID_EQUIPO); 
		$this->db->update('equipo', $this);
	}

	public function updateCounty()
	{
		$query = $this->db->query('UPDATE equipo set ID_PAIS='.$this->ID_PAIS.' WHERE ID_EQUIPO='.$this->ID_EQUIPO.' AND ID_PAIS IS NULL ');
		
	}

	public function delete()
	{
		$this->db->where('ID_EQUIPO', $this->ID_EQUIPO); 
		$this->db->delete('equipo', $this);
	}


}
?>