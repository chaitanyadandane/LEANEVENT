<?php 
	class Addevent_model extends CI_Model{
		public function event_Insert($data){
			$this->db->insert('event',$data);
		}

		public function event_update($data,$eventid){
			$this->db->where('E_ID',$eventid);
			$this->db->update('event',$data);
		}
	}
?>