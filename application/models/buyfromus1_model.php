<?php 
	class Buyfromus1_model extends CI_Model{
		public function event($eid){
			$this->db->select('E_ID, E_NAME, VALUE_OF_TICKET');
			$this->db->from('event');
			$where = ['E_ID'=>$eid];
			$this->db->where($where);
			$query = $this->db->get();
  			return $query->result();
		}
	}
?>