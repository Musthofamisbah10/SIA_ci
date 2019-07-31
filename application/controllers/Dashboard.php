<?php 

 class Dashboard extends CI_Controller{
 	
 	public function index()
 	{
 		$data =	$this->user_model->ambil_data($this->session->userdata['username']);
 		
 		$data = array(
 			'username' 	=> $data->username,
 			'level'		=> $data->level,
  			 );

 		$data['judul'] = 'Dashboard';
 		$this->load->view('templates_admin/header', $data);
 		$this->load->view('templates_admin/sidebar');
 		$this->load->view('admin/dashboard', $data);
 		$this->load->view('templates_admin/footer_copyR');
 		$this->load->view('templates_admin/footer');
 	}
 }