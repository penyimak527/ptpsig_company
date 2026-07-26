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
		$data['title'] = $title;
		return $data;
	}

	private function render($view, $data)
	{
		$this->load->view('template/header', $data);
		$this->load->view($view, $data);
		$this->load->view('template/footer', $data);
	}

}
