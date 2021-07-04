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
		$this->db->query("SET FOREIGN_KEY_CHECKS=0;");
		$this->db->delete($table);
		$this->db->query("SET FOREIGN_KEY_CHECKS=1;");
		$this->db->query("ALTER TABLE " . $table . " AUTO_INCREMENT=1;");
	}

	public function hapus_semua_data($table)
	{
		$this->db->query("SET FOREIGN_KEY_CHECKS=0;");
		$this->db->truncate($table);
		$this->db->query("SET FOREIGN_KEY_CHECKS=1;");
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
		$this->db->select('id_catatan_pelanggaran, tanggal, no_induk, nama_lengkap, nama_kelas, bentuk_pelanggaran, poin, nama_tindakan');
		$this->db->from('tb_catatan_pelanggaran');
		$this->db->join('tb_siswa', 'tb_catatan_pelanggaran.id_siswa = tb_siswa.id_siswa');
		$this->db->join('tb_kelas', 'tb_siswa.id_kelas = tb_kelas.id_kelas');
		$this->db->join('tb_pelanggaran_tatib', 'tb_catatan_pelanggaran.id_pelanggaran_tatib = tb_pelanggaran_tatib.id_pelanggaran_tatib');
		$this->db->join('tb_tindakan', 'tb_catatan_pelanggaran.id_tindakan = tb_tindakan.id_tindakan');
		$query = $this->db->get();
		return $query->result();
	}
	public function getAbsensiSiswa()
	{
		$this->db->select('*');
		$this->db->from('tb_kelas');
		$this->db->join('tb_siswa', 'tb_siswa.id_kelas = tb_kelas.id_kelas');
		$query = $this->db->get();
		return $query->result();
	}
	public function getTunggakanPembayaranSiswa()
	{
		$this->db->select('*');
		$this->db->from('tb_kelas');
		$this->db->join('tb_siswa', 'tb_siswa.id_kelas = tb_kelas.id_kelas');
		$query = $this->db->get();
		return $query->result();
	}
}
