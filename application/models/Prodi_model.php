<?php 

class Prodi_model extends CI_Model{

	// get tabel prodi
	public function getAllProdi()
	{
		$this->db->select('prodi.id_prodi, prodi.id_jurusan, prodi.kode_prodi, prodi.nama_prodi, jurusan.nama_jurusan'); // select 2 tbael
		$this->db->from('prodi'); //tabel 1
		$this->db->join('jurusan', 'prodi.id_jurusan = jurusan.id_jurusan'); //join 2 tabel yang sama dari 2 tabel
		return $this->db->get()->result(); //tampilkan
	}

	public function insert($data)
	{
		return $this->db->insert('prodi', $data);
	}

	// ambil ID
	public function getProdiById($id)
	{
		$this->db->where('id_prodi', $id);
		return $this->db->get('prodi')->row();
	}

	public function update($data, $id)
	{
		$this->db->where('id_prodi', $id);
		return $this->db->update('prodi', $data);
	}

	public function delete($id)
	{
		$this->db->where('id_prodi', $id);
		return $this->db->delete('prodi');
	}
}