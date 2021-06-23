<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pelanggaran_Tatib extends CI_Controller
{
	public function index()
	{
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/pelanggaran_tatib');
		$this->load->view('templates_admin/footer');
	}
}
