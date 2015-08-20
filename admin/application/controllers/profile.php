<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function index()
	{
		$this->load->view('includes/header');
		$this->load->view('profile');
		$this->load->view('includes/footer');
	}
}
