<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kegiatan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('M_home', 'model');
	}

	public function index()
	{
		$data = $this->prepare_data('Kegiatan - Piramidsoft');
		$this->render('kegiatan/index', $data);
	}

	public function detail($slug = NULL)
	{
		$activity = $this->model->get_activity_by_slug($slug);
		if ($activity === NULL) {
			show_404();
		}
		$data = $this->prepare_data($activity['title'] . ' - Piramidsoft');
		$data['activity'] = $activity;
		$this->render('kegiatan/detail', $data);
	}

	private function prepare_data($title)
	{
		$data = $this->model->get_home_data();
		$base_path = rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'])), '/');
		$data['base_path'] = $base_path === '' ? '' : $base_path;
		$data['asset_path'] = ($base_path === '' ? '' : $base_path) . '/assets';
		$data['menus'] = $this->build_menu_urls($data['menus']);
		$data['title'] = $title;
		return $data;
	}

	private function render($view, $data)
	{
		$this->load->view('template/header', $data);
		$this->load->view($view, $data);
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
