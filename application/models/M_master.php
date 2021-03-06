<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_master extends CI_Model
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

	public function getTahunAjaranById($id_tahun_ajaran)
	{
		return $this->db->get_where('tb_tahun_ajaran', array('id_tahun_ajaran' => $id_tahun_ajaran))->row();
	}
	public function getKelasById($id_kelas)
	{
		return $this->db->get_where('tb_kelas', array('id_kelas' => $id_kelas))->row();
	}
	public function getSiswaById($id_siswa)
	{
		return $this->db->get_where('tb_siswa', array('id_siswa' => $id_siswa))->row();
	}
	public function getPelanggaranTatibById($id_pelanggaran_tatib)
	{
		return $this->db->get_where('tb_pelanggaran_tatib', array('id_pelanggaran_tatib' => $id_pelanggaran_tatib))->row();
	}
	public function getTindakanById($id_tindakan)
	{
		return $this->db->get_where('tb_tindakan', array('id_tindakan' => $id_tindakan))->row();
	}
	public function getJenisPembayaranById($id_jenis_pembayaran)
	{
		return $this->db->get_where('tb_jenis_pembayaran', array('id_jenis_pembayaran' => $id_jenis_pembayaran))->row();
	}
	public function getUserById($id_user)
	{
		return $this->db->get_where('tb_user', array('id_user' => $id_user))->row();
	}

	public function getSiswa()
	{
		$this->db->select('*');
		$this->db->from('tb_kelas');
		$this->db->join('tb_siswa', 'tb_siswa.id_kelas = tb_kelas.id_kelas');
		$query = $this->db->get();
		return $query->result();
	}

	public function getKelas()
	{
		$this->db->select('*');
		$this->db->from('tb_kelas');
		$query = $this->db->get();
		return $query->result();
	}

	public function getUser()
	{
		$this->db->select('*');
		$this->db->from('tb_user');
		$query = $this->db->get();
		return $query->result();
	}
}
