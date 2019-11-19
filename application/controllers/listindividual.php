<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Listindividual extends CI_Controller {

	function __construct() {
        parent::__construct();
	   $this->load->database();
	   $this->load->model('listindividual_model');
	   
   }

	public function index()
	{
		
		$this->load->view('agent_header_view');
		$this->data['lstindividuals'] = $this->listindividual_model->lstindividual();
		$this->load->view('listindividual_view', $this->data);
		$this->load->view('footer_view');
	}

}
?>