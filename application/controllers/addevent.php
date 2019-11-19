<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Addevent extends CI_Controller {

	function __construct() {
        parent::__construct();
	   $this->load->database();
	   $this->load->model('addevent_model');
	   
   	}

	public function index(){
	$editbtn = $this->input->get('event_id');
	$viewData = array('eventId'=>$editbtn);
	$this->load->view('agent_header_view');
		$this->load->view('addevent_view',$viewData);
		$this->load->view('footer_view');

	$updbtn = $this->input->post('forupdate_btn');
		if(!empty($updbtn)){
			$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		$this->form_validation->set_rules('ename','Event name','required');
		$this->form_validation->set_rules('responsible','Responsible','required');
		$this->form_validation->set_rules('place','Place','required');
		$this->form_validation->set_rules('date','Date','required');
		$this->form_validation->set_rules('time','Time','required');
		$this->form_validation->set_rules('price','Price','required');

	if($this->form_validation->run() == false){
		$this->load->view('agent_header_view');
		$this->load->view('addevent_view');
		$this->load->view('footer_view');
		// $this->load->helper('url'); 
	}else{
		$data = array(
			'E_NAME'=> $this->input->post('ename'),
			'RESPONSIBLE'=> $this->input->post('responsible'),
			'PLACE'=> $this->input->post('place'),
			'DATE'=> $this->input->post('date'),
			'TIME'=> $this->input->post('time'),
			'VALUE_OF_TICKET'=> $this->input->post('price')
		);

	$eventid = $this->input->post('eventId');
	if(!empty($eventid)){
		$this->addevent_model->event_update($data,$eventid);
	}else {
		$this->addevent_model->event_Insert($data);	
	}
	
	redirect('listevent');
	}
}		
}
}
?>