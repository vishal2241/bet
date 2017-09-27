<?php 

class Pais extends CI_Model
{
	
	public $ID_PAIS;
	public $NOMBRE;
	public $FOLDER;
	public $FAVORITO;
	public $IMG;


	public function __construct()
	{
		parent::__construct();
		$this->ID_PAIS=null;
		$this->NOMBRE=null;
	}


	public function index()
	{
		$sql='SELECT * FROM pais  ORDER BY NOMBRE ASC ';
		$query = $this->db->query($sql); 

		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return null;
		} 
	}


	public function getPais()
	{
		$sql='SELECT * FROM pais WHERE ID_PAIS='.$this->ID_PAIS.' ';
		$query = $this->db->query($sql); 

		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return null;
		} 

	} 

	public function getPaisByDate($date)
	{
		$sql="SELECT p.ID_PAIS AS ID, p.NOMBRE 
		FROM partido pa 
		LEFT JOIN competencia c ON (pa.ID_COMPETENCIA=c.ID_COMPETENCIA) 
		LEFT JOIN pais p ON (c.ID_PAIS=p.ID_PAIS) 
		WHERE pa.FECHA='".$date."' ";
		if (date("Y-m-d")==$date ) {
			$sql.=" AND pa.HORARIO > '".date("H:i")."' ";
		}
		$sql.=" GROUP BY p.ID_PAIS ORDER BY p.FAVORITO ASC, p.NOMBRE ASC";


		$query = $this->db->query($sql); 

		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return null;
		} 

	} 

	public function add()
	{

		$this->db->insert('pais', $this);
	}

	public function update()
	{
		$this->db->where('ID_PAIS', $this->ID_PAIS); 
		$this->db->update('pais', $this);
	}


	public function delete()
	{
		$this->db->where('ID_PAIS', $this->ID_PAIS); 
		$this->db->delete('pais', $this);
	}


}
?>