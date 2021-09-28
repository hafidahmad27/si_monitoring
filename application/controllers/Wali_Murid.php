<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Wali_Murid extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_transaksi');

		if (!$this->session->userdata('no_induk')) {
			redirect('Login');
		}
	}

	public function profil_siswa()
	{
		$this->load->view('templates_frontend/header');
		$this->load->view('templates_frontend/sidebar');
		$this->load->view('wali_murid/profil_siswa');
		$this->load->view('templates_frontend/footer');
	}

	public function Info_Catatan_Pelanggaran()
	{
		$data['catatan_pelanggaran'] = $this->M_transaksi->getInfoCatatanPelanggaran();
		$data['get_total_poin'] = $this->M_transaksi->getTotalPoin();

		$this->load->view('templates_frontend/header');
		$this->load->view('templates_frontend/sidebar');
		$this->load->view('wali_murid/info_catatan_pelanggaran', $data);
		$this->load->view('templates_frontend/footer');
	}

	public function Info_Absensi()
	{
		$data['info_absensi'] = $this->M_transaksi->getInfoAbsensi();

		$this->load->view('templates_frontend/header');
		$this->load->view('templates_frontend/sidebar');
		$this->load->view('wali_murid/info_absensi', $data);
		$this->load->view('templates_frontend/footer');
	}

	public function Info_Tunggakan_Pembayaran()
	{
		$data['info_tunggakan_pembayaran'] = $this->M_transaksi->getInfoTunggakanPembayaran();
		$data['get_total_tunggakan'] = $this->M_transaksi->getTotalTunggakan();

		$this->load->view('templates_frontend/header');
		$this->load->view('templates_frontend/sidebar');
		$this->load->view('wali_murid/info_tunggakan_pembayaran', $data);
		$this->load->view('templates_frontend/footer');
	}
}
