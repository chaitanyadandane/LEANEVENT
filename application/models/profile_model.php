<?php 
	class Profile_model extends CI_Model{

		public function profile($loginId){
			$this->db->select('USERNAME, FNAME, LNAME, EMAIL, PHONE, ADDRESS, CITY, STATE, ZIP');
			$this->db->from('login');
			$where = ['LOGIN_ID'=>$loginId];
			$this->db->where($where);
			$query = $this->db->get();
  			return $query->result();
		}

		public function profile_update($data, $loginid){
			$this->db->where('LOGIN_ID',$loginid);
			$this->db->update('login', $data);
		}
	}
?>