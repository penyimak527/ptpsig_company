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
		$this->render_crud('admin/team/index', 'Admin Team', 'team', 'Team', 'Kelola data tim yang tampil di website.');
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
