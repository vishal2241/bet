<?php 

class TipoCuota extends CI_Model
{
	
	public $ID_TIPO;
	public $NOMBRE;


	public function __construct()
	{
		parent::__construct();
		$this->ID_TIPO=null;
		$this->NOMBRE=null;
	}


	public function getTipo()
	{
		$query = $this->db->query('SELECT * FROM tipo_cuota WHERE ID_TIPO='.$this->ID_TIPO.' ');
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return null;
		} 

	}


	public function add()
	{
		$this->db->insert('tipo_cuota', $this);
	}

	public function update($pais=null)
	{
		$this->db->where('ID_TIPO', $this->ID_TIPO); 
		$this->db->update('tipo_cuota', $this);
	}
 

}
?>