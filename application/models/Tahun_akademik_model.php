<?php

class Tahun_akademik_model extends CI_Model{

	public function getAllTahunAkademik()
	{
		$query = $this->db->get('tahun_akademik');
		//select * from tahun_akademik
		return $query->result();
	}

	public function insert($data)
	{
		return $this->db->insert('tahun_akademik', $data);
	}

	// ambil ID
	public function getAllThAkademikById($id)
	{
		$this->db->where('id_th_akdm', $id);
		$query = $this->db->get('tahun_akademik');
		return $query->row();
	}

	public function update($data, $id)
	{	
		$this->db->where('id_th_akdm', $id);
		return $this->db->update('tahun_akademik', $data);
	}	

	public function delete($id)
	{	
		$query = $this->db->delete('tahun_akademik');
		return $query;
	}
}