<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Template_stage_c extends CI_Controller {

    public function index() {
        //$data['title']= 'Heading';
        //$data['description']= 'Heading';
        //$data['content_panel'] = 'base_setup/webd';
        //$data['keywords']= 'Heading';
        //$data['webd'] = 'base_setup/webd';
        //$data['box_border'] = 'content_panel/box_borders';
        
        $this->load->view('templates/idealT');
    }
    
    
   

}

