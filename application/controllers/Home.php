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
		$data['base_path'] = $base_path === '' ? '' : $base_path;
		$data['asset_path'] = ($base_path === '' ? '' : $base_path) . '/assets';
		$data['title'] = $title !== NULL ? $title : 'Piramidsoft - Company Profile';

		return $data;
	}

	private function render($view, $data)
	{
		$this->load->view('template/header', $data);
		$this->load->view($view, $data);
		$this->load->view('template/footer', $data);
	}
}
