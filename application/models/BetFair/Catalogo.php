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
		$query = $this->db->query('SELECT * FROM catalogo_odds WHERE ID_CATALOGO='.$this->ID_CATALOGO.' AND ID_PARTIDO="'.$this->ID_PARTIDO.'"  '); 
		
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return null;
		} 

	} 


	public function getCatalogoByPartido($from, $to)
	{
		$query = $this->db->query('SELECT * FROM catalogo_odds c LEFT JOIN partido p ON (c.ID_PARTIDO=p.ID_PARTIDO) WHERE  c.ID_PARTIDO!="0" AND p.FECHA BETWEEN "'.$from.'" and  "'.$to.'"'); 
		
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
		$query = $this->db->query('UPDATE catalogo_odds SET NOMBRE="'.$this->NOMBRE.'", TOTAL_JUGADO="'.$this->TOTAL_JUGADO.'"  WHERE ID_CATALOGO='.$this->ID_CATALOGO.' AND ID_PARTIDO="'.$this->ID_PARTIDO.'"  '); 
	}





}
?>