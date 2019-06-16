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


    public function lister() {
        $query = $this->db->get('actualite') ;
        return $query->result() ;
    }

    public function save($filename) {
	    $date = new \DateTime("2024/06/06 00:00") ;
	    var_dump($date->format("Y-m-d")) ;
	    $data = array(
	        "titre"=>$this->input->post("titre"),
            "contenu"=>$this->input->post("contenu"),
            "datePublication"=>$date->format("Y-m-d"),
            "urlVideo"=>$this->input->post("urlVideo"),
            "idCategorie"=>$this->input->post("idCategorie")
        ) ;

        $this->db->insert("actualite",$data) ;
        $next = $this->db->query("SHOW TABLE STATUS LIKE 'actualite'");
        $next = $next->row(0);
        $next->Auto_increment;
        $value = array(
            "idActualite"=>$next->Auto_increment-1 ,
            "urlImage"=>$filename
        );
        $this->db->insert("imageActus",$value) ;

        //  var_dump($filename) ;

    }
}