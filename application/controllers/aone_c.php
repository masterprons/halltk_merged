<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Aone_c extends CI_Controller {
    
    public function index() {
        $data['title'] = 'HAllTK';
        $data['description'] = 'HAllTK';
        $data['keywords']= 'HAllTK';
        //CSS
        $data['master_css'] = 'master/halltk/css/halltk.css';
        $data['container_css'] = 'cpanels/halltk/container/H_index.css';
        //IMAGES
        $data['halltkImg'] = 'assets/master/halltk/images/';
        //HTML
        $data['left_content'] = 'cpanels/halltk/left/H_lcv1';
        $data['container_content'] = 'cpanels/halltk/container/H_index';
        $data['right_content'] = 'cpanels/halltk/right/H_rcV1';
        $data['footer_content'] = 'cpanels/halltk/footer/H_fcV1';
        
        $this->load->view('master/halltk/halltk', $data);
    }
    
    public function album_animals() {
        $data['title']= 'Album Animals';
        $data['description']= 'Sending image url to img src attribute using Jquery without refresh, How to use jquery to load image on click without refresh';
        $data['keywords']= 'jquery, bootstrap, image url , img src, src';
        //IMAGES
        $data['tpicImg'] = "assets/master/tpic/images/album_animals/";
        
        $this->load->view('master/tpic/album_animals', $data);
    }
    
    public function prsites() {
         $data['title']= 'PRSites - Website and Blog designs of Pranav Shinde';
         $data['description']= 'Website and Blog designs of Web Developer Pranav Shinde in Thane city of Maharashtra State of India.';
         $data['keywords']= 'Pranav Shinde, Web Developer, Web Designer, Web Developer Pranav Shinde, Web designer in thane';

         $this->load->view('master/prcity/prsites', $data);
     }
     
     public function tpic() {
        $data['title'] = 'HAllTK';
        $data['description'] = 'HAllTK';
        $data['keywords']= 'HAllTK';
        //CSS
        $data['master_css'] = 'master/tpic/css/tpic.css';
        $data['container_css'] = 'cpanels/tpic/container/T_index.css';
        //IMAGES
        $data['tpicImages'] = 'assets/master/tpic/images/';
        //HTML
        $data['left_content'] = 'cpanels/tpic/left/T_lcv1';
        $data['container_content'] = 'cpanels/tpic/container/T_index';
        $data['right_content'] = 'cpanels/tpic/right/T_rcV1';
        $data['footer_content'] = 'cpanels/tpic/footer/T_fcV1';

        $this->load->view('master/tpic/tpic', $data);
     }
     
     public function prcity() {
        $data['title'] = 'PRCITY';
        $data['description'] = 'PRCITY';
        $data['keywords']= 'PRCITY';
        //CSS
        $data['master_css'] = 'master/prcity/css/prcity.css';
        //IMAGES
        $data['prcityImages'] = 'assets/master/prcity/images/';
        //HTML
        $data['container'] = 'cpanels/prcity/container/P_index';

        $this->load->view('master/prcity/prcity', $data);
     }

}

