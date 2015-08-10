<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();

class User extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('html');
    }
    
    function index(){
        $this->load->view('include/header');
        if($this->session->userdata('id'))
        {
             $this->load->view('user/admin');
        }
        else
        {
            redirect('login', 'refresh');
        }
        $this->load->view('include/footer');
    }
    
    function changePass(){
        if($this->session->userdata('id'))
            {
            $this->load->helper("form");
            $this->load->library('form_validation');
            $this->form_validation->set_rules('oldPass', 'Old Password', 'trim|required|xss_clean|md5');
            $this->form_validation->set_rules('newPass', 'New Password', 'trim|required|min_length[5]|max_length[12]|xss_clean|md5');
            $this->form_validation->set_rules('newPassw', 'Re-type New Password', 'required|trim|min_length[5]|max_length[12]|matches[newPass]|md5');
            
            if($this->form_validation->run()!= true)
                {
                $this->load->view('include/header');
                $this->load->view('user/user');
                $this->load->view('include/footer');
                }
            else{
                if(isset($_POST['changePass'])){
                    if ($this->session->userdata('password')==$_POST['oldPass'])
                    {
                        $data = array(
                           'user_pass' => $_POST['newPass']
                        );
                        $this->db->where('user_id', $this->session->userdata('id'));
                        $this->db->update('user', $data);
                        $this->session->set_userdata('password', $_POST['newPass']);
                        echo'
                        <script>
                            alert("Success!! Password has changed!")
                            window.location = "'.base_url().'home";
                        </script>';
                    }
                    else{ echo'
                    <script>
                        alert("Error!! Password not changed!")
                    </script>';
                    $this->load->view('include/header');
                    $this->load->view('user/user');
                    $this->load->view('include/footer');
                    }
                }
            }
            }
        else
        {
            redirect('login', 'refresh');
        }
    }
    
    function add(){
        $this->load->view('include/header');
        if($this->session->userdata('id'))
        {
            $this->load->helper("form");
            $this->load->library('form_validation');
            $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]|max_length[12]|xss_clean');
            $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]|max_length[12]|xss_clean|md5');
            $this->form_validation->set_rules('password2', 'Re-type Password', 'required|trim|min_length[5]|max_length[12]|matches[password]|md5');
            $this->form_validation->set_rules('status', 'Status Admin', 'required|callback_check_stat');
            if($this->form_validation->run()!= true)
            {
                $this->load->view('user/add');
            }
            else
            {
                if(isset($_POST['add'])){
                    $data = array(
                        'user_name' => $_POST['username'],
                        'user_pass' => $_POST['password'],
                        'user_stat' => $_POST['status']
                    );
                    $this->db->insert('user', $data);
                    echo'
                        <script>
                            alert("Success!!")
                            window.location = "'.base_url().'user/details";
                        </script>';
                }
                else
                {
                echo'
                    <script>
                        alert("Error!!")
                    </script>';
                    $this->load->view('include/header');
                    $this->load->view('user/add');
                    $this->load->view('include/footer');
                }
            }
        }
        else
        {
            redirect('login', 'refresh');
        }
        $this->load->view('include/footer');
    }
    
    function check_stat($stat)
    {
        if($stat=="none"){
            $this->form_validation->set_message('check_stat', 'The Status field is required.');
            return false;
        }
        else
        {
        // User picked something.
            return true;
        }
    }
    
    function details()
    {
        if($this->session->userdata('id'))
            {
            $this->load->view('include/header');
            $this->load->model('admin');
            $data['records'] = $this->admin->getData();
            $this->load->view('user/details', $data);
            $this->load->view('include/footer');
            }
        else
        {
            redirect('login', 'refresh');
        }
    }
    
    function resetPass(){
        if($this->session->userdata('id'))
            {
            $this->load->helper("form");
            $this->load->library('form_validation');
            $this->form_validation->set_rules('newPass', 'New Password', 'trim|required|min_length[5]|max_length[12]|xss_clean|md5');
            $this->form_validation->set_rules('newPassw', 'Re-type New Password', 'required|trim|min_length[5]|max_length[12]|matches[newPass]|md5');
            
            if($this->form_validation->run()!= true)
                {
                $this->load->view('include/header');
                $this->load->view('user/resetPass');
                $this->load->view('include/footer');
                }
            else{
                if(isset($_POST['resetPass'])){
                        $data = array(
                           'user_pass' => $_POST['newPass']
                        );
                        $id = mysql_real_escape_string($this->uri->segment(3));
                        $this->db->where('user_id', $id);
                        $this->db->update('user', $data);
                        echo'
                        <script>
                            alert("Success!! Password has changed!")
                            window.location = "'.base_url().'user/details";
                        </script>';
                    }
                    else{ echo'
                    <script>
                        alert("Error!! Password not changed!")
                    </script>';
                    $this->load->view('include/header');
                    $this->load->view('user/resetPass');
                    $this->load->view('include/footer');
                    }
                }
            }
        else
        {
            redirect('login', 'refresh');
        }
    }
    
    function delete()
    {
        if($this->session->userdata('id'))
            {
            $this->load->view('include/header');
            $id = mysql_real_escape_string($this->uri->segment(3));
            $this->db->delete('user', array('user_id' => $id));
            $this->load->view('include/footer');
            redirect(base_url().'user/details');
            }
        else
        {
            redirect('login', 'refresh');
        }
    }
}
    