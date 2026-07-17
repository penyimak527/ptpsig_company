<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . 'controllers/admin/Admin_base.php';

class Admin_user extends Admin_base
{
	protected $crud = array(
		'table' => 'admin',
		'primary_key' => 'id_admin',
		'order_by' => 'id_admin',
		'order_dir' => 'DESC',
		'fields' => array('nama', 'username', 'email', 'password_hash', 'role', 'foto', 'status'),
		'file_field' => 'foto',
		'upload_path' => 'upload/admin',
		'password_field' => 'password_hash',
		'status_options' => array('aktif', 'nonaktif'),
		'columns' => array('nama' => 'Nama', 'username' => 'Username', 'email' => 'Email', 'role' => 'Role', 'status' => 'Status'),
	);

	public function index()
	{
		$this->render_crud('admin/admin_user/index', 'Admin User', 'admin_user', 'Admin User', 'Kelola akun admin pengelola website.');
	}

	public function list_data()
	{
		$this->ajax_list_response();
	}

	public function get($id)
	{
		$this->ajax_get_response($id);
	}

	public function save()
	{
		$this->ajax_save_response();
	}

	public function delete($id)
	{
		$this->ajax_delete_response($id);
	}
}
