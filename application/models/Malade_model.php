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
            'nomTuteur'=>$this->input->post('nomTuteur'),
            'pays'=>$this->input->post('pays'),
            'symptomes'=>$this->input->post('symptomes')
        );
        $query = $this->db->insert_string('malades',$array) ;
        $this->db->query($query) ; 
    }
}