<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . 'controllers/admin/Admin_base.php';

class Struktur_organisasi extends Admin_base
{
	protected $crud = array(
		'table' => 'struktur_organisasi',
		'primary_key' => 'id_struktur',
		'order_by' => 'urutan',
		'order_dir' => 'ASC',
		'fields' => array('parent_id', 'nama', 'jabatan', 'divisi', 'foto', 'deskripsi', 'urutan', 'status'),
		'file_field' => 'foto',
		'upload_path' => 'upload/struktur_organisasi',
		'status_options' => array('aktif', 'nonaktif'),
		'columns' => array('nama' => 'Nama', 'jabatan' => 'Jabatan', 'divisi' => 'Divisi', 'urutan' => 'Urutan', 'status' => 'Status'),
	);

	public function index()
	{
		$this->render_crud('admin/struktur_organisasi/index', 'Admin Struktur Organisasi', 'struktur_organisasi', 'Struktur Organisasi', 'Kelola susunan jabatan, foto, dan divisi perusahaan.');
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
