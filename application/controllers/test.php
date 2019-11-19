<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {
	public function index()
	{
		$this->load->view('');
		$this->load->view('button_view');
		$this->load->view('footer_view');
		$this->load->helper('form');
	}
}
?>   