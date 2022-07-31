<?php
class Login extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Login_model');

		$this->load->library('encryption');
	}

	function index()
	{
		$this->load->view('login');
	}

	function aksi_login()
	{
		$username = $this->security->xss_clean($this->input->post('username'));
		$password = $this->security->xss_clean($this->input->post('password'));
		$level = $this->security->xss_clean($this->input->post('level'));

		$data = $this->Login_model->cek_login($username);
		$passb = $this->encryption->decrypt($data['password']);
		if ($password == $passb) {
			if ($data['level'] == 1){
				$data_session = array(
					'username' => $username,
					'status' => "login",
					'sebagai' => "super_admin",
					'nama' => $data['nama'],
					'nik' => $data['nik'],
					'id' => $data['id'],
					'level' => $data['level']
				);
				$this->session->set_userdata($data_session);
				redirect('dashboard');
			} elseif ($data['level'] == 2){
				$data_session = array(
					'username' => $username,
					'status' => "login",
					'sebagai' => "admin",
					'nama' => $data['nama'],
					'nik' => $data['nik'],
					'id' => $data['id'],
					'level' => $data['level']
				);
				$this->session->set_userdata($data_session);
				redirect('dashboard/admin');
			} elseif ($data['level'] == 3){
				$data_session = array(
					'username' => $username,
					'status' => "login",
					'sebagai' => "user",
					'nama' => $data['nama'],
					'nik' => $data['nik'],
					'id' => $data['id'],
					'level' => $data['level']
				);
				$this->session->set_userdata($data_session);
				redirect('dashboard/pengguna');
			}
		} else {
			redirect(base_url(''));
		}
	}

	function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}
