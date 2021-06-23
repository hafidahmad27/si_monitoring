<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jenis_Pembayaran extends CI_Controller
{
	public function index()
	{
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/jenis_pembayaran');
		$this->load->view('templates_admin/footer');
	}
}
