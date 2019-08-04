<?php 

class Prodi_model extends CI_Model{

    public $id_prodiPrimary;
    public $id_jurusan;
    public $kode_prodi;
    public $nama_prodi;

	public function tampil_data()
	{	

		$this->db->select('
			prodi.id_prodi, 
			prodi.nama_prodi, 
			prodi.kode_prodi, 
			jurusan.nama_jurusan, 
			jurusan.kode_jurusan');
		$this->db->from('prodi');
		$this->db->join('jurusan','jurusan.id_jurusan = prodi.id_jurusan');
		$query = $this->db->get();
		// echo '<pre>';
		// print_r($query->result());
		// echo '</pre>';
		// exit;
		return $query;
	}

	public function insert_data($data, $table)
	{
		$this->db->insert($table, $data);
	}
}