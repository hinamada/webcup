<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Liste extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function _construct()
	{
		$this->load->helper('url');
		$this->load->helper('url_helper');
		
	}
	public function index()
	{
		
		$this->load->model('actualite');
		$this->load->model('categorie');
		$suite=" and idCategorie='".$this->input->get('idCateg')."'";
		$data['actualite']=$this->actualite->find($suite);
		$suiteRequete=" and id='".$this->input->get('idCateg')."'";
		$data['categorie']=$this->categorie->findById($suiteRequete);
		$this->load->view('articlesCategorie',$data);
	}
}
