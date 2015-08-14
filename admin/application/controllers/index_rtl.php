<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index_rtl extends CI_Controller {

	public function index()
	{
		$this->load->view('includes/header');
		$this->load->view('index_rtl');
		$this->load->view('includes/footer');
	}
}
