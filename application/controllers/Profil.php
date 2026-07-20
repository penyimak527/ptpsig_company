<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('M_home', 'model');
	}

	public function sejarah()
	{
		$this->render('profile/sejarah', 'Sejarah - Piramidsoft');
	}

	public function visi_misi()
	{
		$this->render('profile/visi_misi', 'Visi dan Misi - Piramidsoft');
	}

	public function struktur_organisasi()
	{
		$this->render('profile/struktur_organisasi', 'Struktur Organisasi - Piramidsoft');
	}

	public function tim()
	{
		$this->render('profile/tim', 'Tim - Piramidsoft');
	}

	public function legalitas()
	{
		$this->render('profile/legalitas', 'Legalitas - Piramidsoft');
	}

	public function lokasi()
	{
		$this->render('profile/lokasi', 'Lokasi - Piramidsoft');
	}

	private function render($view, $title)
	{
		$data = $this->model->get_home_data();
		$base_path = rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'])), '/');
		$data['base_path'] = $base_path === '' ? '' : $base_path;
		$data['asset_path'] = ($base_path === '' ? '' : $base_path) . '/assets';
		$data['menus'] = $this->build_menu_urls($data['menus']);
		$data['title'] = $title;
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
