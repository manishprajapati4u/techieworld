<?php
class PagesController extends CI_Controller {

    public function index() {
       
        $data['meta'] = array('title'=>'Techie World','description'=>'This is techie world','keywords'=>'web development');

        $this->load->view('common/header', $data);
        $this->load->view('pages/home', $data);
        $this->load->view('common/footer', $data);
  }
   public function about() {
        
        $data['meta'] = array('title'=>'About Us','description'=>'Techie World is best web development company here.','keywords'=>'Web development');

        $this->load->view('common/header', $data);
        $this->load->view('pages/about', $data);
        $this->load->view('common/footer', $data);
    }

    public function contact() {
        
        $data['meta'] = array('title'=>'Contact Us','description'=>'Techie World is best web development company here.','keywords'=>'Web development');

        $this->load->view('common/header', $data);
        $this->load->view('pages/contact', $data);
        $this->load->view('common/footer', $data);
    }

    public function portfolio() {
        
        $data['meta'] = array('title'=>'Contact Us','description'=>'Techie World is best web development company here.','keywords'=>'Web development');

        $this->load->view('common/header', $data);
        $this->load->view('pages/portfolio', $data);
        $this->load->view('common/footer', $data);
    }
  
}