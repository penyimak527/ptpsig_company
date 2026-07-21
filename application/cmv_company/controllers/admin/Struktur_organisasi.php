<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . 'controllers/admin/Admin_base.php';

class Struktur_organisasi extends Admin_base
{
	public function index()
	{
		$this->render_admin(
			'admin/struktur_organisasi/index',
			'Admin Struktur Organisasi',
			'struktur_organisasi',
			array('item' => $this->current_chart())
		);
	}

	public function save()
	{
		if ($this->input->method() !== 'post') {
			show_404();
		}

		$item = $this->current_chart();
		$image = $this->upload_chart(empty($item));
		if ($image === FALSE) {
			return;
		}

		$data = array(
			'parent_id' => NULL,
			'nama' => 'Bagan Struktur Organisasi',
			'jabatan' => 'Struktur Organisasi',
			'divisi' => 'Piramidsoft',
			'deskripsi' => 'Bagan struktur organisasi resmi Piramidsoft.',
			'urutan' => 0,
			'status' => 'aktif',
			'updated_at' => date('d:m:Y'),
		);
		if ($image !== NULL) {
			$data['foto'] = $image;
		}

		if (empty($item)) {
			$data['created_at'] = date('d:m:Y');
			$saved = (bool) $this->admin->insert('struktur_organisasi', $data);
		} else {
			$saved = $this->admin->update('struktur_organisasi', 'id_struktur', $item['id_struktur'], $data);
		}

		if (!$saved && $image !== NULL) {
			$this->delete_upload_file($image);
		}
		if ($saved && $image !== NULL && !empty($item['foto'])) {
			$this->delete_upload_file($item['foto']);
		}

		$this->json(array('status' => (bool) $saved, 'message' => $saved ? 'Bagan struktur organisasi berhasil disimpan.' : 'Bagan gagal disimpan.'));
	}

	private function current_chart()
	{
		$rows = $this->admin->get_all('struktur_organisasi', 'id_struktur', 'DESC');
		foreach ($rows as $row) {
			if (!empty($row['foto'])) {
				return $row;
			}
		}

		return array();
	}

	private function upload_chart($required = FALSE)
	{
		if (empty($_FILES['foto']['name'])) {
			if ($required) {
				$this->json(array('status' => FALSE, 'message' => 'Gambar bagan struktur organisasi wajib dipilih.'));
				return FALSE;
			}
			return NULL;
		}

		$path = FCPATH . 'upload/struktur_organisasi';
		if (!is_dir($path)) {
			mkdir($path, 0777, TRUE);
		}
		$this->upload->initialize(array(
			'upload_path' => $path,
			'allowed_types' => 'jpg|jpeg|png|webp',
			'max_size' => 6144,
			'encrypt_name' => TRUE,
		));
		if (!$this->upload->do_upload('foto')) {
			$this->json(array('status' => FALSE, 'message' => strip_tags($this->upload->display_errors())));
			return FALSE;
		}

		return 'upload/struktur_organisasi/' . $this->upload->data('file_name');
	}
}
