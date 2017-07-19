<?php 

class Concepto extends CI_Model
{
	
	public $ID_CONCEPTO;
	public $CONCEPTO;
	public $TIPO;
	public $MENSUAL;
	public $FECHA_VEN;

	public function ver($id='')
	{
		$this->ID_CONCEPTO=$id;
		$this->db->where('ID_CONCEPTO', $this->ID_CONCEPTO);
		$query = $this->db->get('conceptos');
		return $query->result();
	}

	public function index()
	{
		$query = $this->db->query('SELECT * FROM conceptos ORDER BY CONCEPTO ASC'); 
		return $query->result();
	} 

	public function mensuales()
	{
		$query = $this->db->query('SELECT * FROM conceptos WHERE MENSUAL="S" AND ID_CONCEPTO!="12" ORDER BY CONCEPTO ASC'); 
		return $query->result();
	} 


	public function ingresos()
	{
		$query = $this->db->query('SELECT * FROM conceptos WHERE TIPO="I" ORDER BY CONCEPTO ASC'); 
		return $query->result();
	} 

	public function gastos()
	{
		$query = $this->db->query('SELECT * FROM conceptos WHERE TIPO="G" ORDER BY CONCEPTO ASC'); 
		return $query->result();
	} 


	public function add($concepto=null)
	{
		if ($concepto!=null) {
			$this->CONCEPTO = $concepto['NOMBRE'];
			$this->TIPO     = $concepto['TIPO'];
			$this->MENSUAL  = $concepto['MENSUAL'];
			$this->FECHA_VEN  = $concepto['FECHA_VEN'];
			$this->db->insert('conceptos', $this);
		}
	}

	public function update($concepto=null)
	{

		if ($concepto!=null) {
			$this->ID_CONCEPTO = $concepto['ID_CONCEPTO'];
			$this->CONCEPTO    = $concepto['NOMBRE'];
			$this->TIPO        = $concepto['TIPO'];
			$this->MENSUAL     = $concepto['MENSUAL'];
			$this->FECHA_VEN  = $concepto['FECHA_VEN'];
			$this->db->where('ID_CONCEPTO', $this->ID_CONCEPTO); 
			$this->db->update('conceptos', $this);
		}
	}

	public function delete($id='')
	{
		if ($id!='') {
			$this->ID_CONCEPTO = $id;
			$this->db->where('ID_CONCEPTO', $this->ID_CONCEPTO);
			$this->db->delete('conceptos');
		}
	}



}
?>