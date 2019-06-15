<?php if(!defined('BASEPATH')) exit('xyz');
class Actualite extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
	}
	public function find($req){
		$query=$this->db->query('select * from actualite a join imageActus ia on ia.idActualite=a.id where 1=1 '.$req);
		return $query->result_array();
	}
	public function findOne($req){
		$query=$this->db->query('select * from actualite where 1=1 '.$req);
		return $query->result();
	}
}