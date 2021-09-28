<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jenis_Pembayaran extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_master');

		if (!$this->session->userdata('level')) {
			redirect('Admin');
		} elseif ($this->session->userdata('level') == 'guru_bk') {
			redirect('Pelanggaran_Tatib');
		} elseif ($this->session->userdata('level') == 'wali_kelas') {
			redirect('Absensi');
		} elseif ($this->session->userdata('level') == 'wali_murid') {
			redirect('Profil_Siswa');
		}
	}

	public function index()
	{
		$data['jenis_pembayaran'] = $this->M_master->tampil_data('tb_jenis_pembayaran')->result();

		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/jenis_pembayaran', $data);
		$this->load->view('templates_admin/footer');
	}

	public function tambah_aksi()
	{
		$jenis_pembayaran = $this->input->post('jenis_pembayaran');

		$data = array(
			'jenis_pembayaran' => $jenis_pembayaran
		);

		$this->M_master->input_data($data, 'tb_jenis_pembayaran');
		redirect('Jenis_Pembayaran/index');
	}

	public function edit($id_jenis_pembayaran)
	{
		$where = array('id_jenis_pembayaran' => $id_jenis_pembayaran);
		$data['jenis_pembayaran'] = $this->M_master->edit_data($where, 'tb_jenis_pembayaran')->result();

		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('Jenis_Pembayaran/index', $data);
		$this->load->view('templates_admin/footer');
	}

	public function update()
	{
		$id_jenis_pembayaran = $this->input->post('id_jenis_pembayaran');
		$jenis_pembayaran = $this->input->post('jenis_pembayaran');

		$data = array(
			'jenis_pembayaran' => $jenis_pembayaran
		);

		$where = array(
			'id_jenis_pembayaran' => $id_jenis_pembayaran
		);

		$this->M_master->update_data($where, $data, 'tb_jenis_pembayaran');
		redirect('Jenis_Pembayaran/index');
	}

	public function hapus($id_jenis_pembayaran)
	{
		$where = array('id_jenis_pembayaran' => $id_jenis_pembayaran);
		$this->M_master->hapus_data($where, 'tb_jenis_pembayaran');
		redirect('Jenis_Pembayaran/index');
	}

	public function hapus_semua()
	{
		$this->M_master->hapus_semua_data('tb_jenis_pembayaran');
		redirect('Jenis_Pembayaran/index');
	}

	public function getUbah()
	{
		echo json_encode($this->M_master->getJenisPembayaranById($_POST['id']));
	}
}
