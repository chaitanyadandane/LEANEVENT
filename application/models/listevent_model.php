<?php 
	class Listevent_model extends CI_Model{
		public function event(){
			$this->db->select('E_ID, E_NAME, PLACE, DATE, TIME');
			$this->db->from('event');
			$query = $this->db->get();
  			return $query->result();
		}

		public function event_del($eid){
			$data= array('E_ID'=>$eid);
			$this->db->delete('event',$data);
		}
	}
?>