<?php 

class Cuota extends CI_Model
{
	
	public $ID_CUOTA;
	public $ID_PARTIDO;
	public $ID_TIPO;
	public $VALOR;

	public function __construct()
	{
		parent::__construct();
		$this->ID_CUOTA=null;
		$this->ID_PARTIDO=null;
		$this->ID_TIPO=null;
		$this->VALOR=1;
	}

	
	public function getCuota($filter)
	{
		$sql='SELECT * FROM cuota c LEFT JOIN tipo_cuota t ON (c.ID_TIPO=t.ID_TIPO) WHERE';
		switch ($filter) {
			case 'sync':
			$sql.=' c.ID_PARTIDO='.$this->ID_PARTIDO.' ';
			if ($this->ID_TIPO!=null) {
				$sql.=' AND c.ID_TIPO='.$this->ID_TIPO.'';
			}
			break;

			default:
			$sql.=' c.ID_CUOTA='.$this->ID_CUOTA.' ';
			break;
		}

		$query = $this->db->query($sql); 
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
		$query = $this->db->query('UPDATE cuota 
			SET VALOR="'.$this->VALOR.'"
			WHERE ID_PARTIDO='.$this->ID_PARTIDO.'  AND ID_TIPO='.$this->ID_TIPO.' '); 
	}



	public function delete()
	{
		$query = $this->db->query('DELETE FROM cuota 
			WHERE ID_PARTIDO='.$this->ID_PARTIDO.'  AND ID_TIPO='.$this->ID_TIPO.' '); 
	} 

	public function getOddByMatch($id)
	{
		$sql='SELECT c.ID_CUOTA AS CONSE, c.VALOR, t.NOMBRE, t.DESCRIPCION  FROM cuota c LEFT JOIN tipo_cuota t ON (t.ID_TIPO=c.ID_TIPO) WHERE c.ID_PARTIDO ="'.$id.'" AND t.ID_TIPO NOT IN ("9","10","11") ORDER BY t.ID_TIPO';
		$query = $this->db->query($sql);
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return null;
		} 

	}




}
?> 