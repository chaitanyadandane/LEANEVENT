<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homebusiness extends CI_Controller {

	function __construct() {
        parent::__construct();
	   $this->load->database();
	   $this->load->model('homebusiness_model');
	   
   }

	public function index()
	{
		$this->load->library('session');
		$loginid = $this->session->flashdata('sessionid');
		$this->session->keep_flashdata('sessionid');
		$eid = $this->input->get('event_id');
		
		if(!empty($eid)){
			$this->homebusiness_model->event_enroll($eid,$loginid);	
		}

		$this->load->view('business_header_view');
		$this->data['events'] = $this->homebusiness_model->event();
		$this->load->view('homebusiness_view', $this->data);
		$this->load->view('footer_view');
		
	}
}
?>