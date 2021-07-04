<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tindakan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_master');
	}

	public function index()
	{
		$data['tindakan'] = $this->M_master->tampil_data('tb_tindakan')->result();

		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/tindakan', $data);
		$this->load->view('templates_admin/footer');
	}

	public function tambah_aksi()
	{
		$nama_tindakan = $this->input->post('nama_tindakan');

		$data = array(
			'nama_tindakan' => $nama_tindakan
		);

		$this->M_master->input_data($data, 'tb_tindakan');
		redirect('tindakan/index');
	}

	public function edit($id_tindakan)
	{
		$where = array('id_tindakan' => $id_tindakan);
		$data['tindakan'] = $this->M_master->edit_data($where, 'tb_tindakan')->result();

		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/tindakan', $data);
		$this->load->view('templates_admin/footer');
	}

	public function update()
	{
		$id_tindakan = $this->input->post('id_tindakan');
		$nama_tindakan = $this->input->post('nama_tindakan');

		$data = array(
			'nama_tindakan' => $nama_tindakan
		);

		$where = array(
			'id_tindakan' => $id_tindakan
		);

		$this->M_master->update_data($where, $data, 'tb_tindakan');
		redirect('tindakan/index');
	}

	public function hapus($id_tindakan)
	{
		$where = array('id_tindakan' => $id_tindakan);
		$this->M_master->hapus_data($where, 'tb_tindakan');
		redirect('tindakan/index');
	}

	public function hapus_semua()
	{
		$this->M_master->hapus_semua_data('tb_tindakan');
		redirect('tindakan/index');
	}

	public function getUbah()
	{
		echo json_encode($this->M_master->getTindakanById($_POST['id']));
	}
}
