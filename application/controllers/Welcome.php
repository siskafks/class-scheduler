<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		$this->load->view('templates_user/header');
		$this->load->view('user/dashboard');
		$this->load->view('templates_user/footer');
	}
}
