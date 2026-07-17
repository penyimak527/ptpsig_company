<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . 'controllers/admin/Admin_base.php';

class Visi_misi extends Admin_base
{
	protected $crud = array(
		'table' => 'visi_misi',
		'primary_key' => 'id_visi_misi',
		'order_by' => 'urutan',
		'order_dir' => 'ASC',
		'fields' => array('tipe', 'judul', 'deskripsi', 'urutan', 'status'),
		'status_options' => array('aktif', 'nonaktif'),
		'columns' => array('tipe' => 'Tipe', 'judul' => 'Judul', 'urutan' => 'Urutan', 'status' => 'Status'),
	);

	public function index()
	{
		$this->render_crud('admin/visi_misi/index', 'Admin Visi Misi', 'visi_misi', 'Visi Misi', 'Kelola visi dan misi perusahaan.');
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
