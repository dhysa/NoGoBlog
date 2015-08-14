<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bootstrap_elements extends CI_Controller {

	public function index()
	{
		$this->load->view('includes/header');
		$this->load->view('bootstrap_elements');
		$this->load->view('includes/footer');
	}
}
