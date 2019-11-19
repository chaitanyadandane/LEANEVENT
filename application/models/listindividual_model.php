<?php 
	class Listindividual_model extends CI_Model{
		public function lstindividual(){
			$this->db->select('name, email, phone, e_name, responsible');
			$this->db->from('list_individual');
			$query = $this->db->get();
  			return $query->result();
		}

	}
?>