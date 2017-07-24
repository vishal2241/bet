<?php 

class Pais extends CI_Model
{
	
	public $ID_PAIS;
	public $NOMBRE;


	public function index()
	{
		$query = $this->db->query('SELECT * FROM pais ORDER BY pais ASC'); 
		return $query->result();
	} 

	
	public function add($pais=null)
	{
		if ($pais!=null) {
			$this->ID_PAIS = $pais['ID_PAIS'];
			$this->NOMBRE     = $pais['NOMBRE'];
			$this->db->insert('pais', $this);
		}
	}

	public function update($pais=null)
	{

		if ($pais!=null) {
			$this->ID_PAIS = $pais['ID_PAIS'];
			$this->NOMBRE     = $pais['NOMBRE'];
			$this->db->where('ID_PAIS', $this->ID_PAIS); 
			$this->db->update('pais', $this);
		}
	}

	public function delete($id='')
	{
		if ($id!='') {
			$this->ID_PAIS = $id;
			$this->db->where('ID_PAIS', $this->ID_PAIS);
			$this->db->delete('pais');
		}
	}



}
?>