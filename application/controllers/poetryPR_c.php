<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class PoetryPR_c extends CI_Controller {

    public function index() {
        $data['title'] = 'PRCITY';
        $data['description'] = 'PRCITY';
        $data['keywords']= 'PRCITY';
        //CSS
        $data['master_css'] = 'master/prcity/css/prcity.css';
        //HTML
        $data['imageThis'] = 'http://1.bp.blogspot.com/_CdZU0eWa6UI/TFtzGPvvqyI/AAAAAAAAHYU/NbIE1E07sA8/s640/we_are_all_A_child_of_the_universe.jpg';
        $data['container'] = 'cpanels/prcity/container/poetryPR/poetryPR';
        $data['poem'] = 'cpanels/prcity/container/poetryPR/aaj_kaal';

        $this->load->view('master/prcity/prcity', $data);
    }
    
    

}

