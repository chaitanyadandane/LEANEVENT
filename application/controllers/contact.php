<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	function __construct() {
        parent::__construct();
	   $this->load->database();
	   $this->load->model('contact_model');
	   
   	}

	public function index()
	{

		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		$this->form_validation->set_rules('fname','First name','required');
		$this->form_validation->set_rules('lname','Last name','required');
		$this->form_validation->set_rules('email','Email','required|valid_email|regex_match(/(.+)@([^\.].*)\.([a-z]{2,})/)');
		$this->form_validation->set_rules('topic','Topic','required');
	

	if($this->form_validation->run() == false){
		$this->load->view('header_view');
		$this->load->view('contact_view');
		$this->load->view('footer_view');
		// $this->load->helper('url'); 
	}else{
		$data = array(
			'FNAME'=> $this->input->post('fname'),
			'LNAME'=> $this->input->post('lname'),
			'EMAIL'=> $this->input->post('email'),
			'TOPIC'=> $this->input->post('topic'),
			'MESSAGE'=> $this->input->post('message')
		);

	$this->contact_model->contact_Insert($data);	
	}
}
}
?>