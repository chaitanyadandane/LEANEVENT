<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homeagent extends CI_Controller {

	public function index()
	{
		$this->load->library('session');
		$loginid = $this->session->flashdata('sessionid');
		$this->session->keep_flashdata('sessionid');	
		$this->load->view('agent_header_view');
		$this->load->view('homeagent_view');
		$this->load->view('footer_view');


	}
}
?>