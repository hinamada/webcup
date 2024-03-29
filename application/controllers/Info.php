<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Info extends CI_Controller {

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
    public function index()
    {
        $this->load->view('welcome_message');
    }

    public function statistique() {
        $this->load->view('statistiques') ;
    }

    public function declarerMalade(){
        $this->form_validation->set_rules('nomMalade', 'Nom du malade', 'required',array(
            'required'=>'Champs Nom malade obligatoire'
        ));
        $this->form_validation->set_rules('nomTuteur','Nom de tuteur','required',array(
            'required'=>'Champs Nom tuteur obligatoire'
        )) ;
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('declarerMalade') ;
        }
        else
        {
            $this->malade->saveMalade() ;
            redirect('/?message=Les autorités arriveront les plutôt possible');
        }

    }
}
