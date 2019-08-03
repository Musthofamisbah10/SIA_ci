<?php 

class Prodi_model extends CI_Model{

	public function tampil_data()
	{
		return $this->db->get('prodi');
	}

	public function insert_data($data, $table)
	{
		$this->db->insert($table, $data);
	}
}