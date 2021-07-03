<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelas extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_master');
	}

	public function index()
	{
		$data['kelas'] = $this->M_master->tampil_data('tb_kelas')->result();

		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/kelas', $data);
		$this->load->view('templates_admin/footer');
	}

	public function tambah_aksi()
	{
		$nama_kelas = $this->input->post('nama_kelas');

		$data = array(
			'nama_kelas' => $nama_kelas
		);

		$this->M_master->input_data($data, 'tb_kelas');
		redirect('Kelas/index');
	}

	public function edit($id_kelas)
	{
		$where = array('id_kelas' => $id_kelas);
		$data['kelas'] = $this->M_master->edit_data($where, 'tb_kelas')->result();

		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('Kelas/index', $data);
		$this->load->view('templates_admin/footer');
	}

	public function update()
	{
		$id_kelas = $this->input->post('id_kelas');
		$nama_kelas = $this->input->post('nama_kelas');

		$data = array(
			'nama_kelas' => $nama_kelas
		);

		$where = array(
			'id_kelas' => $id_kelas
		);

		$this->M_master->update_data($where, $data, 'tb_kelas');
		redirect('Kelas/index');
	}

	public function hapus($id_kelas)
	{
		$where = array('id_kelas' => $id_kelas);
		$this->M_master->hapus_data($where, 'tb_kelas');
		redirect('kelas/index');
	}

	public function hapus_semua()
	{
		$this->M_master->hapus_semua_data('tb_kelas');
		redirect('Kelas/index');
	}

	public function getUbah()
	{
		echo json_encode($this->M_master->getKelasById($_POST['id']));
	}
}
