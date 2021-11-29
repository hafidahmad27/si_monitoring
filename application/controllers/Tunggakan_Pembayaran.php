<?php
defined('BASEPATH') or exit('No direct script access allowed');

use Dompdf\dompdf;
use Dompdf\Options;
use phpDocumentor\Reflection\Types\This;

class Tunggakan_Pembayaran extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_master');
		$this->load->model('M_transaksi');

		if (!$this->session->userdata('level')) {
			redirect('Admin');
		} elseif ($this->session->userdata('level') == 'guru_bk') {
			redirect('Pelanggaran_Tatib');
		} elseif ($this->session->userdata('level') == 'wali_murid') {
			redirect('Profil_Siswa');
		}
	}

	public function index()
	{
		$data['jenis_pembayaran'] = $this->M_master->tampil_data('tb_jenis_pembayaran')->result();
		$data['siswa'] = $this->M_master->getSiswa();
		$data['tunggakan_pembayaran'] = $this->M_transaksi->getTunggakanPembayaranSiswa();
		$data['pilih_kelas'] = $this->M_master->tampil_data('tb_kelas')->result();
		$data['pilih_tahun_ajaran'] = $this->M_master->tampil_data('tb_tahun_ajaran')->result();
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
		redirect('Tunggakan_Pembayaran/index');
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
		redirect('Tunggakan_Pembayaran/index');
	}

	public function print_pdf2()
	{
		$nama_kelas = $this->input->post('nama_kelas');
		$nama_tahun_ajaran = $this->input->post('nama_tahun_ajaran');

		$data['identitas'] = $this->M_transaksi->Report_Kls($nama_kelas);
		$data['report_tunggakan_pmbyrn'] = $this->M_transaksi->Report_TunggakanPembayaranSiswa($nama_kelas, $nama_tahun_ajaran);

		if (empty($data['r_tahun_ajaran'])) {
			$data['r_tahun_ajaran'] = $nama_tahun_ajaran;
			$data['status'] = 0;
		} else {
			$data['r_tahun_ajaran'] = $this->M_transaksi->Report_TahunAjaran($nama_kelas, $nama_tahun_ajaran);
			$data['status'] = 1;
		}
		$html = $this->load->view('admin/report/report_tunggakan_all', $data, true);

		$options = new Options();
		$options->setIsRemoteEnabled(true);
		$dompdf = new Dompdf($options);
		$dompdf->setPaper('A4', 'Potrait');
		$dompdf->load_html($html);
		$dompdf->render();
		$dompdf->stream('Laporan Tunggakan_' . $nama_tahun_ajaran . '_' . $nama_kelas . '', array("Attachment" => false));
	}

	public function hapus($id_tunggakan_pembayaran)
	{
		$where = array('id_tunggakan_pembayaran' => $id_tunggakan_pembayaran);
		$this->M_transaksi->hapus_data($where, 'tb_tunggakan_pembayaran');
		redirect('Tunggakan_Pembayaran/index');
	}

	public function hapus_semua()
	{
		$this->M_transaksi->hapus_semua_data('tb_tunggakan_pembayaran');
		redirect('Tunggakan_Pembayaran/index');
	}

	public function getUbah()
	{
		echo json_encode($this->M_transaksi->getTunggakanPembayaranById($_POST['id']));
	}
}
