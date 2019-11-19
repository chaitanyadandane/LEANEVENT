<?php 
	class Buyfromus_model extends CI_Model{
		public function event(){
			$this->db->select('E_ID, E_NAME, VALUE_OF_TICKET');
			$this->db->from('event');
			$query = $this->db->get();
  			return $query->result();
		}
	}
?>