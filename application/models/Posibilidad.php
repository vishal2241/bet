<?php 

class Posibilidad extends CI_Model
{
	
	public $ID_POSIBILIDAD;
	public $ID_TIPO;
	public $NOMBRE;
	public $DESCRIPCION;
	public $VALOR;


	public function __construct()
	{
		parent::__construct();
		$this->ID_POSIBILIDAD=null;
		$this->ID_TIPO=null;
		$this->NOMBRE=null;
		$this->DESCRIPCION=null;
		$this->VALOR=0;
	}


	public function getPosibilidad()
	{
		$query = $this->db->query('SELECT * FROM posibilidad WHERE ID_POSIBILIDAD='.$this->ID_POSIBILIDAD.' ');
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return null;
		} 

	}


	public function add()
	{
		$this->db->insert('posibilidad', $this);
	}

	public function update()
	{
		$this->db->where('ID_POSIBILIDAD', $this->ID_POSIBILIDAD); 
		$this->db->update('posibilidad', $this);
	}


}
?>