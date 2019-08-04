<?php 

class Jurusan extends CI_Controller{

	public function index()
	{
		$data['jurusan'] = $this->jurusan_model->tampil_data()->result();
		$data['judul'] = 'Jurusan';
		$data['alert'] = 'Jurusan';
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('jurusan/jurusan', $data);
		$this->load->view('templates_admin/footer_copyR');
		$this->load->view('templates_admin/footer');
	}

	public function input()
	{
		$data = array(
			'id_jurusan'	=> set_value('id_jurusan'),
			'kode_jurusan'	=> set_value('kode_jurusan'),
			'nama_jurusan'	=> set_value('nama_jurusan'),
		);

		$data['judul'] = 'Jurusan';
		$data['alert'] = 'Form Tambah Jurusan';

		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('jurusan/form_jurusan', $data);
		$this->load->view('templates_admin/footer_copyR');
		$this->load->view('templates_admin/footer');
	}

	public function aksi_input()
	{
		// memanggil fungsi _rules() validation form
		$this->_rules();

		// apabila form_validation nya FASLE maka akan dikembalikan ke fungi input()
		// tapi jika apabila TRUE maka akan memasukan data ke database
		if($this->form_validation->run() == FALSE){
			$this->input();
		}else{
			$data = array(
				'kode_jurusan'	=> $this->input->post('kode_jurusan', TRUE),
				'nama_jurusan'	=> $this->input->post('nama_jurusan', TRUE),
			);

			// lalu insert ke database melalui model 'Jurusan_model'
			$this->jurusan_model->input_data($data);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success
							alert-dismissible
								fade show" role="alert">
								  Data Jurusan Berhasil Ditambahkan
								  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								  </button>
								</div>');

			redirect('jurusan');

		}
	}

	public function _rules()
	{
		$this->form_validation->set_rules('kode_jurusan', 'kode jurusan', 'required', ['required' => 'Kode jurusan wajib diisi']);
		$this->form_validation->set_rules('nama_jurusan', 'nama jurusan', 'required', ['required' => 'Nama jurusan wajib diisi']);
	}

	public function update($id)
	{
		$where = array('id_jurusan' => $id);
		$data['jurusan'] = $this->jurusan_model->edit_data($where, 'jurusan')->result();
			$data['judul'] = 'Form Update Jurusan';
		$data['alert'] = 'Form Update Jurusan';

		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('jurusan/update_jurusan', $data);
		$this->load->view('templates_admin/footer_copyR');
		$this->load->view('templates_admin/footer');
	}

	public function update_aksi()
	{
		$id = $this->input->post('id_jurusan');
		$kode_jurusan = $this->input->post('kode_jurusan');
		$nama_jurusan = $this->input->post('nama_jurusan');

		// lalu di masukkan ke variabel data
		$data = array(
			'kode_jurusan'	=> $kode_jurusan,
			'nama_jurusan'	=>	$nama_jurusan
		);


		 // mengubah id menjadi arry
		$where = array('id_jurusan' => $id);

		// memasukan data ke tabel melalui jurusa_model
		$input = $this->jurusan_model->update_data($where, $data, 'jurusan'); //variabel dan nama tabel
		$this->session->set_flashdata('pesan', '<div class="alert alert-success
								alert-dismissible
									fade show" role="alert">
									  Data Jurusan Berhasil Update
									  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									  </button>
									</div>');
		redirect('jurusan');
	}

	public function delete($id)
	{
		// id di tangkap dan di masukan di variabel where
		$where = array('id_jurusan' => $id);
		$data = $this->jurusan_model->hapus_data($where, 'jurusan');

		// redirect ke halamn jurusan
		$this->session->set_flashdata('pesan', '<div class="alert alert-danger
								alert-dismissible
									fade show" role="alert">
									  Data Jurusan Berhasil Hapus
									  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									  </button>
									</div>');
		redirect('jurusan');
	}
}