<?php 

class Mahasiswa extends CI_Controller{

	public function index()
	{
		$data['alert'] = 'Mahasiswa';
		$data['judul'] = 'Mahasiswa';
		$data['mahasiswa'] = $this->mahasiswa_model->getAllMahasiswa();

		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('mahasiswa/mahasiswa', $data);
		$this->load->view('templates_admin/footer');		
	}

	public function input()
	{
		$data['alert'] = 'Input Mahasiswa';
		$data['judul'] = 'Input Mahasiswa';
		$data['mahasiswa'] = $this->mahasiswa_model->getAllMatakuliah();

		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('mahasiswa/mahasiswa', $data);
		$this->load->view('templates_admin/footer');
	}

	public function save()
	{
			
	}
}