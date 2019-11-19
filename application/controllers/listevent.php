<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Listevent extends CI_Controller {

	function __construct() {
        parent::__construct();
	   $this->load->database();
	   $this->load->model('listevent_model');
	   
   }

	public function index()
	{
		$eid = $this->input->get('event_id');
		
		if(!empty($eid)){
			$this->listevent_model->event_del($eid);
			// redirect('listevent','refresh');
		}
		
		$this->load->view('header_view');
		$this->data['events'] = $this->listevent_model->event();
		$this->load->view('listevent_view', $this->data);
		$this->load->view('footer_view');
		// if($this->form_validation->run() == false){
		// $this->load->view('header_view');
		// $this->load->view('buyfromus_view');
		// $this->load->view('footer_view');
		// $this->load->helper('url'); 
	// }else{
	// 	redirect('Buyfromus/index');
	// }
	}

}
?>