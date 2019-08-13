<?php 

class Matakuliah_model extends CI_Model{

	public function getAllMatakuliah()
	{	
		$this->db->select('matakuliah.*, prodi.id_prodi, prodi.nama_prodi'); //select isi tabel matakuliah
		$this->db->from('matakuliah'); //tabel 1
		$this->db->join('prodi', 'matakuliah.id_prodi = prodi.id_prodi');
		return $this->db->get()->result();
	}

	public function insert($data)
	{
		return $this->db->insert('matakuliah', $data);
	}

	public function getMatakuliahById($id)
	{	
		$this->db->where('kode_matakuliah', $id);
		$result = $this->db->get('matakuliah');

		if ($result->num_rows() > 0) {
			return $result->result();
		}else{
			return FALSE;
		}
	}

	public function update($data, $id)
	{
		$this->db->where('kode_matakuliah', $id);
		return $this->db->update('matakuliah', $data);
	}

	public function delete($id)
	{
		$this->db->where('kode_matakuliah', $id);
		return $this->db->delete('matakuliah');
	}
	
}