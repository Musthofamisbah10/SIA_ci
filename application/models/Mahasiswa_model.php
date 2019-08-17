<?php

class Mahasiswa_model extends CI_Model{

	public function getAllMahasiswa()
	{
		$this->db->select('mahasiswa.*, prodi.id_prodi');
		$this->db->from('mahasiswa');
		$this->db->join('prodi', 'mahasiswa.id_prodi = prodi.id_prodi');
		$query = $this->db->get();
		return $query->result();
	}
}