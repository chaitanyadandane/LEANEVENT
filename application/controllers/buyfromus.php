<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buyfromus extends CI_Controller {

	function __construct() {
        parent::__construct();
	   $this->load->database();
	   $this->load->model('buyfromus_model');
	   
   }

	public function index()
	{
		
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		$this->form_validation->set_rules('email','Email','required|valid_email|regex_match(/(.+)@([^\.].*)\.([a-z]{2,})/)');

		if($this->form_validation->run() == false){
		$this->load->view('header_view');
		$this->data['events'] = $this->buyfromus_model->event();
		$this->load->view('buyfromus_view', $this->data);
		$this->load->view('footer_view');
	}else{
		redirect('Buyfromus/index');
	}
	}

}
?>