<?php 

class User_model extends CI_Model{

	public function ambil_data($id)
	{

		// ambil data
		$this->db->where('username', $id);
		return $this->db->get('user')->row();
	}
}