<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buyfromus1 extends CI_Controller {

	function __construct() {
        parent::__construct();
	   $this->load->database();
	   $this->load->model('buyfromus1_model');
	   
   }

	public function index()
	{
		$eid = $this->input->get('event_id');
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		$this->form_validation->set_rules('email','Email','required|valid_email|regex_match(/(.+)@([^\.].*)\.([a-z]{2,})/)');

		if($this->form_validation->run() == false){
			$this->load->view('header_view');
			$this->data['events'] = $this->buyfromus1_model->event($eid);
			$this->load->view('buyfromus1_view', $this->data);
			$this->load->view('footer_view');
		}else{
		redirect('Buyfromus1/index');
	}	

	}
}
?>