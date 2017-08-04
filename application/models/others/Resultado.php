<?php 

class Resultado extends CI_Model
{
	
	public $ID_RESULTADO;
	public $NOMBRE;


	public function __construct()
	{
		parent::__construct();
		$this->ID_RESULTADO=null;
		$this->NOMBRE=null;
	}


	public function getResultado()
	{
		$query = $this->db->query('SELECT * FROM resultado WHERE ID_RESULTADO='.$this->ID_RESULTADO.' ');
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return null;
		} 

	}

	public function add()
	{
		$this->db->insert('resultado', $this);
	}

	public function update()
	{
		$this->db->where('ID_RESULTADO', $this->ID_RESULTADO); 
		$this->db->update('resultado', $this);
	}


}
?>