<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . 'controllers/admin/Admin_base.php';

class Team extends Admin_base
{
	protected $crud = array(
		'table' => 'team',
		'primary_key' => 'id_team',
		'order_by' => 'urutan',
		'order_dir' => 'ASC',
		'fields' => array('nama', 'jabatan', 'foto', 'bio', 'instagram', 'linkedin', 'urutan', 'status'),
		'file_field' => 'foto',
		'upload_path' => 'upload/team',
		'status_options' => array('aktif', 'nonaktif'),
		'columns' => array('nama' => 'Nama', 'jabatan' => 'Jabatan', 'urutan' => 'Urutan', 'status' => 'Status'),
	);

	public function index()
	{
		$this->render_admin('admin/team/index', 'Admin Team', 'team');
	}

	public function list_data()
	{
		$this->ajax_list_response();
	}

	public function tambah()
	{
		if ($this->input->method() === 'post') {
			if (!$this->valid_submission()) {
				return;
			}
			$this->ajax_save_response();
			return;
		}

		$this->render_admin('admin/team/tambah', 'Tambah Team', 'team');
	}

	public function edit($id = NULL)
	{
		$id = $id !== NULL ? (int) $id : (int) $this->input->post('id_team');
		$item = $this->admin->get_where('team', array('id_team' => $id));
		if (empty($item)) {
			show_404();
		}

		if ($this->input->method() === 'post') {
			if (!$this->valid_submission()) {
				return;
			}
			$this->ajax_save_response();
			return;
		}

		$this->render_admin('admin/team/edit', 'Edit Team', 'team', array('item' => $item));
	}

	public function hapus($id)
	{
		$this->ajax_delete_response($id);
	}

	private function valid_submission()
	{
		if (trim((string) $this->input->post('nama')) === '' || trim((string) $this->input->post('jabatan')) === '') {
			$this->json(array('status' => FALSE, 'message' => 'Nama dan jabatan anggota team wajib diisi.'));
			return FALSE;
		}

		return TRUE;
	}
}
