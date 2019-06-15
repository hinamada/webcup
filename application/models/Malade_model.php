<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 15/06/2019
 * Time: 22:19
 */

class Malade_model extends CI_Model
{

    public function saveMalade(){
        $array = array(
            'nomMalade'=>$this->input->post('nomMalade'),
            'tuteur'=>$this->input->post('nomTuteur'),
            'pays'=>$this->input->post('pays'),
            'symptomes'=>$this->input->post('symptomes'),
            'latitude'=>$this->input->post('lat'),
            'longitude'=>$this->input->post('lng')
        );
        //$query = $this->db->insert_string('malades',$array) ;
        //$this->db->query($query) ;
        $this->db->insert('malades',$array) ;
    }
}