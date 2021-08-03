<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_master');
	}

	public function index()
	{
		$data['kelas'] = $this->M_master->tampil_data('tb_kelas')->result();
		$data['siswa'] = $this->M_master->getSiswa();

		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/siswa', $data);
		$this->load->view('templates_admin/footer');
	}

	public function tambah_aksi()
	{
		$no_induk = $this->input->post('no_induk');
		$nama_lengkap = $this->input->post('nama_lengkap');
		$id_kelas = $this->input->post('id_kelas');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$tempat_lahir = $this->input->post('tempat_lahir');
		$tanggal_lahir = $this->input->post('tanggal_lahir');
		$alamat = $this->input->post('alamat');
		$no_telp = $this->input->post('no_telp');

		$data = array(
			'no_induk' => $no_induk,
			'nama_lengkap' => $nama_lengkap,
			'id_kelas' => $id_kelas,
			'jenis_kelamin' => $jenis_kelamin,
			'tempat_lahir' => $tempat_lahir,
			'tanggal_lahir' => $tanggal_lahir,
			'alamat' => $alamat,
			'no_telp' => $no_telp
		);

		$this->M_master->input_data($data, 'tb_siswa');
		redirect('siswa/index');
	}

	public function edit($id_siswa)
	{
		$where = array('no_induk' => $id_siswa);
		$data['siswa'] = $this->M_master->edit_data($where, 'tb_siswa')->result();

		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('siswa/index', $data);
		$this->load->view('templates_admin/footer');
	}

	public function update()
	{
		$id_siswa = $this->input->post('id_siswa');
		$no_induk = $this->input->post('no_induk');
		$nama_lengkap = $this->input->post('nama_lengkap');
		$id_kelas = $this->input->post('id_kelas');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$tempat_lahir = $this->input->post('tempat_lahir');
		$tanggal_lahir = $this->input->post('tanggal_lahir');
		$alamat = $this->input->post('alamat');
		$no_telp = $this->input->post('no_telp');

		$data = array(
			'no_induk' => $no_induk,
			'nama_lengkap' => $nama_lengkap,
			'id_kelas' => $id_kelas,
			'jenis_kelamin' => $jenis_kelamin,
			'tempat_lahir' => $tempat_lahir,
			'tanggal_lahir' => $tanggal_lahir,
			'alamat' => $alamat,
			'no_telp' => $no_telp
		);

		$where = array(
			'id_siswa' => $id_siswa
		);

		$this->M_master->update_data($where, $data, 'tb_siswa');
		redirect('siswa/index');
	}

	public function hapus($id_siswa)
	{
		$where = array('id_siswa' => $id_siswa);
		$this->M_master->hapus_data($where, 'tb_siswa');
		redirect('siswa/index');
	}

	public function hapus_semua()
	{
		$this->M_master->hapus_semua_data('tb_siswa');
		redirect('siswa/index');
	}

	public function getUbah()
	{
		echo json_encode($this->M_master->getSiswaById($_POST['id']));
	}
}
