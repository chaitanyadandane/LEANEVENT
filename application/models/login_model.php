<?php 
	class Login_model extends CI_Model{
		public function login($user, $pass){
			$this->db->select('*');
			$this->db->from('login');
			$where = ['USERNAME ='=>$user,'PASSWORD ='=>$pass];
			$this->db->where($where);
			$query = $this->db->get();
			return $query->result();

			// if($query->num_rows()==1){
			// 	return true;
			// }else{
			// 	return false;
			// }
		}
	}
?>