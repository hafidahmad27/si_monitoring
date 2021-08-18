<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_auth extends CI_Model
{
	public function check_login_pegawai($username, $password)
	{
		$this->db->select('*');
		$this->db->from('tb_user');
		$this->db->join('tb_pegawai', 'tb_user.id_pegawai = tb_pegawai.id_pegawai');
		$this->db->where('username', $username);
		$this->db->where('password', $password);

		return $this->db->get();
	}

	public function check_login_siswa($no_induk, $tanggal_lahir)
	{
		$this->db->select('*');
		$this->db->from('tb_catatan_pelanggaran');
		$this->db->join('tb_siswa', 'tb_catatan_pelanggaran.id_siswa = tb_siswa.id_siswa');
		$this->db->join('tb_kelas', 'tb_siswa.id_kelas = tb_kelas.id_kelas');
		$this->db->join('tb_pelanggaran_tatib', 'tb_catatan_pelanggaran.id_pelanggaran_tatib = tb_pelanggaran_tatib.id_pelanggaran_tatib');
		$this->db->join('tb_tindakan', 'tb_catatan_pelanggaran.id_tindakan = tb_tindakan.id_tindakan');
		$this->db->where('no_induk', $no_induk);
		$this->db->where('tanggal_lahir', $tanggal_lahir);

		return $this->db->get();
	}
}
