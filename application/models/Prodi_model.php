<?php 

class Prodi_model extends CI_Model{


	public function tampil_data()
	{
		$this->db->select(
			'prodi.id_prodi,
			prodi.kode_prodi,
			prodi.nama_prodi,

			jurusan.id_jurusan,
			jurusan.nama_jurusan'
		);

		$this->db->from('prodi'); //tabel 1
		$this->db->join('jurusan', 'prodi.id_jurusan = jurusan.id_jurusan', 'left');
		return $this->db->get();
	}

	public function getJurusan()
	{
 		return $this->db->get('jurusan');
	}

	public function insert_data($data)
	{
		$this->db->insert('prodi', $data);
	}

}