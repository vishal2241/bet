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

	
	public function getCuota()
	{
		$sql='SELECT * FROM cuota WHERE ID_PARTIDO='.$this->ID_PARTIDO.' ';
		if ($this->ID_TIPO!=null) {
			$sql.=' AND ID_TIPO='.$this->ID_TIPO.'';
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

	public function index($from, $to)
	{
		$query = $this->db->query('SELECT 
			p.ID_PARTIDO,
			p.LOCAL,
			p.HORARIO,
			p.VISITANTE,
			co.NOMBRE as TORNEO,
			pa.NOMBRE as PAIS,
			Round(SUM(c._1)/count(*),2) AS _1,
			Round(SUM(c._X)/count(*),2) AS _X,
			Round(SUM(c._2)/count(*),2) AS _2,
			Round(SUM(c.GG)/count(*),2) AS GG,
			Round(SUM(c.NG)/count(*),2) AS NG,
			Round(SUM(c.OVER_25)/count(*),2) AS OVER_25,
			Round(SUM(c.UNDER_25)/count(*),2) AS UNDER_25
			FROM cuota c 
			LEFT JOIN partido p ON (c.ID_PARTIDO=p.ID_PARTIDO) 
			LEFT JOIN competencia co ON (co.ID_COMPETENCIA=p.ID_COMPETENCIA)  
			LEFT JOIN pais pa ON (co.ID_PAIS=pa.ID_PAIS) 
			WHERE p.HORARIO>"'.date("H:i:s").'"
			AND p.FECHA BETWEEN "'.$from.'" AND "'.$to.'"  
			ORDER BY p.HORARIO ASC'); 
		
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return null;
		} 

	} 




}
?> 