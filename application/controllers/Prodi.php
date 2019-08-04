<?php 

class Prodi extends CI_Controller{

	public function index()
	{
		$data['alert'] = 'Program Studi';
		$data['judul'] = 'Program Studi';
		$data['prodi'] = $this->prodi_model->tampil_data('prodi')->result();

		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('prodi/prodi', $data);
		$this->load->view('templates_admin/footer');
	}

	public function input()
	{
		$data['alert'] = 'Tambah Program Studi';
		$data['judul'] = 'Tambah Program Studi';
		// karna mengambil nama jurusan dari tabel jurusan
		$data['jurusan'] = $this->jurusan_model->tampil_data('jurusan')->result();

		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('prodi/form_prodi', $data);
		$this->load->view('templates_admin/footer');
	}

	public function input_aksi()
	{
		//pemanggilan fungsi validation
		$this->_rules();

		if($this->form_validation->run() == FALSE){
			// Apabila datanya FALSE akan di kembalikan ke fungsi Input()
			$this->input();
		}else{
			// apabila data nya TRUE maka akan di inputkan datanya ke tabel
			$kode_prodi 	= $this->input->post('kode_prodi');
			$nama_prodi 	= $this->input->post('nama_prodi');
			$nama_jurusan	= $this->input->post('nama_jurusan');

			// data di tampung dalam array
			$data = array(
				'kode_prodi'		=>	$kode_prodi,
				'nama_prodi'		=>	$nama_prodi,
				'nama_jurusan'		=>	$nama_jurusan
			);

			// insert data ke tabel
			$this->prodi_model->insert_data($data, 'prodi');
			$this->session->set_flashdata('pesan', '<div class="alert alert-success
							alert-dismissible
								fade show" role="alert">
								  Data Prodi Berhasil Ditambahkan
								  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								  </button>
								</div>');

			// berhasil akan di kembalikan ke ctrl prodi
			redirect('prodi');
		}
	}

	public function _rules()
	{
		$this->form_validation->set_rules('kode_prodi', 'kode prodi', 'required', ['required' => 'Kode prodi wajib diisi']);
		$this->form_validation->set_rules('nama_prodi', 'nama prodi', 'required', ['required' => 'Nama prodi wajib diisi']);
		$this->form_validation->set_rules('nama_jurusan', 'nama jurusan', 'required', ['required' => 'Nama jurusan wajib diisi']);
	}

}