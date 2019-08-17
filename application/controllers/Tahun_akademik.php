<?php

class Tahun_akademik extends CI_Controller{

	public function index()
	{
		$data['alert'] = 'Tahun Akademik';
		$data['judul'] = 'Tahun Akademik';
		$data['tahun_akademik'] = $this->tahun_akademik_model->getAllTahunAkademik();

		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('tahun_akademik/tahun_akademik', $data);
		$this->load->view('templates_admin/footer');
	}

	public function input()
	{
		$data = [
			'id_thn_akdm' 	 => set_value('id_thn_akdm'),
			'tahun_akademik' => set_value('tahun_akademik'),
			'status'		 => set_value('status')
		];

		$data['alert'] = 'Input Tahun Akademik';
		$data['judul'] = 'Input Tahun Akademik';

		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('tahun_akademik/create', $data);
		$this->load->view('templates_admin/footer');
	}

	public function saveInput()
	{
		// validation
		$this->_rules();

		if($this->form_validation->run() == FALSE){

			$this->input();

		}else{

			$tahun_akademik = $this->input->post('tahun_akademik', TRUE);
			$semester		= $this->input->post('semester', TRUE);
			$status			= $this->input->post('status', TRUE);

			$data = [
					'tahun_akademik'	=> $tahun_akademik,
					'semester'			=> $semester,
					'status'			=> $status
			];

			// insert ke dalam model tahun akademik
			$this->tahun_akademik_model->insert($data);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success
								alert-dismissible
									fade show" role="alert">
									  Tahun Akademik Berhasil Ditambahkan
									  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									  </button>
									</div>');

			// arahkan ke ctrl th akademik
			redirect('tahun_akademik');
		}
	}

	public function _rules()
	{
		$this->form_validation->set_rules('tahun_akademik', 'tahun akademik', 'required', ['required' => 'Tahun Akademik wajib diisi']);
		$this->form_validation->set_rules('semester', 'semester', 'required', ['required' => 'Semester wajib diisi']);
		$this->form_validation->set_rules('status', 'status', 'required', ['required' => 'Status wajib diisi']);
	}

	public function edit($id)
	{
		$data['alert'] = 'Edit Tahun Akademik';
		$data['judul'] = 'Edit Tahun Akademik';
		$data['tahun_akademik'] = $this->tahun_akademik_model->getAllThAkademikById($id);

		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('tahun_akademik/update', $data);
		$this->load->view('templates_admin/footer');
	}

	public function update()
	{	
		$id 			= $this->input->post('id_th_akdm');
		$tahun_akademik = $this->input->post('tahun_akademik');
		$semester		= $this->input->post('semester');
		$status			= $this->input->post('status');

		$data = [
				'tahun_akademik' => $tahun_akademik,
				'semester'		 => $semester,
				'status'		 => $status
			];


		// insert ke dalam model tahun akademik
		$this->tahun_akademik_model->update($data, $id);
		$this->session->set_flashdata('pesan', '<div class="alert alert-success
								alert-dismissible
									fade show" role="alert">
									  Tahun Akademik Berhasil Diupdate
									  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									  </button>
									</div>');

		// arahkan ke ctrl th akademik
		redirect('tahun_akademik');
	}

	public function delete($id)
	{
		$this->tahun_akademik_model->delete($id);

		// arahkan ke ctrl akdm
		$this->session->set_flashdata('pesan', '<div class="alert alert-danger
								alert-dismissible
									fade show" role="alert">
									  Tahun Akademik Berhasil Hapus
									  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									  </button>
									</div>');
		redirect('tahun_akademik');
	}
}