<?php 

class Auth extends CI_Controller{

	public function index()
	{
		$data['judul'] = 'Login Admin';
		$this->load->view('templates_admin/header', $data);
		$this->load->view('admin/login');
		$this->load->view('templates_admin/footer');
	}

	public function proses_login()
	{
		// sett validation
		$this->form_validation->set_rules('username', 'username', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');

		if( $this->form_validation->run() == FALSE){

			$data['judul'] = 'Login Admin';
			$this->load->view('templates_admin/header', $data);
			$this->load->view('admin/login');
			$this->load->view('templates_admin/footer');
		}else{
			// memngambil nilai post
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			// membuat variabel inputan
			$user = $username;
			$pass = MD5($password);

			// pengecekan ke database dengan model
			$cek = $this->login_model->cek_login($user, $pass);

			if( $cek->num_rows() > 0 ){

				// session
				foreach( $cek->result() as $ck ){
					$sess_data['username'] = $ck->username;
					$sess_data['email'] = $ck->email;
					$sess_data['level'] = $ck->level;

					//pemanggilan session data
					$this->session->set_userdata($sess_data);

					echo var_dump($session);
				}

				if( $sess_data['level'] == 'admin'){
					redirect('dashboard');
				}else{
					$this->session->set_flashdata('pesan', '<div class="alert alert-danger
							alert-dismissible
								fade show" role="alert">
								  Username dan atau Password <strong>Salah</strong>.
								  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
								    <span aria-hidden="true">&times;</span>
								  </button>
								</div>');
					redirect('auth');
				}
			}else{
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible
							fade show" role="alert">
							  Username dan atau Password <strong>Salah</strong>.
							  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
							    <span aria-hidden="true">&times;</span>
							  </button>
							</div>');
				redirect('auth');
			}
		}
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('auth');
	}
}