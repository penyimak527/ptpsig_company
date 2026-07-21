<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->database();
		if (session_status() === PHP_SESSION_NONE) {
			session_start();
		}
	}

	public function index()
	{
		if (!empty($_SESSION['admin_logged_in'])) {
			redirect('admin/dashboard');
		}

		$base_path = rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'])), '/');
		$data = array(
			'title' => 'Login Admin',
			'admin_asset_path' => ($base_path === '' ? '' : $base_path) . '/assets_admin',
			'error' => '',
		);

		if ($this->input->method() === 'post') {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$admin = $this->db
				->where('username', $username)
				->where('status', 'aktif')
				->get('admin')
				->row_array();

			if (!empty($admin) && password_verify($password, $admin['password_hash'])) {
				$_SESSION['admin_logged_in'] = TRUE;
				$_SESSION['admin_id'] = $admin['id_admin'];
				$_SESSION['admin_name'] = $admin['nama'];
				$this->db->where('id_admin', $admin['id_admin'])->update('admin', array('last_login' => date('d:m:Y')));
				redirect('admin/dashboard');
			}

			$data['error'] = 'Username atau password tidak sesuai.';
		}

		$this->load->view('admin/login', $data);
	}

	public function logout()
	{
		$_SESSION = array();
		session_destroy();
		redirect('admin/login');
	}
}
