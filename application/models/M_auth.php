<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_auth extends CI_Model
{
	public function cekLogin($username, $password)
	{
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		return $this->db->get('tb_user')->num_rows();
	}

	// public function query()
	// {
	// 	$this->db->select('nama_pegawai, nama_lengkap, nama_kelas, username, password');
	// 	$this->db->from('tb_user');
	// 	$this->db->join('tb_pegawai', 'tb_user.id_pegawai = tb_pegawai.id_pegawai');
	// 	$this->db->join('tb_kelas', 'tb_kelas.id_pegawai = tb_pegawai.id_pegawai');
	// 	$this->db->join('tb_siswa', 'tb_siswa.id_kelas = tb_kelas.id_kelas');
	// 	$this->db->where('username', $user);
	// 	$this->db->where('password', $pass);

	// 	$query = $this->db->get();
	// 	return $query->result();
	// }
}
