<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pegawai extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_master');
	}

	public function index()
	{
		$data['pegawai'] = $this->M_master->tampil_data('tb_pegawai')->result();

		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/pegawai', $data);
		$this->load->view('templates_admin/footer');
	}

	public function tambah_aksi()
	{
		$nama_pegawai = $this->input->post('nama_pegawai');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$level = $this->input->post('level');

		$data = array(
			'nama_pegawai' => $nama_pegawai,
			'username' => $username,
			'password' => $password,
			'level' => $level
		);

		$this->M_master->input_data($data, 'tb_pegawai');
		redirect('Pegawai/index');
	}

	public function edit($id_pegawai)
	{
		$where = array('id_pegawai' => $id_pegawai);
		$data['pegawai'] = $this->M_master->edit_data($where, 'tb_pegawai')->result();

		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/pegawai', $data);
		$this->load->view('templates_admin/footer');
	}

	public function update()
	{
		$id_pegawai = $this->input->post('id_pegawai');
		$nama_pegawai = $this->input->post('nama_pegawai');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$level = $this->input->post('level');

		$data = array(
			'nama_pegawai' => $nama_pegawai,
			'username' => $username,
			'password' => $password,
			'level' => $level
		);

		$where = array(
			'id_pegawai' => $id_pegawai
		);

		$this->M_master->update_data($where, $data, 'tb_pegawai');
		redirect('Pegawai/index');
	}

	public function hapus($id_pegawai)
	{
		$where = array('id_pegawai' => $id_pegawai);
		$this->M_master->hapus_data($where, 'tb_pegawai');
		redirect('Pegawai/index');
	}

	public function hapus_semua()
	{
		$this->M_master->hapus_semua_data('tb_pegawai');
		redirect('Pegawai/index');
	}

	public function getUbah()
	{
		echo json_encode($this->M_master->getPegawaiById($_POST['id']));
	}
}