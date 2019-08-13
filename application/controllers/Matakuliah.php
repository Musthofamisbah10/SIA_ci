<?php 

class Matakuliah extends CI_Controller{

	public function index()
	{
		$data['alert'] 	= 'Matakuliah';
		$data['judul']	= 'Matakuliah';
		$data['matakuliah']	= $this->matakuliah_model->getAllMatakuliah();

		$this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('matakuliah/matakuliah', $data);
        $this->load->view('templates_admin/footer');
	}

    public function input()
    {
    
        $data['alert'] = 'Tambah Matakuliah';
        $data['judul'] = 'Tambah Matakuliah';
        $data['prodi'] = $this->prodi_model->getAllProdi();

        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('matakuliah/form_matakuliah', $data);
        $this->load->view('templates_admin/footer');

    }

    public function save()
    {
        //panggil fungsi validation
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            // apabila datanya FALSE akan dikembalikan di method input
            $this->input();
        }else{
            // jika TRUE akan menangkap data dari variabel post
            $kode_matakuliah  = $this->input->post('kode_matakuliah');
            $nama_matakuliah  = $this->input->post('nama_matakuliah');
            $sks              = $this->input->post('sks');
            $semester         = $this->input->post('semester');
            $id_prodi         = $this->input->post('id_prodi');

            // masukan dalam array
            $data = [
                'kode_matakuliah' =>  $kode_matakuliah,
                'nama_matakuliah' =>  $nama_matakuliah,
                'sks'             =>  $sks,
                'semester'        =>  $semester,
                'id_prodi'        =>  $id_prodi
            ];

            // insert ke dalam model_mahasiswa
            $this->matakuliah_model->insert($data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success
                            alert-dismissible
                                fade show" role="alert">
                                  Data Prodi Berhasil Ditambahkan
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>');
            // berhasil akan di kembalikan ke ctrl prodi
            redirect('matakuliah');
        }

    }

    public function _rules()
    {
        // set rules validation
        $this->form_validation->set_rules('kode_matakuliah', 'kode matakuliah', 'required', ['required' => 'kode matakuliah wajib diisi']);
        $this->form_validation->set_rules('nama_matakuliah', 'nama matakuliah', 'required', ['required' => 'nama matakuliah wajib diisi']);
        $this->form_validation->set_rules('sks', 'sks', 'required', ['required' => 'sks wajib diisi']);
        $this->form_validation->set_rules('semester', 'semester', 'required', ['required' => 'semester wajib diisi']);
        $this->form_validation->set_rules('id_prodi', 'nama prodi', 'required', ['required' => 'nama prodi wajib disisi']);
    }

    // detail
    
    public function edit($id)
    {
        $data['alert'] = 'Edit Matakuliah';
        $data['judul'] = 'Edit Matakuliah';

        //ambil data prodi
        $data['prodi'] = $this->prodi_model->getAllProdi();
        //ambil data matakuliah by ID
        $data['matakuliah'] = $this->matakuliah_model->getMatakuliahById($id);

        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('matakuliah/update_matakuliah', $data);
        $this->load->view('templates_admin/footer');   
    }

    public function update()
    {
        // data di ambil dari method post
        $id              = $this->input->post('kode_matakuliah');
        $kode_matakuliah = $this->input->post('kode_matakuliah');
        $nama_matakuliah = $this->input->post('nama_matakuliah');
        $id_prodi        = $this->input->post('id_prodi');

        // data di pindah dalam array
        $data = [
            'kode_matakuliah' => $kode_matakuliah,
            'nama_matakuliah' => $nama_matakuliah,
            'id_prodi'        => $id_prodi
        ];

        // diinputkan ke dalam model matakuliah
        $this->matakuliah_model->update($data, $id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success
                            alert-dismissible
                                fade show" role="alert">
                                  Data Matakuliah Berhasil Ditambahkan
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>');
        //akan dikembalikan ke ctrl matakuliah
        redirect('matakuliah');
    }

    public function delete($id)
    {
        $this->matakuliah_model->delete($id);

        //pesan jika berhasil menghapus
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger
                                alert-dismissible
                                    fade show" role="alert">
                                      Data Matakuliah Berhasil Hapus
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>');
        //redirect ke halaman matakuliah
        redirect('matakuliah');
    }

    public function detile($id)
    {
        $data['alert'] = 'Detail Matakuliah';
        $data['judul'] = 'Detail Matakuliah';
        $data['matakuliah'] = $this->matakuliah_model->getMatakuliahById($id);
        $data['prodi'] = $this->prodi_model->getAllProdi();

        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('matakuliah/detile_matakuliah', $data);
        $this->load->view('templates_admin/footer');
    }
}
