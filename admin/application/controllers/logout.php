<?php 
    class Logout extends CI_Controller {
        // function __construct() {
        //     parent::__construct();
        //     $this->load->model('loginModel');
        // }
        
        function index(){
            // $loginCheck = $this->session->userdata('adminID');
            // if(!empty($loginCheck)){
            //     $this->session->sess_destroy();
                redirect(base_urL().'login/');
        //     } else {
        //         show_404();
        //     }
        }        
    }
?>