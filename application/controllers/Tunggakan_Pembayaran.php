<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tunggakan_Pembayaran extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_master');
		$this->load->model('M_transaksi');

		if (!$this->session->userdata('level')) {
			redirect('admin');
		} elseif ($this->session->userdata('level') == 'guru_bk') {
			redirect('pelanggaran_tatib');
		} elseif ($this->session->userdata('level') == 'wali_kelas') {
			redirect('absensi');
		} elseif ($this->session->userdata('level') == 'wali_murid') {
			redirect('profil_siswa');
		}
	}

	public function index()
	{
		$data['jenis_pembayaran'] = $this->M_master->tampil_data('tb_jenis_pembayaran')->result();
		$data['siswa'] = $this->M_master->getSiswa();
		$data['tunggakan_pembayaran'] = $this->M_transaksi->getTunggakanPembayaranSiswa();
		$this->M_transaksi->getStatusTahunAjaran();

		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/tunggakan_pembayaran', $data);
		$this->load->view('templates_admin/footer');
	}

	public function tambah_aksi()
	{
		$id_tahun_ajaran = $this->input->post('id_tahun_ajaran');
		$id_siswa = $this->input->post('id_siswa');
		$id_jenis_pembayaran = $this->input->post('id_jenis_pembayaran');
		$bulan = $this->input->post('bulan');
		$tahun = $this->input->post('tahun');
		$biaya_pembayaran = $this->input->post('biaya_pembayaran');
		$keterangan = $this->input->post('keterangan');

		$data = array(
			'id_tahun_ajaran' => $id_tahun_ajaran,
			'id_siswa' => $id_siswa,
			'id_jenis_pembayaran' => $id_jenis_pembayaran,
			'bulan' => $bulan,
			'tahun' => $tahun,
			'biaya_pembayaran' => str_replace(".", "", $biaya_pembayaran),
			'keterangan' => $keterangan
		);

		$this->M_transaksi->input_data($data, 'tb_tunggakan_pembayaran');
		redirect('tunggakan_pembayaran/index');
	}

	public function edit($id_tunggakan_pembayaran)
	{
		$where = array('id_tunggakan_pembayaran' => $id_tunggakan_pembayaran);
		$data['tunggakan_pembayaran'] = $this->M_transaksi->edit_data($where, 'tb_tunggakan_pembayaran')->result();

		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('tunggakan_pembayaran/index', $data);
		$this->load->view('templates_admin/footer');
	}

	public function update()
	{
		$id_tunggakan_pembayaran = $this->input->post('id_tunggakan_pembayaran');
		$id_tahun_ajaran = $this->input->post('id_tahun_ajaran');
		$id_siswa = $this->input->post('id_siswa');
		$id_jenis_pembayaran = $this->input->post('id_jenis_pembayaran');
		$bulan = $this->input->post('bulan');
		$tahun = $this->input->post('tahun');
		$biaya_pembayaran = $this->input->post('biaya_pembayaran');
		$keterangan = $this->input->post('keterangan');

		$data = array(
			'id_tahun_ajaran' => $id_tahun_ajaran,
			'id_siswa' => $id_siswa,
			'id_jenis_pembayaran' => $id_jenis_pembayaran,
			'bulan' => $bulan,
			'tahun' => $tahun,
			'biaya_pembayaran' => str_replace(".", "", $biaya_pembayaran),
			'keterangan' => $keterangan
		);

		$where = array(
			'id_tunggakan_pembayaran' => $id_tunggakan_pembayaran
		);

		$this->M_transaksi->update_data($where, $data, 'tb_tunggakan_pembayaran');
		redirect('tunggakan_pembayaran/index');
	}

	public function hapus($id_tunggakan_pembayaran)
	{
		$where = array('id_tunggakan_pembayaran' => $id_tunggakan_pembayaran);
		$this->M_transaksi->hapus_data($where, 'tb_tunggakan_pembayaran');
		redirect('tunggakan_pembayaran/index');
	}

	public function hapus_semua()
	{
		$this->M_transaksi->hapus_semua_data('tb_tunggakan_pembayaran');
		redirect('tunggakan_pembayaran/index');
	}

	public function getUbah()
	{
		echo json_encode($this->M_transaksi->getTunggakanPembayaranById($_POST['id']));
	}
}
