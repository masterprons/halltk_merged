<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Webd_c extends CI_Controller {

    public function index() {
        $data['title']= 'Heading';
        $data['description']= 'Heading';
        $data['keywords']= 'Heading';
       // $data['content_panel'] = 'projects/webd';
        
        //$data['tab_demo'] = 'content_panel/box_borders';
        //$data['tab_html'] = 'content_panel/box_borders';
       // $data['tab_css'] = 'content_panel/box_borders';
      //  $data['tab_js'] = 'content_panel/box_borders';
      //  $data['tab_guide'] = 'content_panel/box_borders';
        
        $this->load->view('halltk', $data);
    }
    
   

}

