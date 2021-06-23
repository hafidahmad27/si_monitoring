<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Catatan_Pelanggaran extends CI_Controller
{
	public function index()
	{
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/catatan_pelanggaran');
		$this->load->view('templates_admin/footer');
	}
}
