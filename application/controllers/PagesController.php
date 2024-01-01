<?php
class PagesController extends CI_Controller {

    public function index() {
       
        $data['meta'] = array('title'=>'Techie World','description'=>'This is techie world','keywords'=>'web development');

        $this->load->view('common/header', $data);
        $this->load->view('pages/home', $data);
        $this->load->view('common/footer', $data);
  }
   public function about() {
        
        $data['meta'] = array('description'=>'','keywords'=>'','title'=>'About Us');

        $this->load->view('coomon/header', $data);
        $this->load->view('pages/about', $data);
        $this->load->view('common/footer', $data);
    }
  
}