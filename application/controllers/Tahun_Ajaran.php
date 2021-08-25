<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tahun_Ajaran extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_master');

		if (!$this->session->userdata('level')) {
			redirect('admin');
		}
	}

	public function index()
	{
		$data['tahun_ajaran'] = $this->M_master->tampil_data('tb_tahun_ajaran')->result();

		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/tahun_ajaran', $data);
		$this->load->view('templates_admin/footer');
	}

	public function tambah_aksi()
	{
		$nama_tahun_ajaran = $this->input->post('nama_tahun_ajaran');
		$status = $this->input->post('status');

		$data = array(
			'nama_tahun_ajaran' => $nama_tahun_ajaran,
			'status' => $status
		);

		$this->M_master->input_data($data, 'tb_tahun_ajaran');
		redirect('Tahun_Ajaran');
	}

	public function edit($id_tahun_ajaran)
	{
		$where = array('id_tahun_ajaran' => $id_tahun_ajaran);
		$data['tahun_ajaran'] = $this->M_master->edit_data($where, 'tb_tahun_ajaran')->result();

		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/tahun_ajaran', $data);
		$this->load->view('templates_admin/footer');
	}

	public function update()
	{
		$id_tahun_ajaran = $this->input->post('id_tahun_ajaran');
		$nama_tahun_ajaran = $this->input->post('nama_tahun_ajaran');
		$status = $this->input->post('status');

		$data = array(
			'nama_tahun_ajaran' => $nama_tahun_ajaran,
			'status' => $status
		);

		$where = array(
			'id_tahun_ajaran' => $id_tahun_ajaran
		);

		$this->M_master->update_data($where, $data, 'tb_tahun_ajaran');
		redirect('Tahun_Ajaran');
	}

	// public function ubah_status($id_tahun_ajaran)
	// {
	// 	$where = array('id_tahun_ajaran' => $id_tahun_ajaran);
	// 	$data['tahun_ajaran'] = $this->M_master->edit_data($where, 'tb_tahun_ajaran')->result();

	// 	$this->load->view('templates_admin/header');
	// 	$this->load->view('templates_admin/sidebar');
	// 	$this->load->view('admin/tahun_ajaran', $data);
	// 	$this->load->view('templates_admin/footer');

	// 	$id_tahun_ajarane = $this->input->post('id_tahun_ajaran');
	// 	$status = $this->input->post('status');

	// 	$data = array(
	// 		'status' => $status
	// 	);

	// 	$where = array('id_tahun_ajaran' => $id_tahun_ajarane);
	// 	$this->M_master->change_status($where, $data, 'tb_tahun_ajaran');
	// 	redirect('Tahun_Ajaran/index');
	// }

	public function hapus($id_tahun_ajaran)
	{
		$where = array('id_tahun_ajaran' => $id_tahun_ajaran);
		$this->M_master->hapus_data($where, 'tb_tahun_ajaran');
		redirect('Tahun_Ajaran/index');
	}

	public function hapus_semua()
	{
		$this->M_master->hapus_semua_data('tb_tahun_ajaran');
		redirect('Tahun_Ajaran');
	}

	public function getUbah()
	{
		echo json_encode($this->M_master->getTahunAjaranById($_POST['id']));
	}
}
