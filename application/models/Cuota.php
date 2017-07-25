<?php 

class Cuota extends CI_Model
{
	
	public $ID_CUOTA;
	public $ID_PARTIDO;
	public $_1;
	public $_X;
	public $_2;
	public $_1X;
	public $_2X;
	public $_12;
	public $NG;
	public $GG;
	public $OVER_25;
	public $UNDER_25;
	public $FECHA_CUOTA;

	public function __construct()
	{
		parent::__construct();
		$this->ID_CUOTA=null;
		$this->_1=0;
		$this->_X=0;
		$this->_2=0;
		$this->_1X=0;
		$this->_2X=0;
		$this->_12=0;
		$this->NG=0;
		$this->GG=0;
		$this->OVER_25=0;
		$this->UNDER_25=0;
		$this->ID_PARTIDO=null;
		$this->FECHA_CUOTA=null;
	}

	
	public function getPartido()
	{
		$query = $this->db->query('SELECT ID_PARTIDO FROM cuota WHERE ID_PARTIDO='.$this->ID_PARTIDO.' '); 
		
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return null;
		} 

	} 

	

	public function add()
	{
		$this->db->insert('cuota', $this);
	}

	public function update()
	{
		$this->db->where('ID_CUOTA', $this->ID_PARTIDO); 
		$this->db->update('cuota', $this);
	}


	public function getTipos()
	{
		$query = $this->db->query('SELECT * FROM tipo_cuota  ORDER BY ID_TIPO ASC '); 
		
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return null;
		} 
	}

	public function delete()
	{
		$this->db->where('ID_PARTIDO', $this->ID_PARTIDO); 
		$this->db->delete('cuota');
	} 


}
?> 