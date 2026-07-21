<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . 'controllers/admin/Admin_base.php';

class Kegiatan extends Admin_base
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin/M_kegiatan', 'model');
	}

	public function index()
	{
		$this->render_admin('admin/kegiatan', 'Admin Kegiatan', 'kegiatan');
	}

	public function kegiatan_result()
	{
		$this->json(array('status' => TRUE, 'data' => $this->model->result()));
	}

	public function tambah()
	{
		if ($this->input->method() === 'post') {
			$data = $this->kegiatan_data();
			if (!$this->kegiatan_valid($data)) {
				return;
			}
			$bagian = $this->bagian_data();
			if ($bagian === FALSE) {
				return;
			}
			$data['gambar'] = $this->upload_gambar(TRUE);
			if ($data['gambar'] === FALSE) {
				$this->delete_uploads($bagian['uploads']);
				return;
			}
			$data['created_at'] = date('d:m:Y');
			$saved = (bool) $this->model->tambah_dengan_bagian($data, $bagian['rows']);
			if (!$saved) {
				$this->delete_upload_file($data['gambar']);
				$this->delete_uploads($bagian['uploads']);
			}
			$this->json(array('status' => $saved));
			return;
		}

		$this->render_admin('admin/kegiatan/tambah', 'Tambah Kegiatan', 'kegiatan');
	}

	public function edit($id = NULL)
	{
		$id = $id !== NULL ? (int) $id : (int) $this->input->post('id_kegiatan');
		$row = $this->model->get($id);
		if (empty($row)) {
			show_404();
		}

		if ($this->input->method() === 'post') {
			$data = $this->kegiatan_data($id);
			if (!$this->kegiatan_valid($data)) {
				return;
			}
			$bagian = $this->bagian_data($id);
			if ($bagian === FALSE) {
				return;
			}
			$gambar = $this->upload_gambar();
			if ($gambar === FALSE) {
				$this->delete_uploads($bagian['uploads']);
				return;
			}
			if ($gambar !== NULL) {
				$data['gambar'] = $gambar;
			}
			$data['updated_at'] = date('d:m:Y');
			$updated = $this->model->edit_dengan_bagian($id, $data, $bagian['rows']);
			if (!$updated && $gambar !== NULL) {
				$this->delete_upload_file($gambar);
			}
			if (!$updated) {
				$this->delete_uploads($bagian['uploads']);
			}
			if ($updated && $gambar !== NULL && !empty($row['gambar'])) {
				$this->delete_upload_file($row['gambar']);
			}
			if ($updated) {
				$this->delete_uploads($bagian['obsolete']);
			}
			$this->json(array('status' => $updated));
			return;
		}

		$this->render_admin('admin/kegiatan/edit', 'Edit Kegiatan', 'kegiatan', array(
			'item' => $row,
			'bagian' => $this->model->get_bagian($id),
		));
	}

	public function hapus($id)
	{
		$row = $this->model->get((int) $id);
		$bagian = $this->model->get_bagian((int) $id);
		$deleted = $this->model->hapus((int) $id);
		if ($deleted && !empty($row['gambar'])) {
			$this->delete_upload_file($row['gambar']);
		}
		if ($deleted) {
			foreach ($bagian as $item) {
				if (!empty($item['gambar'])) {
					$this->delete_upload_file($item['gambar']);
				}
			}
		}
		$this->json(array('status' => $deleted));
	}

	private function kegiatan_data($id = NULL)
	{
		$judul = trim((string) $this->input->post('judul'));
		$slug = url_title($judul, 'dash', TRUE);
		$base_slug = $slug;
		$number = 2;
		while ($this->model->slug_exists($slug, $id)) {
			$slug = $base_slug . '-' . $number++;
		}

		return array(
			'judul' => $judul,
			'slug' => $slug,
			'klien' => trim((string) $this->input->post('klien')),
			'kategori' => trim((string) $this->input->post('kategori')),
			'tanggal' => $this->format_date_input($this->input->post('tanggal')),
			'ringkasan' => trim((string) $this->input->post('ringkasan')),
			'status' => $this->input->post('status') === 'publish' ? 'publish' : 'draft',
		);
	}

	private function kegiatan_valid($data)
	{
		$required = array('judul', 'klien', 'kategori', 'tanggal', 'ringkasan');
		foreach ($required as $field) {
			if (empty($data[$field])) {
				$this->json(array('status' => FALSE, 'message' => 'Semua informasi kegiatan wajib diisi.'));
				return FALSE;
			}
		}
		return TRUE;
	}

	private function bagian_data($id_kegiatan = NULL)
	{
		$judul = $this->input->post('bagian_judul');
		$konten = $this->input->post('bagian_konten', FALSE);
		$ids = $this->input->post('bagian_id');
		$judul = is_array($judul) ? $judul : array();
		$konten = is_array($konten) ? $konten : array();
		$ids = is_array($ids) ? $ids : array();

		if (empty($judul)) {
			$this->json(array('status' => FALSE, 'message' => 'Tambahkan minimal satu bagian isi kegiatan.'));
			return FALSE;
		}

		$existing = array();
		if ($id_kegiatan !== NULL) {
			foreach ($this->model->get_bagian($id_kegiatan) as $row) {
				$existing[(int) $row['id_bagian']] = $row;
			}
		}

		$rows = array();
		$uploads = array();
		$used_existing = array();
		$obsolete = array();
		foreach ($judul as $index => $section_title) {
			$section_title = trim((string) $section_title);
			$section_content = isset($konten[$index]) ? $this->sanitize_rich_text($konten[$index]) : '';
			if ($section_title === '' || trim(strip_tags($section_content)) === '') {
				$this->delete_uploads($uploads);
				$this->json(array('status' => FALSE, 'message' => 'Judul dan isi pada setiap bagian kegiatan wajib diisi.'));
				return FALSE;
			}

			$section_id = isset($ids[$index]) ? (int) $ids[$index] : 0;
			$old_image = $section_id > 0 && isset($existing[$section_id]) ? $existing[$section_id]['gambar'] : NULL;
			if ($section_id > 0 && isset($existing[$section_id])) {
				$used_existing[$section_id] = TRUE;
			}

			$new_image = $this->upload_bagian_gambar($index);
			if ($new_image === FALSE) {
				$this->delete_uploads($uploads);
				return FALSE;
			}
			if ($new_image !== NULL) {
				$uploads[] = $new_image;
				if (!empty($old_image)) {
					$obsolete[] = $old_image;
				}
			}

			$rows[] = array(
				'judul' => $section_title,
				'konten' => $section_content,
				'gambar' => $new_image !== NULL ? $new_image : $old_image,
				'urutan' => count($rows) + 1,
				'created_at' => date('d:m:Y'),
			);
		}

		foreach ($existing as $section_id => $row) {
			if (!isset($used_existing[$section_id]) && !empty($row['gambar'])) {
				$obsolete[] = $row['gambar'];
			}
		}

		return array('rows' => $rows, 'uploads' => $uploads, 'obsolete' => array_unique($obsolete));
	}

	private function upload_gambar($required = FALSE)
	{
		return $this->upload_image_field('gambar', 'upload/kegiatan', $required, 'Gambar utama kegiatan wajib diunggah.');
	}

	private function upload_bagian_gambar($index)
	{
		return $this->upload_image_field('bagian_gambar_' . $index, 'upload/kegiatan/bagian');
	}

	private function upload_image_field($field, $relative_path, $required = FALSE, $required_message = '')
	{
		if (empty($_FILES[$field]['name'])) {
			if ($required) {
				$this->json(array('status' => FALSE, 'message' => $required_message));
				return FALSE;
			}
			return NULL;
		}

		$path = FCPATH . $relative_path;
		if (!is_dir($path)) {
			mkdir($path, 0777, TRUE);
		}
		$this->upload->initialize(array(
			'upload_path' => $path,
			'allowed_types' => 'jpg|jpeg|png|webp',
			'max_size' => 4096,
			'encrypt_name' => TRUE,
		));
		if (!$this->upload->do_upload($field)) {
			$this->json(array('status' => FALSE, 'message' => strip_tags($this->upload->display_errors())));
			return FALSE;
		}
		return $relative_path . '/' . $this->upload->data('file_name');
	}

	private function delete_uploads($paths)
	{
		foreach (array_unique($paths) as $path) {
			$this->delete_upload_file($path);
		}
	}

	private function format_date_input($value)
	{
		$value = trim((string) $value);
		$date = DateTime::createFromFormat('Y-m-d', $value);
		if ($date !== FALSE && $date->format('Y-m-d') === $value) {
			return $date->format('d:m:Y');
		}

		$date = DateTime::createFromFormat('d:m:Y', $value);
		return $date !== FALSE && $date->format('d:m:Y') === $value ? $value : NULL;
	}
}
