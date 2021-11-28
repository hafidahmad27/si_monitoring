<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_auth');
	}

	public function index()
	{
		$this->load->view('login_admin');
	}

	public function prosesLogin()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$cek = $this->M_auth->check_login_pegawai($username, $password);

		if ($cek->num_rows() > 0) {
			foreach ($cek->result() as $row) {
				$sess = array(
					'nama_user' => $row->nama_user,
					'username' => $row->username,
					'password' => $row->password,
					'level' => $row->level
				);
			}
			$this->session->set_userdata($sess);

			if ($row->level == 'admin') {
				redirect('Admin/dashboard');
			} elseif ($row->level == 'guru_bk') {
				redirect('Catatan_Pelanggaran');
			} elseif ($row->level == 'staff_tu') {
				redirect('Tunggakan_Pembayaran');
			}
		} else {
			$this->session->set_flashdata('info', 'Maaf, username atau password anda salah !');
			redirect('Admin');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('Admin');
	}

	public function dashboard()
	{
		if (!$this->session->userdata('level')) {
			redirect('Admin');
		}

		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/dashboard');
		$this->load->view('templates_admin/footer');
	}
}
