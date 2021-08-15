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
					'username' => $row->username,
					'password' => $row->password,
					'level' => $row->level
				);
			}
			$this->session->set_userdata($sess);

			if ($row->level == 'admin') {
				redirect('dashboard');
			} elseif ($row->level == 'guru_bk') {
				redirect('catatan_pelanggaran');
			} elseif ($row->level == 'wali_kelas') {
				redirect('absensi');
			} elseif ($row->level == 'staff_tu') {
				redirect('tunggakan_pembayaran');
			}
		} else {
			$this->session->set_flashdata('info', 'Maaf, username atau password anda salah !');
			redirect('admin');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('admin');
	}
}
