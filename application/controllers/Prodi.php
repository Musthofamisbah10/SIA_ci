<?php 

class Prodi extends CI_Controller{

	public function index()
	{

		$data['alert'] = 'Program Studi';
		$data['judul'] = 'Program Studi';
		$data['prodi'] = $this->prodi_model->getAllProdi();

		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('prodi/prodi', $data);
		$this->load->view('templates_admin/footer');
	}

	public function input()
	{
		$data['alert'] = 'Tambah Program Studi';
		$data['judul'] = 'Tambah Program Studi';

		// get nama jurusan menggunakan degan jurusan model
		$data['jurusan'] = $this->jurusan_model->getAllJurusan();
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

			// apabila data dengan method post
			$kode_prodi = $this->input->post('kode_prodi');
			$nama_prodi = $this->input->post('nama_prodi');
			$id_jurusan	= $this->input->post('id_jurusan');

			// data di tampung dalam array
			$data = array(
					'kode_prodi' =>	$kode_prodi,
					'nama_prodi' =>	$nama_prodi,
					'id_jurusan' =>	$id_jurusan

				);

			// insert data ke tabel
			$this->prodi_model->insert($data);
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
		// set rules validation
		$this->form_validation->set_rules('kode_prodi', 'kode prodi', 'required', ['required' => 'Kode prodi wajib diisi']);
		$this->form_validation->set_rules('nama_prodi', 'nama prodi', 'required', ['required' => 'Nama prodi wajib diisi']);
		$this->form_validation->set_rules('id_jurusan', 'nama jurusan', 'required', ['required' => 'Nama jurusan wajib diisi']);
	} 

	public function edit($id)
	{
		$data['alert']	= 'Edit Data Prodi';
		$data['judul']	= 'Edit Data Prodi';

		// ambil nama jurusan
		$data['jurusan'] = $this->jurusan_model->getAllJurusan();
		// ambil id Prodi
		$data['prodi'] = $this->prodi_model->getProdiById($id);

		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('prodi/update_prodi', $data);
		$this->load->view('templates_admin/footer');
	}

	public function update()
	{
		// apabila data nya TRUE maka akan di inputkan datanya ke tabel
		$id 			= $this->input->post('id_prodi'); //id prodi yang di hidden
		$kode_prodi 	= $this->input->post('kode_prodi');
		$nama_prodi 	= $this->input->post('nama_prodi');
		$id_jurusan		= $this->input->post('id_jurusan');

		// data di tampung dalam array
		$data = array(
			'kode_prodi'	=>	$kode_prodi,
			'nama_prodi'	=>	$nama_prodi,
			'id_jurusan'	=>	$id_jurusan
		);

		// insert data ke tabel
		$data = $this->prodi_model->update($data, $id);
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

	public function delete($id)
	{
		$this->prodi_model->delete($id);

		// redirect ke halamn jurusan
		$this->session->set_flashdata('pesan', '<div class="alert alert-danger
								alert-dismissible
									fade show" role="alert">
									  Data Prodi Berhasil Hapus
									  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									  </button>
									</div>');
		redirect('prodi');
	}

}