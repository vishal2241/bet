<?php 

class Competicion extends CI_Model
{
	
	public $ID_COMPETENCIA;
	public $ID_PAIS;
	public $NOMBRE;


	public function index()
	{
		$query = $this->db->query('SELECT * FROM competencia  '); 
		return $query->result();
	} 

	
	public function add($data=null)
	{
		if ($data!=null) {
			$this->ID_COMPETENCIA = $data['ID_COMPETENCIA'];
			$this->ID_PAIS = $data['ID_PAIS'];
			$this->NOMBRE     = $data['NOMBRE'];
			$this->db->insert('competencia', $this);
		}
	}

	public function update($pais=null)
	{

		if ($pais!=null) {
			$this->ID_COMPETENCIA = $data['ID_COMPETENCIA'];
			$this->ID_PAIS = $data['ID_PAIS'];
			$this->NOMBRE     = $data['NOMBRE'];
			$this->db->where('ID_COMPETENCIA', $this->ID_PAIS); 
			$this->db->update('competencia', $this);
		}
	}

	public function delete($id='')
	{
		if ($id!='') {
			$this->ID_PAIS = $id;
			$this->db->where('ID_COMPETENCIA', $this->ID_PAIS);
			$this->db->delete('competencia');
		}
	}



}
?>