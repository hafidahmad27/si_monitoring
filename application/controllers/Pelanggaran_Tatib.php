<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pelanggaran_Tatib extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_master');

		if (!$this->session->userdata('level')) {
			redirect('admin');
		} elseif ($this->session->userdata('level') == 'wali_kelas') {
			redirect('absensi');
		} elseif ($this->session->userdata('level') == 'staff_tu') {
			redirect('jenis_pembayaran');
		} elseif ($this->session->userdata('level') == 'wali_murid') {
			redirect('profil_siswa');
		}
	}

	public function index()
	{
		$data['pelanggaran_tatib'] = $this->M_master->tampil_data('tb_pelanggaran_tatib')->result();

		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/pelanggaran_tatib', $data);
		$this->load->view('templates_admin/footer');
	}

	public function tambah_aksi()
	{
		$bentuk_pelanggaran = $this->input->post('bentuk_pelanggaran');
		$poin = $this->input->post('poin');

		$data = array(
			'bentuk_pelanggaran' => $bentuk_pelanggaran,
			'poin' => $poin
		);

		$this->M_master->input_data($data, 'tb_pelanggaran_tatib');
		redirect('Pelanggaran_Tatib/index');
	}

	public function edit($id_pelanggaran_tatib)
	{
		$where = array('id_pelanggaran_tatib' => $id_pelanggaran_tatib);
		$data['pelanggaran_tatib'] = $this->M_master->edit_data($where, 'tb_pelanggaran_tatib')->result();

		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/pelanggaran_tatib', $data);
		$this->load->view('templates_admin/footer');
	}

	public function update()
	{
		$id_pelanggaran_tatib = $this->input->post('id_pelanggaran_tatib');
		$bentuk_pelanggaran = $this->input->post('bentuk_pelanggaran');
		$poin = $this->input->post('poin');

		$data = array(
			'bentuk_pelanggaran' => $bentuk_pelanggaran,
			'poin' => $poin
		);

		$where = array(
			'id_pelanggaran_tatib' => $id_pelanggaran_tatib
		);

		$this->M_master->update_data($where, $data, 'tb_pelanggaran_tatib');
		redirect('Pelanggaran_Tatib/index');
	}

	public function hapus($id_pelanggaran_tatib)
	{
		$where = array('id_pelanggaran_tatib' => $id_pelanggaran_tatib);
		$this->M_master->hapus_data($where, 'tb_pelanggaran_tatib');
		redirect('Pelanggaran_Tatib/index');
	}

	public function hapus_semua()
	{
		$this->M_master->hapus_semua_data('tb_pelanggaran_tatib');
		redirect('Pelanggaran_Tatib/index');
	}

	public function getUbah()
	{
		echo json_encode($this->M_master->getPelanggaranTatibById($_POST['id']));
	}
}
