<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Temps_c extends CI_Controller {

    public function index() {
        //$data['title']= 'Heading';
        //$data['description']= 'Heading';
        //$data['content_panel'] = 'base_setup/webd';
        //$data['keywords']= 'Heading';
        //$data['webd'] = 'base_setup/webd';
        //$data['box_border'] = 'content_panel/box_borders';
        
        $this->load->view('templates/idealT');
    }
    
    public function idealT() {
        $data['title']= 'Heading';
        $data['description']= 'Heading';
        $data['keywords']= 'Heading';
        
        $this->load->view('master/templates/idealT');
    }
    
    public function t9ads() {
        $data['title'] = 'HAllTK';
        $data['description'] = 'HAllTK';
        $data['keywords']= 'HAllTK';
        
        $this->load->view('master/templates/t9ads', $data);
    }
    
    public function t3ads() {
        $data['title'] = 'HAllTK';
        $data['description'] = 'HAllTK';
        $data['keywords']= 'HAllTK';
        
        $data['content'] = 'cpanels/templates/container/t3ads';
        $this->load->view('master/templates/t3ads', $data);
    }
    


}

