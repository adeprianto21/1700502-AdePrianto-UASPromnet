<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Login_model');
	}

	// proses yang akan di buka saat pertama masuk ke controller
	public function index()
	{
		$this->form_validation->set_rules('nim', 'NIM', 'required|trim', ['required' => 'NIM tidak boleh kosong']);

		if ($this->form_validation->run() == false) {
			$data['judul'] = "Login Retail";
			$this->load->view('header_login', $data);
			$this->load->view('Login');
			$this->load->view('footer_login');
		} else {
			$this->validate();
		}
	}

	public function validate()
	{
		$user = $this->Login_model->search();
	}
}
