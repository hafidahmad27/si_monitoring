<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_transaksi extends CI_Model
{
	public function tampil_data($table)
	{
		return $this->db->get($table);
	}

	public function input_data($data, $table)
	{
		$this->db->insert($table, $data);
	}

	public function edit_data($where, $table)
	{
		return $this->db->get_where($table, $where);
	}

	public function update_data($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	public function hapus_data($where, $table)
	{
		$this->db->where($where);
		// $this->db->query("SET FOREIGN_KEY_CHECKS=0;");
		$this->db->delete($table);
		// $this->db->query("SET FOREIGN_KEY_CHECKS=1;");
		$this->db->query("ALTER TABLE " . $table . " AUTO_INCREMENT=1;");
	}

	public function hapus_semua_data($table)
	{
		// $this->db->query("SET FOREIGN_KEY_CHECKS=0;");
		$this->db->truncate($table);
		// $this->db->query("SET FOREIGN_KEY_CHECKS=1;");
	}

	public function getCatatanPelanggaranById($id_catatan_pelanggaran)
	{
		return $this->db->get_where('tb_catatan_pelanggaran', array('id_catatan_pelanggaran' => $id_catatan_pelanggaran))->row();
	}
	public function getAbsensiById($id_absensi)
	{
		return $this->db->get_where('tb_absensi', array('id_absensi' => $id_absensi))->row();
	}
	public function getTunggakanPembayaranById($id_tunggakan_pembayaran)
	{
		return $this->db->get_where('tb_tunggakan_pembayaran', array('id_tunggakan_pembayaran' => $id_tunggakan_pembayaran))->row();
	}


	public function getCatatanPelanggaranSiswa()
	{
		$this->db->select('*');
		$this->db->from('tb_catatan_pelanggaran');
		$this->db->join('tb_tahun_ajaran', 'tb_catatan_pelanggaran.id_tahun_ajaran = tb_tahun_ajaran.id_tahun_ajaran');
		$this->db->join('tb_siswa', 'tb_catatan_pelanggaran.id_siswa = tb_siswa.id_siswa');
		$this->db->join('tb_kelas', 'tb_siswa.id_kelas = tb_kelas.id_kelas');
		$this->db->join('tb_pelanggaran_tatib', 'tb_catatan_pelanggaran.id_pelanggaran_tatib = tb_pelanggaran_tatib.id_pelanggaran_tatib');
		$this->db->join('tb_tindakan', 'tb_catatan_pelanggaran.id_tindakan = tb_tindakan.id_tindakan');

		$query = $this->db->get();
		return $query->result();
	}

	public function getAbsensiSiswa()
	{
		if ($this->session->userdata('level') == 'admin') {
			$this->db->select('*');
			$this->db->from('tb_absensi');
			$this->db->join('tb_tahun_ajaran', 'tb_absensi.id_tahun_ajaran = tb_tahun_ajaran.id_tahun_ajaran');
			$this->db->join('tb_siswa', 'tb_absensi.id_siswa = tb_siswa.id_siswa');
			$this->db->join('tb_kelas', 'tb_siswa.id_kelas = tb_kelas.id_kelas');
			// $this->db->join('tb_pegawai', 'tb_kelas.id_pegawai = tb_pegawai.id_pegawai');
			// $this->db->join('tb_user', 'tb_user.id_pegawai = tb_pegawai.id_pegawai');
			$query = $this->db->get();
			return $query->result();
		} elseif ($this->session->userdata('level') == 'wali_kelas') {
			$this->db->select('*');
			$this->db->from('tb_absensi');
			$this->db->join('tb_tahun_ajaran', 'tb_absensi.id_tahun_ajaran = tb_tahun_ajaran.id_tahun_ajaran');
			$this->db->join('tb_siswa', 'tb_absensi.id_siswa = tb_siswa.id_siswa');
			$this->db->join('tb_kelas', 'tb_siswa.id_kelas = tb_kelas.id_kelas');
			$this->db->join('tb_pegawai', 'tb_kelas.id_pegawai = tb_pegawai.id_pegawai');
			$this->db->join('tb_user', 'tb_user.id_pegawai = tb_pegawai.id_pegawai');
			$this->db->where('username="' . $this->session->userdata('username') . '" AND password="' . $this->session->userdata('password') . '"');
			$query = $this->db->get();
			return $query->result();
		}
	}

	public function getSiswaByKelas()
	{
		$this->db->select('*');
		$this->db->from('tb_siswa');
		$this->db->join('tb_kelas', 'tb_siswa.id_kelas = tb_kelas.id_kelas');
		$this->db->join('tb_pegawai', 'tb_kelas.id_pegawai = tb_pegawai.id_pegawai');
		$this->db->join('tb_user', 'tb_user.id_pegawai = tb_pegawai.id_pegawai');
		$this->db->where('username="' . $this->session->userdata('username') . '" AND password="' . $this->session->userdata('password') . '"');
		$query = $this->db->get();
		return $query->result();
	}

	public function getTunggakanPembayaranSiswa()
	{
		$this->db->select('*');
		$this->db->from('tb_tunggakan_pembayaran');
		$this->db->join('tb_tahun_ajaran', 'tb_tunggakan_pembayaran.id_tahun_ajaran = tb_tahun_ajaran.id_tahun_ajaran');
		$this->db->join('tb_siswa', 'tb_tunggakan_pembayaran.id_siswa = tb_siswa.id_siswa');
		$this->db->join('tb_kelas', 'tb_siswa.id_kelas = tb_kelas.id_kelas');
		$this->db->join('tb_jenis_pembayaran', 'tb_tunggakan_pembayaran.id_jenis_pembayaran = tb_jenis_pembayaran.id_jenis_pembayaran');

		$query = $this->db->get();
		return $query->result();
	}

	public function getInfoCatatanPelanggaran()
	{
		$no_induk = $this->session->userdata('no_induk');
		$tanggal_lahir = $this->session->userdata('tanggal_lahir');

		$this->db->select('*');
		$this->db->from('tb_catatan_pelanggaran');
		$this->db->join('tb_tahun_ajaran', 'tb_catatan_pelanggaran.id_tahun_ajaran = tb_tahun_ajaran.id_tahun_ajaran');
		$this->db->join('tb_siswa', 'tb_catatan_pelanggaran.id_siswa = tb_siswa.id_siswa');
		$this->db->join('tb_kelas', 'tb_siswa.id_kelas = tb_kelas.id_kelas');
		$this->db->join('tb_pelanggaran_tatib', 'tb_catatan_pelanggaran.id_pelanggaran_tatib = tb_pelanggaran_tatib.id_pelanggaran_tatib');
		$this->db->join('tb_tindakan', 'tb_catatan_pelanggaran.id_tindakan = tb_tindakan.id_tindakan');
		$this->db->where('no_induk="' . $no_induk . '" AND tanggal_lahir="' . $tanggal_lahir . '"');
		$this->db->order_by('tanggal', 'DESC');

		$query = $this->db->get();
		return $query->result();
	}
	public function getTotalPoin()
	{
		$no_induk = $this->session->userdata('no_induk');
		$tanggal_lahir = $this->session->userdata('tanggal_lahir');

		$this->db->select('SUM(poin) as total_poin');
		$this->db->from('tb_catatan_pelanggaran');
		$this->db->join('tb_siswa', 'tb_catatan_pelanggaran.id_siswa = tb_siswa.id_siswa');
		$this->db->join('tb_kelas', 'tb_siswa.id_kelas = tb_kelas.id_kelas');
		$this->db->join('tb_pelanggaran_tatib', 'tb_catatan_pelanggaran.id_pelanggaran_tatib = tb_pelanggaran_tatib.id_pelanggaran_tatib');
		$this->db->join('tb_tindakan', 'tb_catatan_pelanggaran.id_tindakan = tb_tindakan.id_tindakan');
		$this->db->where('no_induk="' . $no_induk . '" AND tanggal_lahir="' . $tanggal_lahir . '"');
		$this->db->order_by('tanggal', 'DESC');

		$query = $this->db->get();
		return $query->result();
	}

	public function getInfoAbsensi()
	{
		$no_induk = $this->session->userdata('no_induk');
		$tanggal_lahir = $this->session->userdata('tanggal_lahir');

		$this->db->select('*');
		$this->db->from('tb_absensi');
		$this->db->join('tb_tahun_ajaran', 'tb_absensi.id_tahun_ajaran = tb_tahun_ajaran.id_tahun_ajaran');
		$this->db->join('tb_siswa', 'tb_absensi.id_siswa = tb_siswa.id_siswa');
		$this->db->join('tb_kelas', 'tb_siswa.id_kelas = tb_kelas.id_kelas');
		$this->db->where('no_induk="' . $no_induk . '" AND tanggal_lahir="' . $tanggal_lahir . '"');
		$this->db->order_by('tanggal_absensi', 'DESC');
		$query = $this->db->get();
		return $query->result();
	}

	public function getInfoTunggakanPembayaran()
	{
		$no_induk = $this->session->userdata('no_induk');
		$tanggal_lahir = $this->session->userdata('tanggal_lahir');

		$this->db->select('*');
		$this->db->from('tb_tunggakan_pembayaran');
		$this->db->join('tb_tahun_ajaran', 'tb_tunggakan_pembayaran.id_tahun_ajaran = tb_tahun_ajaran.id_tahun_ajaran');
		$this->db->join('tb_siswa', 'tb_tunggakan_pembayaran.id_siswa = tb_siswa.id_siswa');
		$this->db->join('tb_kelas', 'tb_siswa.id_kelas = tb_kelas.id_kelas');
		$this->db->join('tb_jenis_pembayaran', 'tb_tunggakan_pembayaran.id_jenis_pembayaran = tb_jenis_pembayaran.id_jenis_pembayaran');
		$this->db->where('no_induk="' . $no_induk . '" AND tanggal_lahir="' . $tanggal_lahir . '"');
		$this->db->order_by('tahun', 'DESC');

		$query = $this->db->get();
		return $query->result();
	}

	public function getTotalTunggakan()
	{
		$no_induk = $this->session->userdata('no_induk');
		$tanggal_lahir = $this->session->userdata('tanggal_lahir');

		$this->db->select('SUM(biaya_pembayaran) as tot_biaya');
		$this->db->from('tb_tunggakan_pembayaran');
		$this->db->join('tb_siswa', 'tb_tunggakan_pembayaran.id_siswa = tb_siswa.id_siswa');
		$this->db->join('tb_kelas', 'tb_siswa.id_kelas = tb_kelas.id_kelas');
		$this->db->join('tb_jenis_pembayaran', 'tb_tunggakan_pembayaran.id_jenis_pembayaran = tb_jenis_pembayaran.id_jenis_pembayaran');
		$this->db->where('no_induk="' . $no_induk . '" AND tanggal_lahir="' . $tanggal_lahir . '"');
		$this->db->order_by('tahun', 'DESC');

		$query = $this->db->get();
		return $query->result();
	}

	public function getStatusTahunAjaran()
	{
		$this->db->select('*');
		$this->db->from('tb_tahun_ajaran');
		$this->db->where('status', 1);

		$query = $this->db->get();
		foreach ($query->result() as $row) {
			$sess = array(
				'id_tahun_ajaran' => $row->id_tahun_ajaran,
				'nama_tahun_ajaran' => $row->nama_tahun_ajaran
			);
		}
		$this->session->set_userdata($sess);
		// $this->session->set_flashdata('info', 'Maaf, username atau password anda salah !');
		// 	redirect('login');
	}

	//------------------------------------------------------------

	public function Report_TahunAjaran($no_induk, $nama_tahun_ajaran)
	{
		$this->db->select('nama_tahun_ajaran');
		$this->db->from('tb_catatan_pelanggaran');
		$this->db->join('tb_tahun_ajaran', 'tb_catatan_pelanggaran.id_tahun_ajaran = tb_tahun_ajaran.id_tahun_ajaran');
		$this->db->join('tb_siswa', 'tb_catatan_pelanggaran.id_siswa = tb_siswa.id_siswa', 'RIGHT');
		$this->db->join('tb_kelas', 'tb_siswa.id_kelas = tb_kelas.id_kelas');
		$this->db->where('no_induk', $no_induk);
		$this->db->where('nama_tahun_ajaran', $nama_tahun_ajaran);
		$this->db->limit(1);

		$query = $this->db->get();
		return $query->result();
	}

	public function Report_Nama_No_Kls($no_induk)
	{
		$this->db->select('*');
		$this->db->from('tb_catatan_pelanggaran');
		$this->db->join('tb_tahun_ajaran', 'tb_catatan_pelanggaran.id_tahun_ajaran = tb_tahun_ajaran.id_tahun_ajaran');
		$this->db->join('tb_siswa', 'tb_catatan_pelanggaran.id_siswa = tb_siswa.id_siswa', 'RIGHT');
		$this->db->join('tb_kelas', 'tb_siswa.id_kelas = tb_kelas.id_kelas');
		$this->db->where('no_induk', $no_induk);
		$this->db->limit(1);

		$query = $this->db->get();
		return $query->result();
	}

	public function Report_CatatanPelanggaranBySiswaAndTa($no_induk, $nama_tahun_ajaran)
	{
		$this->db->select('*');
		$this->db->from('tb_catatan_pelanggaran');
		$this->db->join('tb_tahun_ajaran', 'tb_catatan_pelanggaran.id_tahun_ajaran = tb_tahun_ajaran.id_tahun_ajaran');
		$this->db->join('tb_siswa', 'tb_catatan_pelanggaran.id_siswa = tb_siswa.id_siswa');
		$this->db->join('tb_kelas', 'tb_siswa.id_kelas = tb_kelas.id_kelas');
		$this->db->join('tb_pelanggaran_tatib', 'tb_catatan_pelanggaran.id_pelanggaran_tatib = tb_pelanggaran_tatib.id_pelanggaran_tatib');
		$this->db->join('tb_tindakan', 'tb_catatan_pelanggaran.id_tindakan = tb_tindakan.id_tindakan');
		$this->db->where('no_induk="' . $no_induk . '" AND nama_tahun_ajaran="' . $nama_tahun_ajaran . '"');
		$this->db->order_by('tanggal', 'DESC');

		$query = $this->db->get();
		return $query->result();
	}
	public function getRTotalPoin($no_induk, $nama_tahun_ajaran)
	{
		$this->db->select('SUM(poin) as total_poin');
		$this->db->from('tb_catatan_pelanggaran');
		$this->db->join('tb_tahun_ajaran', 'tb_catatan_pelanggaran.id_tahun_ajaran = tb_tahun_ajaran.id_tahun_ajaran');
		$this->db->join('tb_siswa', 'tb_catatan_pelanggaran.id_siswa = tb_siswa.id_siswa');
		$this->db->join('tb_kelas', 'tb_siswa.id_kelas = tb_kelas.id_kelas');
		$this->db->join('tb_pelanggaran_tatib', 'tb_catatan_pelanggaran.id_pelanggaran_tatib = tb_pelanggaran_tatib.id_pelanggaran_tatib');
		$this->db->join('tb_tindakan', 'tb_catatan_pelanggaran.id_tindakan = tb_tindakan.id_tindakan');
		$this->db->where('no_induk="' . $no_induk . '" AND nama_tahun_ajaran="' . $nama_tahun_ajaran . '"');
		$this->db->order_by('tanggal', 'DESC');

		$query = $this->db->get();
		return $query->result();
	}

	public function Report_AbsensiBySiswaAndTa($no_induk, $nama_tahun_ajaran)
	{
		$this->db->select('*');
		$this->db->from('tb_absensi');
		$this->db->join('tb_tahun_ajaran', 'tb_absensi.id_tahun_ajaran = tb_tahun_ajaran.id_tahun_ajaran');
		$this->db->join('tb_siswa', 'tb_absensi.id_siswa = tb_siswa.id_siswa');
		$this->db->join('tb_kelas', 'tb_siswa.id_kelas = tb_kelas.id_kelas');
		$this->db->where('no_induk="' . $no_induk . '" AND nama_tahun_ajaran="' . $nama_tahun_ajaran . '"');
		$this->db->order_by('tanggal_absensi', 'DESC');

		$query = $this->db->get();
		return $query->result();
	}

	public function Report_TunggakanPembayaranBySiswaAndTa($no_induk, $nama_tahun_ajaran)
	{
		$this->db->select('*');
		$this->db->from('tb_tunggakan_pembayaran');
		$this->db->join('tb_tahun_ajaran', 'tb_tunggakan_pembayaran.id_tahun_ajaran = tb_tahun_ajaran.id_tahun_ajaran');
		$this->db->join('tb_siswa', 'tb_tunggakan_pembayaran.id_siswa = tb_siswa.id_siswa');
		$this->db->join('tb_kelas', 'tb_siswa.id_kelas = tb_kelas.id_kelas');
		$this->db->join('tb_jenis_pembayaran', 'tb_tunggakan_pembayaran.id_jenis_pembayaran = tb_jenis_pembayaran.id_jenis_pembayaran');
		$this->db->where('no_induk="' . $no_induk . '" AND nama_tahun_ajaran="' . $nama_tahun_ajaran . '"');
		$this->db->order_by('tahun', 'DESC');

		$query = $this->db->get();
		return $query->result();
	}
	public function getRTotalTunggakan($no_induk, $nama_tahun_ajaran)
	{
		$this->db->select('SUM(biaya_pembayaran) as tot_biaya');
		$this->db->from('tb_tunggakan_pembayaran');
		$this->db->join('tb_tahun_ajaran', 'tb_tunggakan_pembayaran.id_tahun_ajaran = tb_tahun_ajaran.id_tahun_ajaran');
		$this->db->join('tb_siswa', 'tb_tunggakan_pembayaran.id_siswa = tb_siswa.id_siswa');
		$this->db->join('tb_kelas', 'tb_siswa.id_kelas = tb_kelas.id_kelas');
		$this->db->join('tb_jenis_pembayaran', 'tb_tunggakan_pembayaran.id_jenis_pembayaran = tb_jenis_pembayaran.id_jenis_pembayaran');
		$this->db->where('no_induk="' . $no_induk . '" AND nama_tahun_ajaran="' . $nama_tahun_ajaran . '"');
		$this->db->order_by('tahun', 'DESC');

		$query = $this->db->get();
		return $query->result();
	}
}
