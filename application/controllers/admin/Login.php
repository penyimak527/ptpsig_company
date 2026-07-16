<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	public function index()
	{
		$base_path = rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'])), '/');
		$data = array(
			'title' => 'Login Admin',
			'admin_asset_path' => ($base_path === '' ? '' : $base_path) . '/asstes_admin',
		);

		$this->load->view('admin/login', $data);
	}
}
