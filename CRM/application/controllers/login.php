<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

 function __construct()
 {
   parent::__construct();
        $this->load->helper('url');
        $this->load->helper('html');
        $this->load->helper(array('form'));
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
 }

 function index()
 {
     $this->load->view('include/header');
     if($this->session->userdata('id'))
           {
             redirect('home/');
           }
        else
        {
            $this->load->view('login/login');
        }  
     $this->load->view('include/footer');
 }
}
        
/* End of file login.php */
/* Location: ./application/controllers/login.php */