<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . 'controllers/admin/Admin_base.php';

class Visi_misi extends Admin_base
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin/M_visi_misi', 'model');
	}

	public function index()
	{
		$this->render_admin('admin/visi_misi', 'Admin Visi Misi', 'visi_misi');
	}

	public function visi_misi_result()
	{
		$this->json(array('status' => TRUE, 'data' => $this->model->result(), 'has_data' => $this->model->count_all() > 0));
	}

	public function tambah()
	{
		if ($this->model->count_all() > 0) {
			$this->json(array('status' => FALSE, 'message' => 'Visi dan misi sudah tersedia. Silakan gunakan menu edit.'));
			return;
		}
		$data = $this->visi_misi_data();
		if ($data['visi'] === '' || $data['misi'] === '') {
			$this->json(array('status' => FALSE, 'message' => 'Visi dan misi wajib diisi.'));
			return;
		}
		$data['created_at'] = date('d:m:Y');
		$this->json(array('status' => (bool) $this->model->tambah($data)));
	}

	public function visi_misi_edit()
	{
		$row = $this->model->get((int) $this->input->post('id_visi_misi'));
		$this->json(array('status' => !empty($row), 'data' => $row));
	}

	public function edit()
	{
		$id = (int) $this->input->post('id_visi_misi');
		$data = $this->visi_misi_data();
		if ($id < 1 || $data['visi'] === '' || $data['misi'] === '') {
			$this->json(array('status' => FALSE, 'message' => 'Visi dan misi wajib diisi.'));
			return;
		}
		$data['updated_at'] = date('d:m:Y');
		$this->json(array('status' => $this->model->edit($id, $data)));
	}

	public function hapus($id)
	{
		$this->json(array('status' => $this->model->hapus((int) $id)));
	}

	private function visi_misi_data()
	{
		return array(
			'visi' => $this->rich_text_input('visi'),
			'misi' => $this->rich_text_input('misi'),
			'status' => $this->input->post('status') === 'nonaktif' ? 'nonaktif' : 'aktif',
		);
	}
}
