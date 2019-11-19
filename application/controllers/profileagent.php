<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profileagent extends CI_Controller {

	function __construct() {
        parent::__construct();
	   $this->load->database();
	   $this->load->model('profile_model');
	   
   }

	public function index()
	{
		$this->load->library('session');
		$loginid = $this->session->flashdata('sessionid');
		$this->session->keep_flashdata('sessionid');
		$this->data['profiles'] = $this->profile_model->profile($loginid);
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		$this->form_validation->set_rules('fname','First Name','required');
		$this->form_validation->set_rules('number','Registration Number','required');
		$this->form_validation->set_rules('email','Email','required|valid_email|regex_match(/^(.+)@([^\.].*)\.([a-z]{2,})$/)');
		$this->form_validation->set_rules('phone','Phone','required|regex_match(/^\(?\s*\d{3}\s*[\)–\.]?\s*[2-9]\d{2}\s*[–\.]\s*\d{4}$/
)');
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required');

		if($this->form_validation->run() == false){
		$this->load->view('agent_header_view');
		$this->load->view('profileagent_view', $this->data);
		$this->load->view('footer_view'); 
	}else{
		$data = array(
			'FNAME'=> $this->input->post('fname'),
			'EMAIL'=> $this->input->post('email'),
			'PHONE'=> $this->input->post('phone'),
			'PASSWORD'=> $this->input->post('password')
		);

	$this->profile_model->profile_update($data,$loginid);
	redirect('profileagent',refresh);
	}
	}

}
?>