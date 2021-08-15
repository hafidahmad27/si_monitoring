<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Absensi extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_master');
		$this->load->model('M_transaksi');

		if (!$this->session->userdata('level')) {
			redirect('admin');
		}
	}

	public function index()
	{
		if ($this->session->userdata('level') == 'admin') {
			$data['siswa'] = $this->M_master->tampil_data('tb_siswa')->result();
		} elseif ($this->session->userdata('level') == 'wali_kelas') {
			$data['siswaByKelas'] = $this->M_transaksi->getSiswaByKelas();
		}
		$data['absensi'] = $this->M_transaksi->getAbsensiSiswa();

		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/absensi', $data);
		$this->load->view('templates_admin/footer');
	}

	public function tambah_aksi()
	{
		$id_siswa = $this->input->post('id_siswa');
		$tanggal_absensi = $this->input->post('tanggal_absensi');
		$alasan = $this->input->post('alasan');
		$keterangan = $this->input->post('keterangan');

		$data = array(
			'id_siswa' => $id_siswa,
			'tanggal_absensi' => $tanggal_absensi,
			'alasan' => $alasan,
			'keterangan' => $keterangan
		);

		$this->M_transaksi->input_data($data, 'tb_absensi');
		redirect('Absensi/index');
	}

	public function edit($id_absensi)
	{
		$where = array('id_absensi' => $id_absensi);
		$data['absensi'] = $this->M_transaksi->edit_data($where, 'tb_absensi')->result();

		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('absensi/index', $data);
		$this->load->view('templates_admin/footer');
	}

	public function update()
	{
		$id_absensi = $this->input->post('id_absensi');
		$id_siswa = $this->input->post('id_siswa');
		$tanggal_absensi = $this->input->post('tanggal_absensi');
		$alasan = $this->input->post('alasan');
		$keterangan = $this->input->post('keterangan');

		$data = array(
			'id_siswa' => $id_siswa,
			'tanggal_absensi' => $tanggal_absensi,
			'alasan' => $alasan,
			'keterangan' => $keterangan
		);

		$where = array(
			'id_absensi' => $id_absensi
		);

		$this->M_transaksi->update_data($where, $data, 'tb_absensi');
		redirect('Absensi/index');
	}

	public function hapus($id_absensi)
	{
		$where = array('id_absensi' => $id_absensi);
		$this->M_transaksi->hapus_data($where, 'tb_absensi');
		redirect('Absensi/index');
	}

	public function hapus_semua()
	{
		$this->M_transaksi->hapus_semua_data('tb_absensi');
		redirect('Absensi/index');
	}

	public function getUbah()
	{
		echo json_encode($this->M_transaksi->getAbsensiById($_POST['id']));
	}
}
