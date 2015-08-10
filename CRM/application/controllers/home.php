<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('html');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
    }
    
    public function index(){
        $this->load->view('include/header');
        if($this->session->userdata('id'))
           {
             $this->load->view('home/home');
           }
        else
        {
            redirect('login', 'refresh');
        }
        $this->load->view('include/footer');
    }
    
    public function logout()
    {
        $this->session->sess_destroy();
        $this->session->unset_userdata('id');
        redirect('login', 'refresh');
    }

}
        
/* End of file home.php */
/* Location: ./application/controllers/home.php */