<?php 

class Matakuliah_model extends CI_Model{

	public function tampil()
	{	
		$this->db->select(
			'matakuliah.kode_matakuliah,
			matakuliah.id_prodi,
			matakuliah.nama_matakuliah,
			matakuliah.sks,
			matakuliah.semester,

			prodi.id_prodi,
			prodi.nama_prodi'
		);

		$this->db->from('matakuliah'); //tabel 1
		$this->db->join('prodi', 'matakuliah.id_prodi = prodi.id_prodi');
		return $this->db->get();
	}

	public function getProdi()
	{	
		return $this->db->get('prodi');
	}

	
}