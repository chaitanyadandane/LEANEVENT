<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		$this->form_validation->set_rules('email','Email','required|valid_email');

		if($this->form_validation->run() == false){
		$this->load->view('header_view');
		$this->load->view('home_view');
		$this->load->view('footer_view');
		// $this->load->helper('url'); 
	}else{
		redirect('Home/index');
	}
	}
}
?>