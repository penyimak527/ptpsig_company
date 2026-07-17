<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . 'controllers/admin/Admin_base.php';

class Kegiatan extends Admin_base
{
	protected $crud = array(
		'table' => 'kegiatan',
		'primary_key' => 'id_kegiatan',
		'order_by' => 'tanggal',
		'order_dir' => 'DESC',
		'fields' => array('judul', 'slug', 'klien', 'kategori', 'tanggal', 'gambar', 'ringkasan', 'deskripsi', 'status'),
		'file_field' => 'gambar',
		'upload_path' => 'upload/kegiatan',
		'slug_field' => 'slug',
		'title_field' => 'judul',
		'status_options' => array('publish', 'draft'),
		'columns' => array('judul' => 'Judul', 'klien' => 'Klien', 'kategori' => 'Kategori', 'tanggal' => 'Tanggal', 'status' => 'Status'),
	);

	public function index()
	{
		$this->render_crud('admin/kegiatan/index', 'Admin Kegiatan', 'kegiatan', 'Kegiatan', 'Kelola konten kegiatan yang tampil di halaman umum.');
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
