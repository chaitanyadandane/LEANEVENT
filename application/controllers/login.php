<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct() {
        parent::__construct();
	   $this->load->database();
	   $this->load->helper('form');
	   // $this->load->model('login_model');   
   }

	public function index()
	{
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required|min_length[8]|max_length[16]');
		$user = $this->input->post('username');
		$pass = $this->input->post('password');

		$this->load->model('login_model');
		$this->load->library('session');
		$res = $this->login_model->login($user, $pass);

		if($this->form_validation->run() == false){
		$this->load->view('header_view');
		$this->load->view('login_view');
		$this->load->view('footer_view');
		}

		if(empty($res)){
			$this->form_validation->set_message('verifyUser','Incorrect Username or Password');
			return false;		}
		
		$this->session->set_flashdata('sessionid',$res[0]->LOGIN_ID);
		
		if($res[0]->UID_T==1){
			redirect('homeindividual','refresh');
			// return true;
		}
		if($res[0]->UID_T==2){
			redirect('homebusiness','refresh');
			// return true;
		}
		if($res[0]->UID_T==3){
			redirect('homeagent','refresh');
			// return true;
		}

}	
}
?>