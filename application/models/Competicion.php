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

	public function getByDate($date, $hour)
	{
		$query = $this->db->query('SELECT
			c.ID_COMPETENCIA as ID,
			c.NOMBRE AS COMPE,
			pa.NOMBRE AS PAIS,
			pa.IMG  
			FROM competencia c  
			LEFT JOIN partido p ON (c.ID_COMPETENCIA=p.ID_COMPETENCIA) 
			LEFT JOIN pais pa ON (c.ID_PAIS=pa.ID_PAIS)  
			WHERE p.FECHA="'.$date.'" 
			AND p.HORARIO>"'.$hour.'" 
			GROUP BY c.ID_COMPETENCIA 
			ORDER BY pa.NOMBRE ASC, c.NOMBRE ASC'); 
		
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