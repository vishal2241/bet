<?php 

class Competencia extends CI_Model
{
	
	public $ID_COMPETENCIA;
	public $ID_PAIS;
	public $NOMBRE;


	public function __construct()
	{
		parent::__construct();
		$this->ID_COMPETENCIA=null;
		$this->ID_PAIS=null;
		$this->NOMBRE=null;
	}


	public function getCompe()
	{
		$query = $this->db->query('SELECT * FROM competencia WHERE ID_COMPETENCIA='.$this->ID_COMPETENCIA.' ');
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return null;
		} 

	}

	public function getByDate($date, $hour, $filter)
	{
		$sql='SELECT
		c.ID_COMPETENCIA as ID,
		c.NOMBRE AS COMPE,
		pa.NOMBRE AS PAIS,
		pa.IMG  
		FROM competencia c  
		LEFT JOIN partido p ON (c.ID_COMPETENCIA=p.ID_COMPETENCIA) 
		LEFT JOIN pais pa ON (c.ID_PAIS=pa.ID_PAIS)  
		WHERE p.FECHA="'.$date.'" ';
		#Si la fecha es mayor a la de hoy no se condiciona la hora
		if (date("Y-m-d")==$date ) {
			$sql.=' AND p.HORARIO > "'.$hour.'" ';
		}

		switch ($filter) {
			case 'FAV':
			$sql.=' AND c.FAVORITA LIKE "1" ';
			break;
			case 'FAV2':
			$sql.=' AND c.FAVORITA LIKE "2" ';
			break;
			case 'FAV3':
			$sql.=' AND c.FAVORITA LIKE "2" ';
			break;
			
		}

		$sql.='/*AND p.ESTADO="" 
		AND p.AUTORIZADO="SI"  */
		GROUP BY c.ID_COMPETENCIA 
		ORDER BY pa.NOMBRE ASC, c.NOMBRE ASC';
		$query = $this->db->query($sql); 

		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return null;
		} 

	} 

	public function add()
	{
		$this->db->insert('competencia', $this);
	}

	public function update($pais=null)
	{
		$this->db->where('ID_COMPETENCIA', $this->ID_COMPETENCIA); 
		$this->db->update('competencia', $this);
	}


}
?>