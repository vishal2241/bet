<?php 

class Apuesta extends CI_Model
{
	
	public $ID_APUESTA;
	public $FECHA;
	public $NRO_EVENTOS;
	public $ID_USER;
	public $VALOR;
	public $GANANCIA;
	public $ESTADO;

	public function __construct()
	{
		parent::__construct();
		$this->ID_APUESTA  = null;
		$this->FECHA       = null;
		$this->NRO_EVENTOS = null;
		$this->ID_USER     = null;
		$this->VALOR       = 0;
		$this->GANANCIA    = null;
		$this->ESTADO      = null;
	}


	public function getEquipo()
	{
		$query = $this->db->query('SELECT * FROM apuesta WHERE ID_APUESTA='.$this->ID_APUESTA.' ');
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return null;
		} 

	}

	public function add()
	{
		$this->db->insert('apuesta', $this);
	}

	public function update()
	{
		$this->db->where('ID_APUESTA', $this->ID_APUESTA); 
		$this->db->update('apuesta', $this);
	}

	public function delete()
	{
		$this->db->where('ID_APUESTA', $this->ID_APUESTA); 
		$this->db->delete('apuesta', $this);
	} 

}
?> 