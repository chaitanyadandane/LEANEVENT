<?php 
	class Contact_model extends CI_Model{
		public function contact_Insert($data){
			$this->db->insert('msg_received',$data);
		}
	}
?>