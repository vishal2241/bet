<?php 

class Cuota extends CI_Model
{
	
	public $ID_CUOTA;
	public $ID_PARTIDO;
	public $_1;
	public $_X;
	public $_2;
	public $_1X;
	public $_2X;
	public $_12;
	public $NG;
	public $GG;
	public $OVER_25;
	public $UNDER_25;
	public $FECHA_CUOTA;
	public $BOOKMARKER;

	public function __construct()
	{
		parent::__construct();
		$this->ID_CUOTA=null;
		$this->_1=0;
		$this->_X=0;
		$this->_2=0;
		$this->_1X=0;
		$this->_2X=0;
		$this->_12=0;
		$this->NG=0;
		$this->GG=0;
		$this->OVER_25=0;
		$this->UNDER_25=0;
		$this->ID_PARTIDO=null;
		$this->FECHA_CUOTA=null;
		$this->BOOKMARKER=null;
	}

	
	public function getCuota()
	{
		$query = $this->db->query('SELECT * FROM cuota WHERE ID_PARTIDO='.$this->ID_PARTIDO.' '); 
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return null;
		} 

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


	

	public function add()
	{
		$this->db->insert('cuota', $this);
	}

	public function update()
	{
		$this->db->where('ID_CUOTA', $this->ID_PARTIDO); 
		$this->db->update('cuota', $this);
	}


	public function getTipos()
	{
		$query = $this->db->query('SELECT * FROM tipo_cuota  ORDER BY ID_TIPO ASC '); 
		
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return null;
		} 
	}

	public function delete()
	{
		$this->db->where('ID_PARTIDO', $this->ID_PARTIDO); 
		$this->db->delete('cuota');
	} 


}
?> 