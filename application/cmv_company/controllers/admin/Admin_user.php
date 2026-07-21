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
		$this->render_admin('admin/admin_user/index', 'Admin User', 'admin_user');
	}

	public function list_data()
	{
		$rows = $this->admin->get_all('admin', 'id_admin', 'DESC');
		foreach ($rows as &$row) {
			unset($row['password_hash']);
		}
		unset($row);
		$this->json(array('status' => TRUE, 'data' => $rows));
	}

	public function tambah()
	{
		if ($this->input->method() === 'post') {
			if (!$this->valid_submission(FALSE)) {
				return;
			}
			$this->ajax_save_response();
			return;
		}

		$this->render_admin('admin/admin_user/tambah', 'Tambah Admin User', 'admin_user');
	}

	public function edit($id = NULL)
	{
		$id = $id !== NULL ? (int) $id : (int) $this->input->post('id_admin');
		$item = $this->admin->get_where('admin', array('id_admin' => $id));
		if (empty($item)) {
			show_404();
		}

		if ($this->input->method() === 'post') {
			if (!$this->valid_submission(TRUE, $id)) {
				return;
			}
			$this->ajax_save_response();
			return;
		}

		$this->render_admin('admin/admin_user/edit', 'Edit Admin User', 'admin_user', array('item' => $item));
	}

	public function hapus($id)
	{
		if ((int) $id === (int) $_SESSION['admin_id']) {
			$this->json(array('status' => FALSE, 'message' => 'Akun yang sedang digunakan tidak dapat dihapus.'));
			return;
		}
		$this->ajax_delete_response($id);
	}

	private function valid_submission($editing, $id = NULL)
	{
		$nama = trim((string) $this->input->post('nama'));
		$username = trim((string) $this->input->post('username'));
		$email = trim((string) $this->input->post('email'));
		$password = (string) $this->input->post('password_hash');

		if ($nama === '' || $username === '' || $email === '') {
			$this->json(array('status' => FALSE, 'message' => 'Nama, username, dan email wajib diisi.'));
			return FALSE;
		}
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$this->json(array('status' => FALSE, 'message' => 'Format email tidak valid.'));
			return FALSE;
		}
		if (!$editing && strlen($password) < 8) {
			$this->json(array('status' => FALSE, 'message' => 'Password minimal terdiri dari 8 karakter.'));
			return FALSE;
		}
		if ($editing && $password !== '' && strlen($password) < 8) {
			$this->json(array('status' => FALSE, 'message' => 'Password baru minimal terdiri dari 8 karakter.'));
			return FALSE;
		}

		$username_owner = $this->admin->get_where('admin', array('username' => $username));
		$email_owner = $this->admin->get_where('admin', array('email' => $email));
		if (!empty($username_owner) && (int) $username_owner['id_admin'] !== (int) $id) {
			$this->json(array('status' => FALSE, 'message' => 'Username sudah digunakan.'));
			return FALSE;
		}
		if (!empty($email_owner) && (int) $email_owner['id_admin'] !== (int) $id) {
			$this->json(array('status' => FALSE, 'message' => 'Email sudah digunakan.'));
			return FALSE;
		}

		return TRUE;
	}
}
