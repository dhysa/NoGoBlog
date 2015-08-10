<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('html');
    }
    
    function getData()
        {
            $this->load->database();
            $q = $this->db->get("user");
            if($q->num_rows() > 0)
            {
                return $q->result();
            }
            return array();
        }
}