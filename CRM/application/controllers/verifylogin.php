<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class VerifyLogin extends CI_Controller {

 function __construct()
 {
   parent::__construct();
     $this->load->model('user','',TRUE);
     $this->load->helper('url');
     $this->load->helper('html');
 }

 function index()
 {
   //This method will have the credentials validation
   $this->load->library('form_validation');

   $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
   $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|md5|callback_check_database');

   if($this->form_validation->run() == FALSE)
   {
     //Field validation failed.  User redirected to login page
       $this->load->view('include/header');
       $this->load->view('login/login');
       $this->load->view('include/footer');
   }
   else
   {
     //Go to private area
       redirect('home', 'refresh');
   }

 }

 function check_database($password)
 {
   //Field validation succeeded.  Validate against database
   $username = $this->input->post('username');

   //query the database
   $result = $this->user->login($username, $password);

   if($result)
   {
     foreach($result as $row)
     {
       $sess_array = array(
         'id' => $row->user_id,
         'username' => $row->user_name,
         'password' => $row->user_pass,
         'stat' => $row->user_stat
       );
     }
     $this->session->set_userdata($sess_array);
     return TRUE;
   }
   else
   {
     $this->form_validation->set_message('check_database', '<p style="font-size: 12px; color: #FF0000;">Invalid username or password</p>');
     return false;
   }
 }
}
?>