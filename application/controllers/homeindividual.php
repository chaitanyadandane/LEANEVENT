<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homeindividual extends CI_Controller {

	function __construct() {
        parent::__construct();
	   $this->load->database();
	   $this->load->model('homeindividual_model');
	   
   }

	public function index()
	{
		$this->load->library('session');
		$loginid = $this->session->flashdata('sessionid');
		$this->session->keep_flashdata('sessionid');
		$eid = $this->input->get('event_id');
		
		if(!empty($eid)){
			$this->homeindividual_model->event_enroll($eid,$loginid);	
		}

		$this->load->view('individual_header_view');
		$this->data['events'] = $this->homeindividual_model->event();
		$this->load->view('homeindividual_view', $this->data);
		$this->load->view('footer_view');
		
	}
}
?>