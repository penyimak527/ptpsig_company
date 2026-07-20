<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('M_home', 'model');
	}

	public function index()
	{
		$data = $this->model->get_home_data();
		$base_path = rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'])), '/');
		$data['base_path'] = $base_path === '' ? '' : $base_path;
		$data['asset_path'] = ($base_path === '' ? '' : $base_path) . '/assets';
		$data['menus'] = $this->build_menu_urls($data['menus']);
		$data['title'] = 'Kontak - Piramidsoft';
		$this->load->view('template/header', $data);
		$this->load->view('kontak/index', $data);
		$this->load->view('template/footer', $data);
	}

	private function build_menu_urls($menus)
	{
		foreach ($menus as $key => $menu) {
			$menus[$key]['url'] = site_url(isset($menu['path']) ? $menu['path'] : '') . (isset($menu['anchor']) ? $menu['anchor'] : '');
			if (!empty($menu['children'])) {
				foreach ($menu['children'] as $child_key => $child) {
					$menus[$key]['children'][$child_key]['url'] = site_url($child['path']);
				}
			}
		}
		return $menus;
	}
}
