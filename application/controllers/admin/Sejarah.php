<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . 'controllers/admin/Admin_base.php';

class Sejarah extends Admin_base
{
	protected $crud = array(
		'table' => 'sejarah',
		'primary_key' => 'id_sejarah',
		'order_by' => 'urutan',
		'order_dir' => 'ASC',
		'fields' => array('tahun', 'judul', 'deskripsi', 'gambar', 'urutan', 'status'),
		'file_field' => 'gambar',
		'upload_path' => 'upload/sejarah',
		'status_options' => array('aktif', 'nonaktif'),
		'columns' => array('tahun' => 'Tahun', 'judul' => 'Judul', 'urutan' => 'Urutan', 'status' => 'Status'),
	);

	public function index()
	{
		$this->render_crud('admin/sejarah/index', 'Admin Sejarah', 'sejarah', 'Sejarah', 'Kelola riwayat dan milestone perusahaan.');
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
