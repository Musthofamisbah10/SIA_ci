<?php 

class Jurusan extends CI_Controller{

	public function index()
	{
		$this->load->view('templates_admin/header');
		$this->load->view('admin/jurusan');

	}
}