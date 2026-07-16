<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Struktur_organisasi extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('M_admin', 'admin');
	}

	public function index()
	{
		$data = $this->prepare_data('Admin Struktur Organisasi', 'struktur_organisasi');
		$data['rows'] = $this->admin->get_struktur_organisasi();
		$data['columns'] = array('Nama', 'Jabatan', 'Divisi', 'Status');
		$data['fields'] = array('nama', 'jabatan', 'divisi', 'status');
		$data['page_label'] = 'Struktur Organisasi';
		$data['page_description'] = 'Kelola susunan jabatan dan divisi perusahaan.';
		$this->render('admin/struktur_organisasi/index', $data);
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
