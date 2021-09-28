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
		$this->load->view('login_wali_murid');
	}

	public function prosesLogin()
	{
		$no_induk = $this->input->post('no_induk');
		$tanggal_lahir = $this->input->post('tanggal_lahir');
		$cek = $this->M_auth->check_login_siswa($no_induk, $tanggal_lahir);

		if ($cek->num_rows() > 0) {
			foreach ($cek->result() as $row) {
				$sess = array(
					'no_induk' => $row->no_induk,
					'tanggal_lahir' => $row->tanggal_lahir,
					'nama_lengkap' => $row->nama_lengkap,
					'nama_kelas' => $row->nama_kelas,
					'jenis_kelamin' => $row->jenis_kelamin,
					'tempat_lahir' => $row->tempat_lahir,
					'tanggal_lahir' => $row->tanggal_lahir,
					'alamat' => $row->alamat,
					'no_telp' => $row->no_telp
				);
			}
			$this->session->set_userdata($sess);
			redirect('Wali_Murid/profil_siswa');
		} else {
			$this->session->set_flashdata('info', 'Maaf, username atau password anda salah !');
			redirect('Login');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('Login');
	}
}
