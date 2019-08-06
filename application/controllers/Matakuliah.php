<?php 

class Matakuliah extends CI_Controller{

	public function index()
	{
		$data['alert'] 	= 'Matakuliah';
		$data['judul']	= 'Matakuliah';
		$data['matakuliah']	= $this->matakuliah_model->tampil('matakuliah')->result();

		$this->load->view('templates_admin/header', $data);
    $this->load->view('templates_admin/sidebar');
    $this->load->view('matakuliah/index', $data);
    $this->load->view('templates_admin/footer');
	}

  public function input()
  {
    $data['alert'] = 'Tambah Matakuliah';
    $data['judul'] = 'Tambah Matakuliah';
    $data['prodi'] = $this->prodi_model->tampil('prodi')->result();

    $this->load->view('templates_admin/header', $data);
    $this->load->view('templates_admin/sidebar');
    $this->load->view('matakuliah/form_matakuliah', $data);
    $this->load->view('templates_admin/footer');
  }

  public function input_aksi()
  {

  }
}
