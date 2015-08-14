<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forms extends CI_Controller {

	public function index()
	{
		$this->load->view('includes/header');
		$this->load->view('forms');
		$this->load->view('includes/footer');
	}
}
