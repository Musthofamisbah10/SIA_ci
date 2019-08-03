<?php 

class Matakuliah_model extends CI_Model{

	public function tampil()
	{
		return $this->db->get('matakuliah');
	}
}