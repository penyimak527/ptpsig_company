<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('M_home', 'model');
	}

	public function index()
	{
		$data = $this->prepare_public_data();
		$this->render('home/index', $data);
	}

	public function struktur_organisasi()
	{
		$data = $this->prepare_public_data('Struktur Organisasi - Piramidsoft');
		$this->render('profile/struktur_organisasi', $data);
	}

	public function visi_misi()
	{
		$data = $this->prepare_public_data('Visi Misi - Piramidsoft');
		$this->render('profile/visi_misi', $data);
	}

	public function sejarah()
	{
		$data = $this->prepare_public_data('Sejarah - Piramidsoft');
		$this->render('profile/sejarah', $data);
	}

	public function kegiatan()
	{
		$data = $this->prepare_public_data('Kegiatan - Piramidsoft');
		$this->render('kegiatan/index', $data);
	}

	public function detail_kegiatan($slug = NULL)
	{
		$activity = $this->model->get_activity_by_slug($slug);

		if ($activity === NULL) {
			show_404();
		}

		$data = $this->prepare_public_data($activity['title'] . ' - Piramidsoft');
		$data['activity'] = $activity;
		$this->render('kegiatan/detail', $data);
	}

	private function prepare_public_data($title = NULL)
	{
		$data = $this->model->get_home_data();
		$base_path = rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'])), '/');
		$data['asset_path'] = ($base_path === '' ? '' : $base_path) . '/assets';
		$data['menus'] = $this->build_menu_urls($data['menus']);

		if ($title !== NULL) {
			$data['title'] = $title;
		}

		return $data;
	}

	private function build_menu_urls($menus)
	{
		foreach ($menus as $key => $menu) {
			$menus[$key]['url'] = $this->build_url($menu);

			if (!empty($menu['children'])) {
				foreach ($menu['children'] as $child_key => $child) {
					$menus[$key]['children'][$child_key]['url'] = $this->build_url($child);
				}
			}
		}

		return $menus;
	}

	private function build_url($item)
	{
		$path = isset($item['path']) ? $item['path'] : '';
		$anchor = isset($item['anchor']) ? $item['anchor'] : '';

		return site_url($path) . $anchor;
	}

	private function render($view, $data)
	{
		$this->load->view('template/header', $data);
		$this->load->view($view, $data);
		$this->load->view('template/footer', $data);
	}
}
