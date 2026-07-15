<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_home', 'model');
	}

	public function index()
	{
		$data = $this->model->get_home_data();
		$base_path = rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'])), '/');
		$data['asset_path'] = ($base_path === '' ? '' : $base_path) . '/assets';

		$this->load->view('template/header', $data);
		$this->load->view('home/index', $data);
		$this->load->view('template/footer', $data);
	}
}
