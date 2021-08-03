<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_auth');
	}

	public function index()
	{
		$this->load->view('login');
	}

	public function prosesLogin()
	{
		$user = $this->input->post('user', true);
		$pass = $this->input->post('pass', true);
		$cek = $this->M_auth->cekLogin($user, $pass);

		if ($cek > 0) {
			$data_login = $this->db->get_where('tb_user', array('username' => $user, 'password' => $pass))->row();
			$level = $data_login->level;
			$data = array(
				'user' => $user,
				'level' => $level
			);
			$this->session->set_userdata($data);
			if ($level == 'admin') {
				redirect('admin');
			} elseif ($level == 'guru_bk') {
				redirect('catatan_pelanggaran');
			} elseif ($level == 'wali_kelas') {
				redirect('absensi');
			} elseif ($level == 'staff_tu') {
				redirect('tunggakan_pembayaran');
			}
		} else {
			echo $cek;
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}
}
