<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . 'controllers/admin/Admin_base.php';

class Sejarah extends Admin_base
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin/M_sejarah', 'model');
	}

	public function index()
	{
		$this->render_admin('admin/sejarah', 'Admin Sejarah', 'sejarah');
	}

	public function sejarah_result()
	{
		$this->json(array('status' => TRUE, 'data' => $this->model->result(), 'has_data' => $this->model->count_all() > 0));
	}

	public function tambah()
	{
		if ($this->model->count_all() > 0) {
			$this->json(array('status' => FALSE, 'message' => 'Sejarah sudah tersedia. Silakan gunakan menu edit.'));
			return;
		}
		$data = $this->sejarah_data();
		if ($data['judul'] === '' || $data['konten'] === '') {
			$this->json(array('status' => FALSE, 'message' => 'Judul dan isi sejarah wajib diisi.'));
			return;
		}
		$data['created_at'] = date('d:m:Y');
		$this->json(array('status' => (bool) $this->model->tambah($data)));
	}

	public function sejarah_edit()
	{
		$row = $this->model->get((int) $this->input->post('id_sejarah'));
		$this->json(array('status' => !empty($row), 'data' => $row));
	}

	public function edit()
	{
		$id = (int) $this->input->post('id_sejarah');
		$data = $this->sejarah_data();
		if ($id < 1 || $data['judul'] === '' || $data['konten'] === '') {
			$this->json(array('status' => FALSE, 'message' => 'Judul dan isi sejarah wajib diisi.'));
			return;
		}
		$data['updated_at'] = date('d:m:Y');
		$this->json(array('status' => $this->model->edit($id, $data)));
	}

	public function hapus($id)
	{
		$this->json(array('status' => $this->model->hapus((int) $id)));
	}

	private function sejarah_data()
	{
		return array(
			'judul' => trim((string) $this->input->post('judul')),
			'konten' => $this->rich_text_input('konten'),
			'status' => $this->input->post('status') === 'nonaktif' ? 'nonaktif' : 'aktif',
		);
	}
}
