<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bootstrap_grid extends CI_Controller {

	public function index()
	{
		$this->load->view('includes/header');
		$this->load->view('bootstrap_grid');
		$this->load->view('includes/footer');
	}
}
