<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registeragent extends CI_Controller {

	public function index()
	{
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		$this->form_validation->set_rules('email','Email','required|valid_email|regex_match(/^(.+)@([^\.].*)\.([a-z]{2,})$/)');
		$this->form_validation->set_rules('password','Password','required|min_length[8]|max_length[16]');
		$this->form_validation->set_rules('fname','First name','required');
		$this->form_validation->set_rules('lname','Last name','required');
		$this->form_validation->set_rules('addresss','Address','required');
		$this->form_validation->set_rules('town','Town','required');
		$this->form_validation->set_rules('state','State','required');
		$this->form_validation->set_rules('zip','Postal code','required|max_length[15]');

		if($this->form_validation->run() == false){
			$this->load->view('registeragent_view');
	}else{
		redirect('Home/index');
	}
	}
}
?>