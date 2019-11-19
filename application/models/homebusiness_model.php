<?php 
	class Homebusiness_model extends CI_Model{
		public function event(){
			$this->db->select('E_ID, E_NAME, PLACE, DATE, TIME');
			$this->db->from('event');
			$query = $this->db->get();
  			return $query->result();
		}

		public function event_enroll($eid,$loginid){
			$data= array('E_ID'=>$eid, 'LOGIN_ID'=>$loginid);
			$this->db->insert('user_event',$data);
		}
	}
?>