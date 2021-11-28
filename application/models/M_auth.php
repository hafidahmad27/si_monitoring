<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_auth extends CI_Model
{
	public function check_login_pegawai($username, $password)
	{
		$this->db->select('*');
		$this->db->from('tb_user');
		$this->db->where('username', $username);
		$this->db->where('password', $password);

		return $this->db->get();
	}

	public function check_login_siswa($no_induk, $tanggal_lahir)
	{
		$this->db->select('*');
		$this->db->from('tb_siswa');
		$this->db->join('tb_kelas', 'tb_siswa.id_kelas = tb_kelas.id_kelas');
		$this->db->where('no_induk', $no_induk);
		$this->db->where('tanggal_lahir', $tanggal_lahir);

		return $this->db->get();
	}
}
