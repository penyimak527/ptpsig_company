<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('M_admin', 'admin');
	}

	public function index()
	{
		$data = $this->prepare_data('Dashboard Admin');
		$data['stats'] = $this->admin->get_dashboard_stats();
		$data['recent_kegiatan'] = $this->admin->get_kegiatan();
		$this->render('admin/dashboard/index', $data);
	}

	private function prepare_data($title)
	{
		$base_path = rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'])), '/');

		return array(
			'title' => $title,
			'active_menu' => 'dashboard',
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
