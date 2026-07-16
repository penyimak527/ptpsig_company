<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kegiatan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('M_admin', 'admin');
	}

	public function index()
	{
		$data = $this->prepare_data('Admin Kegiatan', 'kegiatan');
		$data['rows'] = $this->admin->get_kegiatan();
		$data['columns'] = array('Judul', 'Klien', 'Kategori', 'Tanggal', 'Status');
		$data['fields'] = array('judul', 'klien', 'kategori', 'tanggal', 'status');
		$data['page_label'] = 'Kegiatan';
		$data['page_description'] = 'Kelola konten kegiatan yang tampil di halaman umum.';
		$this->render('admin/kegiatan/index', $data);
	}

	private function prepare_data($title, $active_menu)
	{
		$base_path = rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'])), '/');

		return array(
			'title' => $title,
			'active_menu' => $active_menu,
			'admin_asset_path' => ($base_path === '' ? '' : $base_path) . '/asstes_admin',
		);
	}

	private function render($view, $data)
	{
		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/template/sidebar', $data);
		$this->load->view('admin/template/topbar', $data);
		$this->load->view($view, $data);
		$this->load->view('admin/template/footer', $data);
	}
}
