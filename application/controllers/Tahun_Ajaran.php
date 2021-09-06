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
		// $status = $this->input->post('status');

		$data = array(
			'nama_tahun_ajaran' => $nama_tahun_ajaran
			// 'status' => $status
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
		// $status = $this->input->post('status');

		$data = array(
			'nama_tahun_ajaran' => $nama_tahun_ajaran
			// 'status' => $status
		);

		$where = array(
			'id_tahun_ajaran' => $id_tahun_ajaran
		);

		$this->M_master->update_data($where, $data, 'tb_tahun_ajaran');
		redirect('Tahun_Ajaran');
	}

	public function ubah_status()
	{
		$id_tahun_ajaran = $this->input->post('id_tahun_ajaran');
		$status = $this->input->post('status');

		if ($status == '1') {
			$user_status = '0';
		} else {
			$user_status = '1';
		}

		$this->db->where('id_tahun_ajaran', $id_tahun_ajaran);
		$this->db->update('tb_tahun_ajaran', ['status' => $user_status]);

		foreach ($this->M_master->tampil_data('tb_tahun_ajaran')->result_array() as $data) {
			if ($data['id_tahun_ajaran'] != $id_tahun_ajaran) {
				$this->db->where('id_tahun_ajaran', $data['id_tahun_ajaran']);
				$this->db->update('tb_tahun_ajaran', ['status' => 0]);
				echo $data['id_tahun_ajaran'];
			}
		}

		$this->session->set_flashdata('msg', "Berhasil mengubah status tahun ajaran");
		$this->session->set_flashdata('msg_class', 'alert-success');

		redirect('Tahun_Ajaran');
	}

	public function hapus($id_tahun_ajaran)
	{
		$where = array('id_tahun_ajaran' => $id_tahun_ajaran);
		$this->M_master->hapus_data($where, 'tb_tahun_ajaran');
		redirect('Tahun_Ajaran');
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
