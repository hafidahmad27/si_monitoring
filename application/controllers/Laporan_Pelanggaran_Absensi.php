<?php
defined('BASEPATH') or exit('No direct script access allowed');

use Dompdf\Adapter\CPDF;
use Dompdf\Dompdf;
use Dompdf\Exception;

//use Dompdf\dompdf;
use Dompdf\Options;
use phpDocumentor\Reflection\Types\This;

class Laporan_Pelanggaran_Absensi extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
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
		$data['pilih_no_induk'] = $this->M_master->tampil_data('tb_siswa')->result();
		$data['pilih_no_induk'] = $this->M_master->getSiswa();
		$data['pilih_tahun_ajaran'] = $this->M_master->tampil_data('tb_tahun_ajaran')->result();

		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/laporan_pelanggaran_absensi', $data);
		$this->load->view('templates_admin/footer');
	}

	public function print_pdf()
	{
		$no_induk = $this->input->post('no_induk');
		$nama_tahun_ajaran = $this->input->post('nama_tahun_ajaran');

		$data['identitas'] = $this->M_transaksi->Report_Nama_No_Kls($no_induk);
		$data['report_catatan_plg'] = $this->M_transaksi->Report_CatatanPelanggaranBySiswaAndTa($no_induk, $nama_tahun_ajaran);
		$data['report_absensi'] = $this->M_transaksi->Report_AbsensiBySiswaAndTa($no_induk, $nama_tahun_ajaran);

		if (empty($data['r_tahun_ajaran'])) {
			$data['r_tahun_ajaran'] = $nama_tahun_ajaran;
			$data['status'] = 0;
		} else {
			$data['r_tahun_ajaran'] = $this->M_transaksi->Report_TahunAjaran($no_induk, $nama_tahun_ajaran);
			$data['status'] = 1;
		}
		$html = $this->load->view('admin/report/report_pelanggaran_absensi', $data, true);

		$options = new Options();
		$options->setIsRemoteEnabled(true);
		$dompdf = new Dompdf($options);
		$dompdf->setPaper('A4', 'Potrait');
		$dompdf->load_html($html);
		$dompdf->render();
		$dompdf->stream('Laporan Pelanggaran & Absensi_' . $nama_tahun_ajaran . '_' . $no_induk . '', array("Attachment" => false));
	}
}
