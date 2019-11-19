<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {

	public function index()
	{
		$this->load->view('header_view');
		$this->load->view('signup_view');
		$this->load->view('footer_view');
	}
}
?>