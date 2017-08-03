<?php 

class Cuota2 extends CI_Model
{
	
	public $ID_PARTIDO;
	public $ID_TIPO;
	public $ID_RESULTADO;
	public $ID_CORREDOR;
	public $VALOR;


	public function __construct()
	{
		parent::__construct();
		$VALOR=0;

	}

	public function getCuota()
	{
		$query = $this->db->query('SELECT * FROM cuota2 
			WHERE ID_PARTIDO='.$this->ID_PARTIDO.' 
			AND ID_TIPO='.$this->ID_TIPO.' 
			AND ID_RESULTADO='.$this->ID_RESULTADO.' 
			'); 

		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return null;
		} 

	} 

	public function add()
	{
		$this->db->insert('cuota2', $this);
	}

	public function update()
	{


		$query = $this->db->query('UPDATE  cuota2 
			SET VALOR='.$this->ID_PARTIDO.'
			WHERE ID_PARTIDO='.$this->ID_PARTIDO.' 
			AND ID_TIPO='.$this->ID_TIPO.' 
			AND ID_RESULTADO='.$this->ID_RESULTADO.' 
			AND ID_CORREDOR='.$this->ID_CORREDOR.' 
			'); 
	}






}
?> 