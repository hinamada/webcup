<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Backoffice extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->library('session');

	}

	private function check() {
	    if(!$this->session->has_userdata('user')) {
	        redirect('Backoffice/login') ;
        }
    }

	private function verify ($username,$password){
	    if($username=="janedoe" && $password=="janedoe") {
            $this->session->set_userdata('user', 'user');
            return true ; 
        }else {
	        return false ;
        }


    }

    public function logout() {
        $this->session->unset_userdata('user');
        redirect("Backoffice/login") ;
    }

	public function login(){
        $this->form_validation->set_rules('username', 'username', 'required',array(
            "required"=>"Champs Nom d'utilisateur requis"
        ));
        $this->form_validation->set_rules('password', 'password', 'required',array(
            "required"=>"Champs Mot de passe requis"
        ));
        $message = $this->input->get("message","") ;
        if($message!="") {
            $this->load->view("backoffice/login",array(
                "message"=>$message
            )) ;
            return  ;
        }
        if ($this->form_validation->run() == FALSE) {
            $this->load->view("backoffice/login") ;
            return ;
        }else {
            //var_dump($this->input->post("username"));
            //var_dump($this->input->post("password"));
            $value = $this->verify($this->input->post("username"),$this->input->post("password")) ;
            var_dump($value);
            if($value) {
               redirect("Backoffice/index") ;
            }else{
                redirect("Backoffice/login?message=Nom d'utilisateur ou mot de passe incorrect") ;
            }
        }
    }

	public function index() {
	    $this->check()  ;
	    $articles = $this->actualite->lister() ;
	    $this->load->view("backoffice/list",array('articles'=>$articles)) ;
    }

    public function saveArticle(){
	    $this->check();
        $config['upload_path']          = './assets/img/articles';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 100;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;
        $this->form_validation->set_rules('titre', 'titre', 'required',array(
            "required"=>"Champs Titre requis"
        ));
        $this->form_validation->set_rules('contenu', 'contenu', 'required',array(
            "required"=>"Champs Contenu requis"
        ));
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('userfile')) {
            $error = array('error' => $this->upload->display_errors());
        }

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('backoffice/new');
        }
        else
        {
            $this->actualite->save($this->upload->data('file_name'))  ;
            redirect("Backoffice/index") ;
        }
        //   redirect('BackOffice/index') ;


    }

}
