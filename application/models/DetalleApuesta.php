<?php 

class DetalleApuesta extends CI_Model
{
	
	public $ID_DETALLE;
	public $ID_APUESTA;
	public $ID_CUOTA;
	public $VALOR;


	

	public function __construct()
	{
		parent::__construct();
		$this->ID_DETALLE = null;
		$this->ID_APUESTA = null;
		$this->ID_CUOTA   = null;
		$this->VALOR      = 0;
	}


	public function getDetalle()
	{
		$query = $this->db->query('SELECT * FROM detalle_apuesta WHERE ID_DETALLE='.$this->ID_DETALLE.' ');
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return null;
		} 

	}


	public function getDetalleByApuesta()
	{
		$sql='SELECT * FROM detalle_apuesta WHERE ID_APUESTA='.$this->ID_APUESTA.' '; 
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return null;
		} 

	}


	public function add()
	{
		$this->db->insert('detalle_apuesta', $this);
	}

	public function update()
	{
		$this->db->where('ID_DETALLE', $this->ID_DETALLE); 
		$this->db->update('detalle_apuesta', $this);
	}

	public function delete()
	{
		$this->db->where('ID_DETALLE', $this->ID_DETALLE); 
		$this->db->delete('detalle_apuesta', $this);
	} 

}
?> 