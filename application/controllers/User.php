<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_master');

		if (!$this->session->userdata('level')) {
			redirect('Admin');
		} elseif ($this->session->userdata('level') == 'guru_bk') {
			redirect('Pelanggaran_Tatib');
		} elseif ($this->session->userdata('level') == 'staff_tu') {
			redirect('Jenis_Pembayaran');
		} elseif ($this->session->userdata('level') == 'wali_murid') {
			redirect('Profil_Siswa');
		}
	}

	public function index()
	{
		$data['user'] = $this->M_master->getUser();

		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/user', $data);
		$this->load->view('templates_admin/footer');
	}

	public function tambah_aksi()
	{
		$nama_user = $this->input->post('nama_user');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$level = $this->input->post('level');

		$data = array(
			'nama_user' => $nama_user,
			'username' => $username,
			'password' => $password,
			'level' => $level
		);

		$this->M_master->input_data($data, 'tb_user');
		redirect('User/index');
	}

	public function edit($id_user)
	{
		$where = array('id_user' => $id_user);
		$data['user'] = $this->M_master->edit_data($where, 'tb_user')->result();

		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/user', $data);
		$this->load->view('templates_admin/footer');
	}

	public function update()
	{
		$id_user = $this->input->post('id_user');
		$nama_user = $this->input->post('nama_user');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$level = $this->input->post('level');

		$data = array(
			'nama_user' => $nama_user,
			'username' => $username,
			'password' => $password,
			'level' => $level
		);

		$where = array(
			'id_user' => $id_user
		);

		$this->M_master->update_data($where, $data, 'tb_user');
		redirect('User/index');
	}

	public function hapus($id_user)
	{
		$where = array('id_user' => $id_user);
		$this->M_master->hapus_data($where, 'tb_user');
		redirect('User/index');
	}

	public function hapus_semua()
	{
		$this->M_master->hapus_semua_data('tb_user');
		redirect('User/index');
	}

	public function getUbah()
	{
		echo json_encode($this->M_master->getuserById($_POST['id']));
	}
}
