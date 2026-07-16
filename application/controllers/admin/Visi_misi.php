<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visi_misi extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('M_admin', 'admin');
	}

	public function index()
	{
		$data = $this->prepare_data('Admin Visi Misi', 'visi_misi');
		$data['rows'] = $this->admin->get_visi_misi();
		$data['columns'] = array('Tipe', 'Judul', 'Deskripsi', 'Status');
		$data['fields'] = array('tipe', 'judul', 'deskripsi', 'status');
		$data['page_label'] = 'Visi Misi';
		$data['page_description'] = 'Kelola visi dan misi perusahaan.';
		$this->render('admin/visi_misi/index', $data);
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
