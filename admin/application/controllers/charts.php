<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Charts extends CI_Controller {

	public function index()
	{
		$this->load->view('includes/header');
		$this->load->view('charts');
		$this->load->view('includes/footer');
	}
}
