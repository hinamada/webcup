<?php if(!defined('BASEPATH')) exit('xyz');
class Categorie extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
	}
	public function find(){
		$query=$this->db->query('select c.*,urlImage from categorie c join imageCategorie ic on ic.idCategorie=c.id');
		return $query->result_array();
	}

}