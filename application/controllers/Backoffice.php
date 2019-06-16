<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Backoffice extends CI_Controller {

	public function __construct()
	{
		parent::__construct();


	}

	public function index() {
	    $articles = $this->actualite->lister() ;
	    $this->load->view("backoffice/list",array('articles'=>$articles)) ;
    }

    public function saveArticle(){
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
