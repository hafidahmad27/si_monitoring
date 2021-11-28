<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Catatan_Pelanggaran extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_master');
		$this->load->model('M_transaksi');

		if (!$this->session->userdata('level')) {
			redirect('Admin');
		} elseif ($this->session->userdata('level') == 'staff_tu') {
			redirect('Jenis_Pembayaran');
		} elseif ($this->session->userdata('level') == 'wali_murid') {
			redirect('Profil_Siswa');
		}
	}

	public function index()
	{
		$data['tindakan'] = $this->M_master->tampil_data('tb_tindakan')->result();
		$data['pelanggaran_tatib'] = $this->M_master->tampil_data('tb_pelanggaran_tatib')->result();
		$data['siswa'] = $this->M_master->getSiswa();
		$data['catatan_pelanggaran'] = $this->M_transaksi->getCatatanPelanggaranSiswa();
		$this->M_transaksi->getStatusTahunAjaran();

		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/catatan_pelanggaran', $data);
		$this->load->view('templates_admin/footer');
	}

	public function tambah_aksi()
	{
		$id_tahun_ajaran = $this->input->post('id_tahun_ajaran');
		$id_siswa = $this->input->post('id_siswa');
		$id_pelanggaran_tatib = $this->input->post('id_pelanggaran_tatib');
		$id_tindakan = $this->input->post('id_tindakan');
		$tanggal = $this->input->post('tanggal');

		$data = array(
			'id_tahun_ajaran' => $id_tahun_ajaran,
			'id_siswa' => $id_siswa,
			'id_pelanggaran_tatib' => $id_pelanggaran_tatib,
			'id_tindakan' => $id_tindakan,
			'tanggal' => $tanggal
		);

		$this->M_transaksi->input_data($data, 'tb_catatan_pelanggaran');
		redirect('Catatan_Pelanggaran/index');
	}

	public function edit($id_catatan_pelanggaran)
	{
		$where = array('id_catatan_pelanggaran' => $id_catatan_pelanggaran);
		$data['catatan_pelanggaran'] = $this->M_transaksi->edit_data($where, 'tb_catatan_pelanggaran')->result();

		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('catatan_pelanggaran/index', $data);
		$this->load->view('templates_admin/footer');
	}

	public function update()
	{
		$id_catatan_pelanggaran = $this->input->post('id_catatan_pelanggaran');
		$id_tahun_ajaran = $this->input->post('id_tahun_ajaran');
		$id_siswa = $this->input->post('id_siswa');
		$id_pelanggaran_tatib = $this->input->post('id_pelanggaran_tatib');
		$id_tindakan = $this->input->post('id_tindakan');
		$tanggal = $this->input->post('tanggal');

		$data = array(
			'id_tahun_ajaran' => $id_tahun_ajaran,
			'id_siswa' => $id_siswa,
			'id_pelanggaran_tatib' => $id_pelanggaran_tatib,
			'id_tindakan' => $id_tindakan,
			'tanggal' => $tanggal
		);

		$where = array(
			'id_catatan_pelanggaran' => $id_catatan_pelanggaran
		);

		$this->M_transaksi->update_data($where, $data, 'tb_catatan_pelanggaran');
		redirect('Catatan_Pelanggaran/index');
	}

	public function hapus($id_catatan_pelanggaran)
	{
		$where = array('id_catatan_pelanggaran' => $id_catatan_pelanggaran);
		$this->M_transaksi->hapus_data($where, 'tb_catatan_pelanggaran');
		redirect('Catatan_Pelanggaran/index');
	}

	public function hapus_semua()
	{
		$this->M_transaksi->hapus_semua_data('tb_catatan_pelanggaran');
		redirect('Catatan_Pelanggaran/index');
	}

	public function getUbah()
	{
		echo json_encode($this->M_transaksi->getCatatanPelanggaranById($_POST['id']));
	}
}
